<?php
 
/**
 * Plugin Name: Coordiplug Coordinadora Shipping
 * Plugin URI: uri
 * Description: Coordinadora Shipping Method for WooCommerce
 * Version: 0.5
 * Author: Jose A. Londoño
 * Author URI: uri
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: domain
 */


if ( ! defined( 'WPINC' ) ) {
 
    die;
 
}
 
/*
 * Check if WooCommerce is active
 */
if ( ! defined( 'WPINC' ) ) {
 
    die;
 
}

//$validation = "";
include( 'DB.php' );
include( 'cron.php' );
include( 'Convert_Code_to_Places.php' );

/*
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    function coordinadora_shipping_method() {
        if ( ! class_exists( 'CordinadoraRD_Shipping_Method' ) ) {
            class CordinadoraRD_Shipping_Method extends WC_Shipping_Method {
                /**
                 * Constructor for your shipping class
                 *
                 * @access public
                 * @return void
                 */
                public function __construct() {
                    $this->id                 = 'coordinadora'; 
                    $this->method_title       = __( 'Envios Coordinadora', 'coordinadora' );  
                    $this->method_description = __( 'Coordinadora Shipping Method', 'coordinadora' ); 
 
                    // Availability & Countries
                    $this->availability = 'including';
                    $this->countries = array(
                        'CO'  // Colombia
                        );
 
                    $this->init();
 
                    $this->enabled = isset( $this->settings['enabled'] ) ? $this->settings['enabled'] : 'yes';
                    $this->title = isset( $this->settings['title'] ) ? $this->settings['title'] : __( 'Envios Coordinadora', 'coordinadora' );

                    $this->option_nit = isset( $this->settings['option_nit'] ) ? $this->settings['option_nit'] : __( 'NIT', 'coordinadora' );

                    $this->option_apikey = isset( $this->settings['option_apikey'] ) ? $this->settings['option_apikey'] : __( 'APIKEY', 'coordinadora' );

                    $this->option_password = isset( $this->settings['option_password'] ) ? $this->settings['option_password'] : __( 'password', 'coordinadora' );

                    $this->option_div = isset( $this->settings['option_div'] ) ? $this->settings['option_div'] : __( '01', 'coordinadora' );

                    $this->option_ciudad = isset( $this->settings['option_ciudad'] ) ? $this->settings['option_ciudad'] : __( '05001000', 'coordinadora' );
                }
 
                /**
                 * Init your settings
                 *
                 * @access public
                 * @return void
                 */
                function init() {
                    // Load the settings API
                    $this->init_form_fields(); 
                    $this->init_settings(); 
 
                    // Save settings in admin if you have any defined
                    add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
                }
 
                /**
                 * Define settings field for this shipping
                 * @return void 
                 */
                function init_form_fields() { 
 
                    $this->form_fields = array(
 
                     'enabled' => array(
                          'title' => __( 'Activar', 'coordinadora' ),
                          'type' => 'checkbox',
                          'description' => __( 'Activar este metodo de envio.', 'coordinadora' ),
                          'default' => 'yes'
                          ),
 
                     'title' => array(
                        'title' => __( 'Nombre de metodo de envio', 'coordinadora' ),
                          'type' => 'text',
                          'description' => __( 'Titulo que se mostrara en opciones de envio', 'coordinadora' ),
                          'default' => __( 'Envios Coordinadora', 'coordinadora' )
                          ),



                     'option_nit' => array(
                        'title' => 'NIT',
                          'description' => 'Ingrese NIT registrado en Coordinadora',
                          'type' => 'text',
                          'default' => '',
                          'class' => '',
                          'css' => ''
                      ),


                     'option_apikey' => array(
                        'title' => 'Apikey',
                          'description' => 'Ingrese Apikey Suministrada por Coordinadora',
                          'type' => 'text',
                          'default' => '',
                          'class' => '',
                          'css' => ''
                      ),


                      'option_password' => array(
                        'title' => 'Clave',
                          'description' => 'Ingrese Clave Suministrada por Coordinadora',
                          'type' => 'password',
                          'default' => 'Default',
                          'class' => 'Class for the input',
                          'css' => ''

                      ),

                      'option_div' => array(
                        'title' => 'Division',
                          'description' => 'Ingrese Division Suministrada por Coordinadora',
                          'type' => 'text',
                          'default' => __( '01', 'coordinadora' ),
                          'class' => '',
                          'css' => ''

                      ),


                      'option_ciudad' => array(
                        'title' => 'Ciudad de origen de paquetes',
                          'description' => 'Ingrese Codigo Coordinadora de la ciudad desde donde envia (ej: 05001000 para medellin)',
                          'type' => 'text',
                          'default' => __( '05001000', 'coordinadora' ),
                          'class' => '',
                          'css' => ''

                      ),



                    'test_button' => array(
                          'title'             => __( 'Probar Conexion', 'coordinadora' ),
                          'type'              => 'button',
                          'custom_attributes' => array(
                            'onclick' => 'testing()',
                          ),
                          'description'       => __( 'Test Coordinadora WSDL Connection', 'coordinadora' ),
                          'desc_tip'          => true,
                        )

 
                     );

 
                }


                  /**
                 * Generate Button HTML.
                 *
                 * @access public
                 * @param mixed $key
                 * @param mixed $data
                 * @since 1.0.0
                 * @return string
                 */
                public function generate_button_html( $key, $data ) {
                  $field    = $this->plugin_id . $this->id . '_' . $key;
                  $defaults = array(
                    'class'             => 'button-secondary',
                    'css'               => '',
                    'custom_attributes' => array(),
                    'desc_tip'          => false,
                    'description'       => '',
                    'title'             => '',
                  );

                  $data = wp_parse_args( $data, $defaults );



                  ob_start();

                    // Check whether the button has been pressed AND also check the nonce
                  if (isset($_POST[esc_attr( $field )])) {
                    // the button has been pressed AND we've passed the security check
                    /*test_button_action();*/
                    echo '<div class="updated inline"><p>' .test_button_action($this->option_apikey, $this->option_password , $this->option_nit). '</p></div>';
                  } 

                  ?>

                  <tr valign="top">
                    <th scope="row" class="titledesc">
                      <label for="<?php echo esc_attr( $field ); ?>"><?php echo wp_kses_post( $data['title'] ); ?></label>
                      <?php echo $this->get_tooltip_html( $data ); ?>
                    </th>
                    <td class="forminp">
                      <fieldset>
                        <legend class="screen-reader-text"><span><?php echo wp_kses_post( $data['title'] ); ?></span></legend>
                        
                        <form action="options-general.php?page=test-button-slug" method="post">

                          <input type="hidden" value="true" name="<?php echo esc_attr( $field ); ?>" class="<?php echo esc_attr( $data['class'] ); ?>" id="<?php echo esc_attr( $field ); ?>" style="<?php echo esc_attr( $data['css'] ); ?>" <?php echo $this->get_custom_attribute_html( $data ); ?> />

                        <?php submit_button($data['title']); ?>
                        </form>

                      <?php echo $this->get_description_html( $data ); ?>

                      </fieldset>
                    </td>
                  </tr>
                  <?php
                  return ob_get_clean();
                }



                /**
                 * This function is used to calculate the shipping cost. Within this function we can check for weights, dimensions and other parameters.
                 *
                 * @access public
                 * @param mixed $package
                 * @return void
                 */
                public function calculate_shipping( $package = array() ) {
                    
                    $weight = 0;
                    $cost = 0;
                    $country = $package["destination"]["country"];

                    /* calcular peso total */
                    foreach ( $package['contents'] as $item_id => $values ) 
                     { 
                         $_product = $values['data']; 
                         $weight = $weight + $_product->get_weight() * $values['quantity']; 
                     }
                     $weight = wc_get_weight( $weight, 'kg' );
       
                    $countryZones = array(
                        'CO' => 1
                        );
 
                    $zonePrices = array(
                        0 => 10,
                        1 => 30,
                        2 => 50,
                        3 => 70
                        );

 
                    $zoneFromCountry = $countryZones[ $country ];
                    $priceFromZone = $zonePrices[ $zoneFromCountry ];
                    /*
                    print_r($package['quantity'] );
                    print_r($package['length']);
*/
                    
                    
                    $metodo = WC()->session->get( 'chosen_shipping_methods' );
                    $totalcompra = $package['cart_subtotal'];
                    
                    $destination_country = $package['destination']['country'];
                    switch($destination_country){
                        case 'CO': 

                            if( ($package["destination"]["city"] != '' ) and ( $package["destination"]["state"] !='') and ($metodo[0] == 'coordinadora') ){
                                  $cost = cotizacion($package["destination"]["city"],$package["destination"]["state"], $weight, $_product->get_length(), $_product->get_width(), $_product->get_height(), $this->option_apikey, $this->option_password , $this->option_nit, $this->option_ciudad); 
                                  /*$cost="inactivo"; */
                                  if ($cost=="inactivo") {
                                      custom_add_validation_rules_products($cost);
                                      $cost =0;
                                  } elseif ($cost=="Serr"){
                                      wc_add_notice( __( "En estos momentos no podemos calcular el costo de envio, por favor intente mas tarde o elija otro metodo de envio", 'woocommerce' ), 'error' );
                                      $cost = 0;
                                  } 
                            }
                              
                         break;
                    }
                    /*wc_add_notice( __( isset( $package["destination"]["city"]) . ' ' . isset( $package["destination"]["state"]) ), 'error' ); */


                    $rate = array(
                        'id' => $this->id,
                        'label' => $this->title,
                        'cost' => $cost
                    );
 
                    $this->add_rate( $rate );
                    
                }

            }
        }
    }
 
    add_action( 'woocommerce_shipping_init', 'coordinadora_shipping_method' );
 
    function add_coordinadora_shipping_method( $methods ) {
        $methods[] = 'CordinadoraRD_Shipping_Method';
        return $methods;
    }
 
    add_filter( 'woocommerce_shipping_methods', 'add_coordinadora_shipping_method' );
 
    function coordinadora_validate_order( $posted )   {
 
        $packages = WC()->shipping->get_packages();
 
        $chosen_methods = WC()->session->get( 'chosen_shipping_methods' );
         
        if( is_array( $chosen_methods ) && in_array( 'coordinadora', $chosen_methods ) ) {
             
            foreach ( $packages as $i => $package ) {
 
                if ( $chosen_methods[ $i ] != "coordinadora" ) {
                             
                    continue;
                             
                }
 
                $CordinadoraRD_Shipping_Method = new CordinadoraRD_Shipping_Method();

            }       
        } 
    }

        

    function cotizacion($atts, $reg, $weight,$length = 1, $width = 1, $height = 1, $apik,$pass,$nit,$origen){

        $destino = convertcodes($atts, $reg);

        $estado = validatecity($destino); /*compare city code in DB (active or inactive*/
        
        if ($estado=="inactivo" || $estado=="" ) {
            
            return "inactivo";

        } else {
          
          //$GLOBALS['$validation'] = "PASS";
          //Instancia objeto coneccion


        try {
            $Soap_Object = new SoapClient("https://ws.coordinadora.com/ags/1.4/server.php?wsdl",
            array('trace' => true, 'cache_wsdl' => WSDL_CACHE_NONE)
            ); 

        } catch (SoapFault $e) {
          
            return  "Serr";
          }

        try {


            $objResponse = $Soap_Object->__soapCall('Cotizador_cotizar', array('p' => array(
          'p' => array(
                'apikey' => $apik,
                'clave' => $pass,
                'nit' => $nit,
                'div' => '01',
                'cuenta' => '2',
                'producto' => '1',
                'origen' => $origen,
                'destino' => $destino,
                'valoracion' => '1000',
                'nivel_servicio' =>  array(
                'item' => 1),
                'detalle' => array(
                'item' => array (
                    'ubl' => 0,
                    'alto' => $height,
                    'ancho' => $width,
                    'largo' => $length,
                    'peso' => $weight,
                    'unidades' => 1)),

                    ))));
            /*for test */
            /*print_r($objResponse->Cotizador_cotizarResult->flete_total."nada".$weight."alto: ".$height."Largo: ".$length."ancho: ".$width."destino: ".$destino);*/
            
            /* ****************** */
          return $objResponse->Cotizador_cotizarResult->flete_total;

        } catch (SoapFault $e) {
          
            return $e->getMessage();
          }
        }

  }


    function cities($atts){

      //Instancia objeto coneccion
          try {
              $Soap_Object = new SoapClient("https://ws.coordinadora.com/ags/1.4/server.php?wsdl",
              array('trace' => true, 'cache_wsdl' => WSDL_CACHE_NONE)
              ); 

                $objResponse = $Soap_Object->__soapCall('Cotizador_ciudades', array('p' => array(
                'p' => array(
                ))));
                return $objResponse->Cotizador_ciudadesResult->item;
              
          } catch (SoapFault $e) {
            
              return $e->getMessage();
          }

    }


    function custom_add_validation_rules_products($lugar) {
      if ( ! isset( WC()->cart ) ) {
        return;
      }
      if ( $lugar == "inactivo" ) {
        wc_add_notice( __( 'Lo sentimos, en estos momentos no tenemos cubrimiento en la ciudad seleccionada, intente de nuevo en los proximos dias.' ), 'error' );
      }
          
      
    }

    add_action( 'woocommerce_checkout_process', 'custom_add_validation_rules_products' );

    add_action('woocommerce_after_checkout_validation', 'rei_after_checkout_validation');

    function rei_after_checkout_validation( $posted ) {

      $testingesto = cotizacion($posted["billing_city"],$posted["billing_state"]);
        
        if ( $testingesto == "inactivo") {
            wc_add_notice( __( "Lo sentimos, en estos momentos no tenemos cubrimiento en la ciudad seleccionada, intente de nuevo en los proximos dias.", 'woocommerce' ), 'error' );
             
        }

    }



    function test_button_action( $apik,$pass,$nit)
    {


      $opts = array(
          'http'=>array(
            'user_agent' => 'PHPSoapClient'
            )
        );

        $context = stream_context_create($opts);

        try {
        $Soap_Object = new SoapClient("https://ws.coordinadora.com/ags/1.4/server.php?wsdl",
         array('trace' => true, 'cache_wsdl' => WSDL_CACHE_NONE, 'exceptions' => 1,'stream_context' => $context)
         );

        } catch (SoapFault $e) {
              
            return 'Error: No se puede conectar al servidor de Coordinadora, compruebe que el web service de Coordinadora Mercantil esté funcionando ' . "(" . ($e->getMessage()) . ")";
        }



        try {
 
            $objResponse = $Soap_Object->__soapCall('Cotizador_cotizar', array('p' => array(
          'p' => array(
            'apikey' => $apik,
            'clave' => $pass,
          'nit' => $nit,
          'div' => '01',
          'cuenta' => '2',
          'producto' => '0',
          'origen' => '05001000',
          'destino' => '05001000',
          'valoracion' => '1000',
          'nivel_servicio' =>  array(
                'item' => 1),
          'detalle' => array(
                'item' => array (
                    'ubl' => 0,
                    'alto' => 1,
                    'ancho' => 1,
                    'largo' => 1,
                    'peso' => 1,
                    'unidades' => 1)),

        ))));


          
          return "Conexion Exitosa!!";
   
        } catch (SoapFault $e) {
           
            return $e->getMessage();
        }
    } 

    require 'updates/update-checker.php';
    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
      'http://localhost/update-server/?action=get_metadata&slug=coordinadora',
      __FILE__, //Full path to the main plugin file or functions.php.
      'coordinadora'
    );

    add_action( 'woocommerce_review_order_before_cart_contents', 'coordinadora_validate_order' , 10 );
    add_action( 'woocommerce_after_checkout_validation', 'coordinadora_validate_order' , 10 );
    add_filter( 'woocommerce_shipping_calculator_enable_city', '__return_true' );    
    add_filter( 'woocommerce_shipping_calculator_enable_postcode', '__return_false' );

    /*
    * @description Hook create tables when the plugin is activated
    */

    register_activation_hook( __FILE__, 'Coordiplug_DB_cities_create_tables' );
    register_activation_hook( __FILE__, 'Coordiplug_Cron_cities_plugin_activation' );


    /*
    * @description Hook it execute when the plugin is deactivated
    */
    register_deactivation_hook( __FILE__, 'Coordiplug_Cron_cities_plugin_deactivation' );
    register_deactivation_hook(__FILE__, 'Coordiplug_DB_cities_remove_tables' );

}



