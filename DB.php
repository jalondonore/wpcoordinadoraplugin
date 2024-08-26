<?php



/*include( 'RDcoordinadora.php' );*/ 
/*
* @description Function create tables when the plugin is activated
*/
function Coordiplug_DB_cities_create_tables()
{
    //obtenemos el objeto $wpdb
    global $wpdb;

    //Table name - DB WP prefix
    $table_name = $wpdb->prefix . 'Coordiplug_DB_cities';

    //sql statemen to create table
    $sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      codigo varbinary(15) NOT NULL,
      nombre varbinary(128) NOT NULL,
      abreviado varbinary(60) NOT NULL,
      tipo_poblacion varbinary(10) NOT NULL,
      codigo_departamento varbinary(10) NOT NULL,
      nombre_departamento varbinary(128) NOT NULL,
      estado varbinary(10) NOT NULL,

      UNIQUE KEY id (id)
    );";

    //upgrade contiene la función dbDelta la cuál revisará si existe la tabla o no
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    //sql create table
    dbDelta($sql);
    /*Initial Data From WSDL*/
    /* Test: WSDL_CitiesInitialData();*/
    /* Test: WSDL_CitiesUpdateData();*/
}

/*
* @description Get Initial data of cities from WSDL
*/
function WSDL_CitiesInitialData()
{
    global $wpdb;
    $obj = cities(1);
    $table_name = $wpdb->prefix . 'Coordiplug_DB_cities';

    foreach ($obj as &$valor) {

        $wpdb->insert( $table_name, 
          
            array( 
              'codigo' => $valor->codigo, 
              'nombre' => $valor->nombre, 
              'abreviado' => $valor->abreviado, 
              'tipo_poblacion' => $valor->tipo_poblacion, 
              'codigo_departamento' => $valor->codigo_departamento,
              'nombre_departamento' => $valor->nombre_departamento, 
              'estado' => $valor->estado
            )
          );
    }
}

/*
* @description Update data of cities from WSDL
*/
function WSDL_CitiesUpdateData()
{
    global $wpdb;
    $obj = cities(1);
    
    $wpdb->query('START TRANSACTION');

    $table_name = $wpdb->prefix . 'Coordiplug_DB_cities';

    //sql delete table
    $sql = "DROP table IF EXISTS $table_name";
    $drop = $wpdb->query($sql);

    //sql create table
    $sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      codigo varbinary(15) NOT NULL,
      nombre varbinary(128) NOT NULL,
      abreviado varbinary(60) NOT NULL,
      tipo_poblacion varbinary(10) NOT NULL,
      codigo_departamento varbinary(10) NOT NULL,
      nombre_departamento varbinary(128) NOT NULL,
      estado varbinary(10) NOT NULL,

      UNIQUE KEY id (id)
    );";

    //inport updrade
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    //
    dbDelta($sql);

    //get cities data from WSDL
    foreach ($obj as &$valor) {

        $success = $wpdb->insert( $table_name, 
            array( 
              'codigo' => $valor->codigo, 
              'nombre' => $valor->nombre, 
              'abreviado' => $valor->abreviado, 
              'tipo_poblacion' => $valor->tipo_poblacion, 
              'codigo_departamento' => $valor->codigo_departamento,
              'nombre_departamento' => $valor->nombre_departamento, 
              'estado' => $valor->estado
            )
          );
    }

    if($success && $drop) {
        $wpdb->query('COMMIT'); // if you come here then well done
    }
    else {
        $wpdb->query('ROLLBACK'); //something went wrong, Rollback
    }

}



/*
* @description Function it execute when the plugin is deactivated
*/
function Coordiplug_DB_cities_remove_tables()
{
    //obtenemos el objeto $wpdb
    global $wpdb;

    //Table name - DB WP prefix
    $table_name = $wpdb->prefix . 'Coordiplug_DB_cities';

    //sql statement of table
    $sql = "DROP table IF EXISTS $table_name";

    $wpdb->query($sql);
}


function validatecity($destino){   /* Validate destination (active or not) WSDL  */

      global $wpdb;
      //$estadod = array();
      //$estadod[estado] = "";
      $table_name = $wpdb->prefix . 'Coordiplug_DB_cities';
      //$estado = $wpdb->get_results( "SELECT estado FROM ".$table_name."WHERE codigo =".$destino);
      $estado = $wpdb->get_row( "SELECT * FROM $table_name WHERE codigo = ".$destino, ARRAY_A );
      
      if ($estado['estado']=="inactivo") {
                return "inactivo";
      }
      return $estado['estado'];
}