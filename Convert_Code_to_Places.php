<?php

/**
 * Convert Places to Colombian DIAN Codes
 *
 * @author   Jose A. Londoño <jalondonore@gmail.com>
 * @version  1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */


function convertcodes($atts, $reg){
	
  if ($reg=="AMZ") {
 
    switch ($atts) {
      case "Leticia":
      $destino="91001000";
      break;
      case "Puerto Nariño":
      $destino="91540000";
      break;
      case "La Chorrera":
      $destino="91405000";
      break;
      case "Tarapacáa":
      $destino="91798000";
      break;
      case "La Pedrera":
      $destino="91407000";
      break;
      case "Puerto Santander":
      $destino="91669000";
      break;
      case "El encanto":
      $destino="91263000";
      break;
      case "Puerto Arica":
      $destino="91536000";
      break;
      case "Puerto Alegría":
      $destino="91530000";
      break;


      case "Miriti - Paraná":
      $destino="91460000";
      break;

      case "La Victoria":
      $destino="91430000";
      break;

    }
  }

  if ($reg=="ANT") {
 
    switch ($atts) {
      case "Buriticá":
      $destino="05113000";
      break;
      case "Jericó":
      $destino="05368000";
      break;
      case "El Carmen de Viboral":
      $destino="05148000";
      break;
      case "Cáceres":
      $destino="05120000";
      break;
      case "Remedios":
      $destino="05604000";
      break;
      case "Rionegro":
      $destino="05615000";
      break;
      case "Tarazá":
      $destino="05790000";
      break;
      case "Tarso":
      $destino="05792000";
      break;
      case "Jardín - Cáceres":
      $destino="05120002";
      break;
      case "Jardín - Suroeste":
      $destino="05364000";
      break;
      case "Puerto Valdivia":
      $destino="05854002";
      break;
      case "Puerto Triunfo":
      $destino="05591000";
      break;
      case "Pueblorrico":
      $destino="05576000";
      break;
      case "Campamento":
      $destino="05134000";
      break;
      case "Cañasgordas":
      $destino="05138000";
      break;
      case "El Bagre":
      $destino="05250000";
      break;
      case "Puerto Belgica":
      $destino="05120006";
      break;
      case "Puerto Berrío":
      $destino="05579000";
      break;
      case "Caicedo":
      $destino="05125000";
      break;
      case "Puerto Nare":
      $destino="05585000";
      break;
      case "Caldas":
      $destino="05129000";
      break;
      case "Vegachí":
      $destino="05858000";
      break;
      case "Briceño":
      $destino="05107000";
      break;
      case "Sabaneta":
      $destino="05631000";
      break;
      case "Belmira":
      $destino="05086000";
      break;
      case "Támesis":
      $destino="05789000";
      break;
      case "Betania":
      $destino="05091000";
      break;
      case "Betulia":
      $destino="05093000";
      break;
      case "Bello":
      $destino="05088000";
      break;
      case "San Carlos":
      $destino="05649000";
      break;
      case "San Jerónimo":
      $destino="05656000";
      break;
      case "San Francisco":
      $destino="05652000";
      break;
      case "Heliconia":
      $destino="05347000";
      break;
      case "Hispania":
      $destino="05353000";
      break;
      case "San Antonio de Prado":
      $destino="05001002";
      break;
      case "Valparaíso":
      $destino="05856000";
      break;
      case "Bolombolo":
      $destino="05861002";
      break;
      case "Itagüi":
      $destino="05360000";
      break;
      case "Yalí":
      $destino="05885000";
      break;
      case "Ituango":
      $destino="05361000";
      break;
      case "Yarumal":
      $destino="05887000";
      break;
      case "Salgar":
      $destino="05642000";
      break;
      case "San Andrés de Cuerquia":
      $destino="05647000";
      break;
      case "Turbo":
      $destino="05837000";
      break;
      case "El Doce":
      $destino="05790002";
      break;
      case "Ebéjico":
      $destino="05240000";
      break;
      case "Peque":
      $destino="05543000";
      break;
      case "Liborina":
      $destino="05411000";
      break;
      case "Llanos del Cuiva":
      $destino="05887007";
      break;
      case "Toledo":
      $destino="05819000";
      break;
      case "Montebello":
      $destino="05467000";
      break;
      case "Murindo":
      $destino="05475000";
      break;
      case "Mutatá":
      $destino="05480000";
      break;
      case "Necoclí":
      $destino="05490000";
      break;
      case "Nechí":
      $destino="05495000";
      break;
      case "Titiribí":
      $destino="05809000";
      break;
      case "Nariño":
      $destino="05483000";
      break;
      case "Vigía del Fuerte":
      $destino="05873000";
      break;
      case "Cisneros":
      $destino="05190000";
      break;
      case "Marinilla":
      $destino="05440000";
      break;
      case "Abejorral":
      $destino="05002000";
      break;
      case "Concepción":
      $destino="05206000";
      break;
      case "Concordia":
      $destino="05209000";
      break;
      case "Copacabana":
      $destino="05212000";
      break;
      case "Maceo":
      $destino="05425000";
      break;
      case "Ciudad Bolívar":
      $destino="05101000";
      break;
      case "Medellín":
      $destino="05001000";
      break;
      case "Cocorná":
      $destino="05197000";
      break;
      case "Chigorodó":
      $destino="05172000";
      break;
      case "Versalles":
      $destino="05679004";
      break;
      case "Don Matías":
      $destino="05237000";
      break;
      case "Palmitas":
      $destino="05001001";
      break;
      case "Venecia":
      $destino="05861000";
      break;
      case "Palermo":
      $destino="05789001";
      break;
      case "Doradal":
      $destino="05591004";
      break;
      case "Carolina del Príncipe":
      $destino="05150000";
      break;
      case "Caracolí":
      $destino="05142000";
      break;
      case "Caramanta":
      $destino="05145000";
      break;
      case "Carepa":
      $destino="05147000";
      break;
      case "La Ceja":
      $destino="05376000";
      break;
      case "La Cruzada":
      $destino="05604001";
      break;
      case "Caucasia":
      $destino="05154000";
      break;
      case "La Sierra":
      $destino="05585003";
      break;
      case "La Tablaza":
      $destino="05380001";
      break;
      case "Nueva Colonia":
      $destino="05837002";
      break;
      case "La Union":
      $destino="05400000";
      break;
      case "Olaya":
      $destino="05501000";
      break;
      case "La Pintada":
      $destino="05390000";
      break;
      case "La Estrella":
      $destino="05380000";
      break;
      case "Dabeiba":
      $destino="05234000";
      break;
      case "Currulao":
      $destino="05837001";
      break;
      case "San José de la Montaña":
      $destino="05658000";
      break;
      case "Sabanalarga":
      $destino="05628000";
      break;
      case "Amagá":
      $destino="05030000";
      break;
      case "Santo Domingo":
      $destino="05690000";
      break;
      case "Argelia":
      $destino="05055000";
      break;
      case "Valdivia":
      $destino="05854000";
      break;
      case "Amalfi":
      $destino="05031000";
      break;
      case "Santiago":
      $destino="05690004";
      break;
      case "Zaragoza":
      $destino="05895000";
      break;
      case "Santuario":
      $destino="05697000";
      break;
      case "San Roque":
      $destino="05670000";
      break;
      case "San Pedro de los Milagros":
      $destino="05664000";
      break;
      case "Guadalupe":
      $destino="05315000";
      break;
      case "Altamira":
      $destino="05093001";
      break;
      case "San Pedro de Urabá":
      $destino="05665000";
      break;
      case "San Vicente":
      $destino="05674000";
      break;
      case "Apartadó":
      $destino="05045000";
      break;
      case "Arboletes":
      $destino="05051000";
      break;
      case "Andes":
      $destino="05034000";
      break;
      case "Santa Isabel":
      $destino="05604003";
      break;
      case "Anorí":
      $destino="05040000";
      break;
      case "Anza":
      $destino="05044000";
      break;
      case "Gómez Plata":
      $destino="05310000";
      break;
      case "El Retiro":
      $destino="05607000";
      break;
      case "Girardota":
      $destino="05308000";
      break;
      case "Santa Fe de Antioquía":
      $destino="05042000";
      break;
      case "Granada":
      $destino="05313000";
      break;
      case "Angelopolis":
      $destino="05036000";
      break;
      case "Santa Barbara":
      $destino="05679000";
      break;
      case "Angostura":
      $destino="05038000";
      break;
      case "Giraldo":
      $destino="05306000";
      break;
      case "Santa Elena":
      $destino="05001004";
      break;
      case "Santa Rosa de Osos":
      $destino="05686000";
      break;
      case "Armenia Mantequilla":
      $destino="05059000";
      break;
      case "San Rafael":
      $destino="05667000";
      break;
      case "El Tres":
      $destino="05837003";
      break;
      case "Urrao":
      $destino="05847000";
      break;
      case "Fredonia":
      $destino="05282000";
      break;
      case "San Luis":
      $destino="05660000";
      break;
      case "El Tigre":
      $destino="05858001";
      break;
      case "Frontino":
      $destino="05284000";
      break;
      case "Sonsón":
      $destino="05756000";
      break;
      case "Sopetrán":
      $destino="05761000";
      break;
      case "Barbosa":
      $destino="05079000";
      break;
      case "San Jose del Nus":
      $destino="05670003";
      break;
      case "Abriaquí":
      $destino="05004000";
      break;
      case "Envigado":
      $destino="05266000";
      break;
      case "Entrerrios":
      $destino="05264000";
      break;
      case "El Peñol":
      $destino="05541000";
      break;
      case "San Juan de Urabá":
      $destino="05659000";
      break;
      case "Zungo Carretera":
      $destino="05045003";
      break;
      case "Yondó - Casabe":
      $destino="05893000";
      break;
      case "Guatapé":
      $destino="05321000";
      break;
      case "Yolombó":
      $destino="05890000";
      break;
      case "Segovia":
      $destino="05736000";
      break;
      case "Guarne":
      $destino="05318000";
      break;
      case "Uramita":
      $destino="05842000";
      break;
      case "Alejandria":
      $destino="05021000";
      break;
      case "Sevilla":
      $destino="05240003";
      break;
    }
  }

  if ($reg=="ARU") {
 
    switch ($atts) {    
      case "Arauca":
      $destino="81001000";
      break;
      case "Tame":
      $destino="81794000";
      break;
      case "Puerto Rondón":
      $destino="81591000";
      break;
      case "La Pesquera":
      $destino="81065022";
      break;
      case "Arauquita":
      $destino="81065000";
      break;
      case "Saravena":
      $destino="81736000";
      break;
      case "Puerto Nariño":
      $destino="81736008";
      break;
      case "Fortul":
      $destino="81300000";
      break;
      case "Cravo Norte":
      $destino="81220000";
      break;
      case "La Esmeralda":
      $destino="81065008";
      break;
    }
  }


  if ($reg=="ATL") {
 
    switch ($atts) {  

      case "Suan":
      $destino="08770000";
      break;
      case "Ponedera":
      $destino="08560000";
      break;
      case "Campo de la Cruz":
      $destino="08137000";
      break;
      case "Galapa":
      $destino="08296000";
      break;
      case "Malambo":
      $destino="08433000";
      break;
      case "Campeche":
      $destino="08078001";
      break;
      case "Tubará":
      $destino="08832000";
      break;
      case "Soledad":
      $destino="08758000";
      break;
      case "Palmar de Varela":
      $destino="08520000";
      break;
      case "Santo Tomás":
      $destino="08685000";
      break;
      case "Santa Veronica":
      $destino="08372004";
      break;
      case "Usiaurí":
      $destino="08849000";
      break;
      case "Piojo":
      $destino="08549000";
      break;
      case "Luruaco":
      $destino="08421000";
      break;
      case "Polonuevo":
      $destino="08558000";
      break;
      case "Candelaria":
      $destino="08141000";
      break;
      case "Mantí":
      $destino="08436000";
      break;
      case "Sabanagrande":
      $destino="08634000";
      break;
      case "Repelón":
      $destino="08606000";
      break;
      case "Sabanalarga":
      $destino="08638000";
      break;
      case "Isabel Lopez":
      $destino="08638004";
      break;
      case "Barranquilla":
      $destino="08001000";
      break;
      case "Baranoa":
      $destino="08078000";
      break;
      case "Arroyo de Piedra":
      $destino="08421001";
      break;
      case "Juan de Acosta":
      $destino="08372000";
      break;
      case "Salgar":
      $destino="08573002";
      break;
      case "Juan Mina":
      $destino="08001001";
      break;
      case "Santa Lucía":
      $destino="08675000";
      break;
      case "Puerto Colombia":
      $destino="08573000";
      break;
    }
  }


  if ($reg=="BOL") {
 
    switch ($atts) {  

      case "Achí":
      $destino="13006000";
      break;
      case "Norosí":
      $destino="13490000";
      break;
      case "Turbaná":
      $destino="13838000";
      break;
      case "San Fernando":
      $destino="13650000";
      break;
      case "Galerazamba":
      $destino="13673003";
      break;
      case "San Pablo":
      $destino="13670000";
      break;
      case "Soplaviento":
      $destino="13760000";
      break;
      case "Arjona":
      $destino="13052000";
      break;
      case "Clemencia":
      $destino="13222000";
      break;
      case "Pontezuela":
      $destino="13001020";
      break;
      case "Villanueva":
      $destino="13873000";
      break;
      case "Puerto Rico - Tiquisio":
      $destino="13810000";
      break;
      case "El Guamo":
      $destino="13248000";
      break;
      case "San Juan Nepomuceno":
      $destino="13657000";
      break;
      case "Loma de Arena":
      $destino="13673005";
      break;
      case "Morales":
      $destino="13473000";
      break;
      case "Montecristo":
      $destino="13458000";
      break;
      case "Cicuco":
      $destino="13188000";
      break;
      case "Simití":
      $destino="13744000";
      break;
      case "Talaigua Nuevo":
      $destino="13780000";
      break;
      case "Buena Seña":
      $destino="13490001";
      break;
      case "San Estanislao":
      $destino="13647000";
      break;
      case "Mompós":
      $destino="13468000";
      break;
      case "Hatillo de Loba":
      $destino="13300000";
      break;
      case "San Martín de Loba":
      $destino="13667000";
      break;
      case "La Boquilla":
      $destino="13001008";
      break;
      case "Santa Catalina":
      $destino="13673000";
      break;
      case "Margarita":
      $destino="13440000";
      break;
      case "Barranco de Loba":
      $destino="13074000";
      break;
      case "María la Baja":
      $destino="13442000";
      break;
      case "Regidor":
      $destino="13580000";
      break;
      case "Magangué":
      $destino="13430000";
      break;
      case "Juan Arias":
      $destino="13430013";
      break;
      case "El Carmen de Bolívar":
      $destino="13244000";
      break;
      case "Zambrano":
      $destino="13894000";
      break;
      case "Cantagallo":
      $destino="13160000";
      break;
      case "Calamar":
      $destino="13140000";
      break;
      case "San Jacinto":
      $destino="13654000";
      break;
      case "Santa Rosa del Sur":
      $destino="13688000";
      break;
      case "Barú":
      $destino="13001003";
      break;
      case "Santa Rosa - Pinillos":
      $destino="13549015";
      break;
      case "Córdoba":
      $destino="13212000";
      break;
      case "Río Viejo":
      $destino="13600000";
      break;
      case "Arenal":
      $destino="13042000";
      break;
      case "Buena Vista":
      $destino="13042001";
      break;
      case "Mahates":
      $destino="13433000";
      break;
      case "Turbaco":
      $destino="13836000";
      break;
      case "Pasacaballos":
      $destino="13001009";
      break;
      case "Santa Ana":
      $destino="13001012";
      break;
      case "Cartagena":
      $destino="13001000";
      break;
      case "Bayunca":
      $destino="13001004";
      break;



    }
  }

  if ($reg=="BOY") {
 
    switch ($atts) {      
      case "Floresta":
      $destino="15276000";
      break;
      case "Tutaza":
      $destino="15839000";
      break;
      case "Coscuez":
      $destino="15681007";
      break;
      case "Guicán":
      $destino="15332000";
      break;
      case "Macanal":
      $destino="15425000";
      break;
      case "Corrales":
      $destino="15215000";
      break;
      case "Firavitoba":
      $destino="15272000";
      break;
      case "Coper":
      $destino="15212000";
      break;
      case "Guateque":
      $destino="15322000";
      break;
      case "Turmequé":
      $destino="15835000";
      break;
      case "Jenesano":
      $destino="15367000";
      break;
      case "Gameza":
      $destino="15296000";
      break;
      case "Umbita":
      $destino="15842000";
      break;
      case "El Cocuy":
      $destino="15244000";
      break;
      case "Ventaquemada":
      $destino="15861000";
      break;
      case "Garagoa":
      $destino="15299000";
      break;
      case "Guayata":
      $destino="15325000";
      break;
      case "La Capilla":
      $destino="15380000";
      break;
      case "Labranzagrande":
      $destino="15377000";
      break;
      case "Jericó":
      $destino="15368000";
      break;
      case "Guacamayas":
      $destino="15317000";
      break;
      case "Duitama":
      $destino="15238000";
      break;
      case "Iza":
      $destino="15362000";
      break;
      case "Tunungua":
      $destino="15832000";
      break;
      case "Topaga":
      $destino="15820000";
      break;
      case "El Espino":
      $destino="15248000";
      break;
      case "Cucaita":
      $destino="15224000";
      break;
      case "Tuta":
      $destino="15837000";
      break;
      case "Cubara":
      $destino="15223000";
      break;
      case "La Victoria":
      $destino="15401000";
      break;
      case "Gachantivá":
      $destino="15293000";
      break;
      case "Tunja":
      $destino="15001000";
      break;
      case "Tota":
      $destino="15822000";
      break;
      case "Cuitiva":
      $destino="15226000";
      break;
      case "La Uvita":
      $destino="15403000";
      break;
      case "Covarachia":
      $destino="15218000";
      break;
      case "Paz de Rio":
      $destino="15537000";
      break;
      case "Samacá":
      $destino="15646000";
      break;
      case "Boavita":
      $destino="15097000";
      break;
      case "Sachica":
      $destino="15638000";
      break;
      case "Saboya":
      $destino="15632000";
      break;
      case "Boyacá":
      $destino="15104000";
      break;
      case "Betéitiva":
      $destino="15092000";
      break;
      case "Berbeo":
      $destino="15090000";
      break;
      case "San Jose de Pare":
      $destino="15664000";
      break;
      case "San Luis de Gaceno":
      $destino="15667000";
      break;
      case "Belén":
      $destino="15087000";
      break;
      case "Belencito":
      $destino="15491001";
      break;
      case "San Eduardo":
      $destino="15660000";
      break;
      case "Rondon":
      $destino="15621000";
      break;
      case "Buenavista":
      $destino="15109000";
      break;
      case "Puerto Boyacá":
      $destino="15572000";
      break;
      case "Caldas":
      $destino="15131000";
      break;
      case "Puente Boyacá":
      $destino="15861007";
      break;
      case "Tenza":
      $destino="15798000";
      break;
      case "Campohermoso":
      $destino="15135000";
      break;
      case "Viracacha":
      $destino="15879000";
      break;
      case "Quipama":
      $destino="15580000";
      break;
      case "tasco":
      $destino="15790000";
      break;
      case "Busbanza":
      $destino="15114000";
      break;
      case "Ráquira":
      $destino="15600000";
      break;
      case "Ramiriqui":
      $destino="15599000";
      break;
      case "San Mateo":
      $destino="15673000";
      break;
      case "San Miguel de Sema":
      $destino="15676000";
      break;
      case "Soatá":
      $destino="15753000";
      break;
      case "Socha":
      $destino="15757000";
      break;
      case "Siachoque":
      $destino="15740000";
      break;
      case "Susacon":
      $destino="15774000";
      break;
      case "Sativasur":
      $destino="15723000";
      break;
      case "Socotá":
      $destino="15755000";
      break;
      case "Sogamoso":
      $destino="15759000";
      break;
      case "Sotaquirá":
      $destino="15763000";
      break;
      case "Soracá":
      $destino="15764000";
      break;
      case "Sora":
      $destino="15762000";
      break;
      case "Somondoco":
      $destino="15761000";
      break;
      case "Sativanorte":
      $destino="15720000";
      break;
      case "Almeida":
      $destino="15022000";
      break;
      case "Sutatenza":
      $destino="15778000";
      break;
      case "Aquitania":
      $destino="15047000";
      break;
      case "Santa Barbara":
      $destino="15681005";
      break;
      case "Arcabuco":
      $destino="15051000";
      break;
      case "San Pablo de Borbur":
      $destino="15681000";
      break;
      case "Santa Maria":
      $destino="15690000";
      break;
      case "Santana":
      $destino="15686000";
      break;
      case "Zetaquira":
      $destino="15897000";
      break;
      case "Sutamarchán":
      $destino="15776000";
      break;
      case "Santa Sofía":
      $destino="15696000";
      break;
      case "Santa Rosa de Viterbo":
      $destino="15693000";
      break;
      case "Pisba":
      $destino="15550000";
      break;
      case "Puerto Serviez":
      $destino="15572007";
      break;
      case "Nuevo Colón":
      $destino="15494000";
      break;
      case "Moniquirá":
      $destino="15469000";
      break;
      case "Tibaná":
      $destino="15804000";
      break;
      case "Nobsa":
      $destino="15491000";
      break;
      case "Tipacoque":
      $destino="15810000";
      break;
      case "Monguí":
      $destino="15466000";
      break;
      case "Tinjacá":
      $destino="15808000";
      break;
      case "Oicatá":
      $destino="15500000";
      break;
      case "Mongua":
      $destino="15464000";
      break;
      case "Ciénega":
      $destino="15189000";
      break;
      case "Chivor":
      $destino="15236000";
      break;
      case "Chinavita":
      $destino="15172000";
      break;
      case "Chiscas":
      $destino="15180000";
      break;
      case "Chita":
      $destino="15183000";
      break;
      case "Motavita":
      $destino="15476000";
      break;
      case "Chitaraque":
      $destino="15185000";
      break;
      case "Chíquiza":
      $destino="15232000";
      break;
      case "Chiquinquirá":
      $destino="15176000";
      break;
      case "Nariño":
      $destino="15131001";
      break;
      case "Toca":
      $destino="15814000";
      break;
      case "Muzo":
      $destino="15480000";
      break;
      case "Otanche":
      $destino="15507000";
      break;
      case "Miraflores":
      $destino="15455000";
      break;
      case "Cómbita":
      $destino="15204000";
      break;
      case "Pajarito":
      $destino="15518000";
      break;
      case "Maripí":
      $destino="15442000";
      break;
      case "Paipa":
      $destino="15516000";
      break;
      case "Panqueba":
      $destino="15522000";
      break;
      case "Pantano de Vargas":
      $destino="15516005";
      break;
      case "Pesca":
      $destino="15542000";
      break;
      case "Tibasosa":
      $destino="15806000";
      break;
      case "Pauna":
      $destino="15531000";
      break;
      case "Chivatá":
      $destino="15187000";
      break;
      case "Togüí":
      $destino="15816000";
      break;
      case "Cerinza":
      $destino="15162000";
      break;
      case "Pachavita":
      $destino="15511000";
      break;
      case "Villa de Leyva":
      $destino="15407000";
      break;
      case "Paez":
      $destino="15514000";
      break;
    }
  }

      if($reg=="BOG"){
      switch ($atts) {
        case 'Bogotá D.C':
        $destino="11001000";
        break;
            
      }
   }

  if ($reg=="CAL") {
 
    switch ($atts) {  

      case "Florencia":
      $destino="17614004";
      break;
      case "Filadelfia":
      $destino="17272000";
      break;
      case "Supía":
      $destino="17777000";
      break;
      case "Marulanda":
      $destino="17446000";
      break;
      case "Marquetalia":
      $destino="17444000";
      break;
      case "Montebonito":
      $destino="17446001";
      break;
      case "Manzanares":
      $destino="17433000";
      break;
      case "Marmato":
      $destino="17442000";
      break;
      case "San Felix":
      $destino="17653007";
      break;
      case "Risaralda":
      $destino="17616000";
      break;
      case "Pacora":
      $destino="17513000";
      break;
      case "La Felisa":
      $destino="17388002";
      break;
      case "Riosucio":
      $destino="17614000";
      break;
      case "La Dorada":
      $destino="17380000";
      break;
      case "Pensilvania":
      $destino="17541000";
      break;
      case "Manizales":
      $destino="17001000";
      break;
      case "Palestina":
      $destino="17524000";
      break;
      case "La Merced":
      $destino="17388000";
      break;
      case "Salamina":
      $destino="17653000";
      break;
      case "Norcasia":
      $destino="17495000";
      break;
      case "San José":
      $destino="17665000";
      break;
      case "Neira":
      $destino="17486000";
      break;
      case "San Diego":
      $destino="17653021";
      break;
      case "San Daniel":
      $destino="17541011";
      break;
      case "Samaná":
      $destino="17662000";
      break;
      case "Samaria":
      $destino="17272005";
      break;
      case "San Bartolome":
      $destino="17513003";
      break;
      case "Guarinocito":
      $destino="17380002";
      break;
      case "La Enea":
      $destino="17001006";
      break;
      case "Villamaría":
      $destino="17873000";
      break;
      case "Aguadas":
      $destino="17013000";
      break;
      case "Arma":
      $destino="17013001";
      break;
      case "Chinchiná":
      $destino="17174000";
      break;
      case "Bolivia":
      $destino="17541002";
      break;
      case "Viterbo":
      $destino="17877000";
      break;
      case "Victoria":
      $destino="17867000";
      break;
      case "Bonafont":
      $destino="17614001";
      break;
      case "Anserma":
      $destino="17042000";
      break;
      case "Belalcázar":
      $destino="17088000";
      break;
      case "Aranzazu":
      $destino="17050000";
      break;
      case "Arauca":
      $destino="17524001";
      break;
      case "Castilla":
      $destino="17513001";
      break;
      case "Arboleda":
      $destino="17541001";
      break;
    }
  }

  if ($reg=="CAQ") {
 
    switch ($atts) {  
      case "Valparaíso":
      $destino="18860000";
      break;
      case "Belén de los Andaquíes":
      $destino="18094000";
      break;
      case "El Doncello":
      $destino="18247000";
      break;
      case "Puerto Rico":
      $destino="18592000";
      break;
      case "Morelia":
      $destino="18479000";
      break;
      case "El Paujil":
      $destino="18256000";
      break;
      case "Albania":
      $destino="18029000";
      break;
      case "Curillo":
      $destino="18205000";
      break;
      case "La Montañita":
      $destino="18410000";
      break;
      case "Cartagena del Chairá":
      $destino="18150000";
      break;
      case "Florencia":
      $destino="18001000";
      break;
      case "Rionegro":
      $destino="18592002";
      break;
      case "Solita":
      $destino="18785000";
      break;
      case "San Vicente del Caguán":
      $destino="18753000";
      break;
      case "San José del Fragua":
      $destino="18610000";
      break;
    }
  }

  if ($reg=="CAS") {
 
    switch ($atts) {  

      case "Hato Corozal":
      $destino="85125000";
      break;
      case "Sabanalarga":
      $destino="85300000";
      break;
      case "Maní":
      $destino="85139000";
      break;
      case "Yopal":
      $destino="85001000";
      break;
      case "Araguaney":
      $destino="85001008";
      break;
      case "Cupiagua":
      $destino="85010001";
      break;
      case "Támara":
      $destino="85400000";
      break;
      case "Cusiana Pozo":
      $destino="85010010";
      break;
      case "La Chaparrera":
      $destino="85001002";
      break;
      case "Trinidad":
      $destino="85430000";
      break;
      case "San Luis de Palenque":
      $destino="85325000";
      break;
      case "Villacarola":
      $destino="85162006";
      break;
      case "Pore":
      $destino="85263000";
      break;
      case "Villanueva":
      $destino="85440000";
      break;
      case "Monterrey":
      $destino="85162000";
      break;
      case "Aguazul":
      $destino="85010000";
      break;
      case "Nunchía":
      $destino="85225000";
      break;
      case "Aguaclara":
      $destino="85300001";
      break;
      case "Tauramena":
      $destino="85410000";
      break;
      case "Orocué":
      $destino="85230000";
      break;
      case "Paz de Ariporo":
      $destino="85250000";
      break;
    }
  }

  if ($reg=="CAU") {
 
    switch ($atts) {    
      case "Tunia":
      $destino="19548001";
      break;
      case "Padilla":
      $destino="19513000";
      break;
      case "Timbío":
      $destino="19807000";
      break;
      case "San Lorenzo":
      $destino="19100021";
      break;
      case "Timba":
      $destino="19110012";
      break;
      case "El Bordo":
      $destino="19532000";
      break;
      case "Ortigal":
      $destino="19455005";
      break;
      case "Balboa":
      $destino="19075000";
      break;
      case "Inzá":
      $destino="19355000";
      break;
      case "Villa Rica":
      $destino="19845000";
      break;
      case "El Naranjal":
      $destino="19050010";
      break;
      case "Piendamó":
      $destino="19548000";
      break;
      case "Piedrasentada":
      $destino="19532009";
      break;
      case "Popayán":
      $destino="19001000";
      break;
      case "El Estrecho":
      $destino="19532013";
      break;
      case "Timbiquí":
      $destino="19809000";
      break;
      case "Argelia":
      $destino="19050000";
      break;
      case "San Sebastián":
      $destino="19693000";
      break;
      case "Sotará":
      $destino="19760000";
      break;
      case "Jambaló":
      $destino="19364000";
      break;
      case "Caldono":
      $destino="19137000";
      break;
      case "Miranda":
      $destino="19455000";
      break;
      case "Mojarras":
      $destino="19450019";
      break;
      case "Mondomo":
      $destino="19698007";
      break;
      case "Bolívar":
      $destino="19100000";
      break;
      case "López de Micay":
      $destino="19418000";
      break;
      case "Mercaderes":
      $destino="19450000";
      break;
      case "Buenos Aires":
      $destino="19110000";
      break;
      case "Rosas":
      $destino="19622000";
      break;
      case "Corinto":
      $destino="19212000";
      break;
      case "El Patia":
      $destino="19532008";
      break;
      case "La Vega":
      $destino="19397000";
      break;
      case "Puracé":
      $destino="19585004";
      break;
      case "Cajibío":
      $destino="19130000";
      break;
      case "Belalcazar - Paez":
      $destino="19517000";
      break;
      case "Coconuco":
      $destino="19585000";
      break;
      case "Caloto":
      $destino="19142000";
      break;
      case "Puerto Tejada":
      $destino="19573000";
      break;
      case "Morales":
      $destino="19473000";
      break;
      case "Toribío":
      $destino="19821000";
      break;
      case "Totoró":
      $destino="19824000";
      break;
      case "Pescador":
      $destino="19137004";
      break;
      case "San Jose":
      $destino="19355005";
      break;
      case "La Sierra":
      $destino="19392000";
      break;
      case "Guapí":
      $destino="19318000";
      break;
      case "Florencia":
      $destino="19290000";
      break;
      case "Guachené":
      $destino="19300000";
      break;
      case "Santander de Quilichao":
      $destino="19698000";
      break;
      case "Suárez":
      $destino="19780000";
      break;
      case "Almaguer":
      $destino="19022000";
      break;
      case "Silvia":
      $destino="19743000";
      break;
      case "El Tambo":
      $destino="19256000";
      break;
      case "Galindez":
      $destino="19532004";
      break;
    }
  }

   if ($reg=="CES") {
 
    switch ($atts) {   
      case "San Diego":
      $destino="20750000";
      break;
      case "Tamalameque":
      $destino="20787000";
      break;
      case "San Martín":
      $destino="20770000";
      break;
      case "Ayacucho":
      $destino="20383001";
      break;
      case "Rincon Hondo":
      $destino="20178008";
      break;
      case "La Jagua de Ibirico":
      $destino="20400000";
      break;
      case "Chimichagua":
      $destino="20175000";
      break;
      case "Pelaya":
      $destino="20550000";
      break;
      case "Caracolicito":
      $destino="20238002";
      break;
      case "La Gloria":
      $destino="20383000";
      break;
      case "Becerril":
      $destino="20045000";
      break;
      case "Aguachica":
      $destino="20011000";
      break;
      case "La Paz":
      $destino="20621000";
      break;
      case "Gamarra":
      $destino="20295000";
      break;
      case "Manaure Balcón del Cesar":
      $destino="20443000";
      break;
      case "Agustín Codazzi":
      $destino="20013000";
      break;
      case "Mariangola":
      $destino="20001013";
      break;
      case "Rio de Oro":
      $destino="20614000";
      break;
      case "Bosconia":
      $destino="20060000";
      break;
      case "Pailitas":
      $destino="20517000";
      break;
      case "Chiriguaná":
      $destino="20178000";
      break;
      case "Astrea":
      $destino="20032000";
      break;
      case "Aguas Blancas":
      $destino="20001001";
      break;
      case "Gonzaléz":
      $destino="20310000";
      break;
      case "San Alberto":
      $destino="20710000";
      break;
      case "Curumaní":
      $destino="20228000";
      break;
      case "La Loma":
      $destino="20250002";
      break;
      case "El Paso":
      $destino="20250000";
      break;
      case "El Copey":
      $destino="20238000";
      break;
      case "Valledupar":
      $destino="20001000";
      break;
      case "San Roque":
      $destino="20228002";
      break;
      case "Pueblo Bello":
      $destino="20570000";
      break;
      case "Arjona":
      $destino="20032001";
      break;
    }
  }

  if ($reg=="CHOC") {
 
    switch ($atts) {    
      case "Quibdó":
      $destino="27001000";
      break;
      case "San Francisco":
      $destino="27006007";
      break;
      case "Unguia":
      $destino="27800000";
      break;
      case "Gilgal":
      $destino="27800002";
      break;
      case "Tadó":
      $destino="27787000";
      break;
      case "Nóvita":
      $destino="27491000";
      break;
      case "Lloró":
      $destino="27413000";
      break;
      case "Capurgana":
      $destino="27006003";
      break;
      case "Alto Baudó":
      $destino="27025000";
      break;
      case "Guarato":
      $destino="27787005";
      break;
      case "Cértegui":
      $destino="27787003";
      break;
      case "Belén De Bajira":
      $destino="27086000";
      break;
      case "Bojayá":
      $destino="27099000";
      break;
      case "Sipí":
      $destino="27745000";
      break;
      case "Santa Maria del Darien":
      $destino="27800003";
      break;
      case "Tutunendo":
      $destino="27001032";
      break;
      case "San José del Palmar":
      $destino="27660000";
      break;
      case "Juradó":
      $destino="27372000";
      break;
      case "Condoto":
      $destino="27205000";
      break;
      case "Bahía Solano":
      $destino="27075000";
      break;
      case "Yuto":
      $destino="27050000";
      break;
      case "Istmina":
      $destino="27361000";
      break;
      case "El Carmen de Atrato":
      $destino="27245000";
      break;
      case "Riosucio":
      $destino="27615000";
      break;
      case "Bajo Baudó":
      $destino="27077000";
      break;
      case "Animas":
      $destino="05209005";
      break;
      case "Nuquí":
      $destino="27495000";
      break;
      case "Acandí":
      $destino="27006000";
      break;
      case "Andagoya":
      $destino="27361001";
      break;
    }
  }

  if ($reg=="COR") {
 
    switch ($atts) {   
      case "Moñitos":
      $destino="23500000";
      break;
      case "Tuchín":
      $destino="23670011";
      break;
      case "Plaza Bonita":
      $destino="23555007";
      break;
      case "Montelíbano":
      $destino="23466000";
      break;
      case "San Antero":
      $destino="23672000";
      break;
      case "San Andres de Sotavento":
      $destino="23670000";
      break;
      case "Colomboy":
      $destino="23660004";
      break;
      case "Carrillo":
      $destino="23686002";
      break;
      case "Montería":
      $destino="23001000";
      break;
      case "Purísima":
      $destino="23586000";
      break;
      case "Lorica":
      $destino="23417000";
      break;
      case "Planeta Rica":
      $destino="23555000";
      break;
      case "Los Cerros":
      $destino="23555013";
      break;
      case "Los Córdobas":
      $destino="23419000";
      break;
      case "Cotorra":
      $destino="23300000";
      break;
      case "Cereté":
      $destino="23162000";
      break;
      case "Buena Vista":
      $destino="23079000";
      break;
      case "El Varal":
      $destino="23570004";
      break;
      case "Cienaga de Oro":
      $destino="23189000";
      break;
      case "Momil":
      $destino="23464000";
      break;
      case "Sahagún":
      $destino="23660000";
      break;
      case "Tierralta":
      $destino="23807000";
      break;
      case "La Ye":
      $destino="23660008";
      break;
      case "Valencia":
      $destino="23855000";
      break;
      case "San Pelayo":
      $destino="23686000";
      break;
      case "Puerto Escondido":
      $destino="23574000";
      break;
      case "Pueblo Nuevo":
      $destino="23570000";
      break;
      case "El Carito":
      $destino="23417002";
      break;
      case "El Viajano":
      $destino="23079012";
      break;
      case "Chimá":
      $destino="23168000";
      break;
      case "Puerto Libertador":
      $destino="23580000";
      break;
      case "San José de Uré":
      $destino="23682000";
      break;
      case "Canalete":
      $destino="23419015";
      break;
      case "San Carlos":
      $destino="23678000";
      break;
      case "La Apartada":
      $destino="23350000";
      break;
      case "Chinú":
      $destino="23182000";
      break;
      case "San Sebastian":
      $destino="23417009";
      break;
      case "San Bernardo del Viento":
      $destino="23675000";
      break;
      case "Ayapel":
      $destino="23068000";
      break;
    }
  }

  if ($reg=="CUN") {
 
    switch ($atts) {    
      case "Cabrera":
      $destino="25120000";
      break;
      case "Puerto Bogota":
      $destino="25320003";
      break;
      case "Chía":
      $destino="25175000";
      break;
      case "Sopó":
      $destino="25758000";
      break;
      case "Pacho":
      $destino="25513000";
      break;
      case "Tocaima":
      $destino="25815000";
      break;
      case "Suesca":
      $destino="25772000";
      break;
      case "Puente Quetame":
      $destino="25594002";
      break;
      case "Quipile":
      $destino="25596000";
      break;
      case "Ricaurte":
      $destino="25612000";
      break;
      case "Agua de Dios":
      $destino="25001000";
      break;
      case "Supata":
      $destino="25777000";
      break;
      case "Puente de Piedra":
      $destino="25430004";
      break;
      case "Tena":
      $destino="25797000";
      break;
      case "Villeta":
      $destino="25875000";
      break;
      case "Gama":
      $destino="25299000";
      break;
      case "Maya":
      $destino="25530001";
      break;
      case "Tausa":
      $destino="25793000";
      break;
      case "Cachipay":
      $destino="25123000";
      break;
      case "Chaguani":
      $destino="25168000";
      break;
      case "Yacopi":
      $destino="25885000";
      break;
      case "Tocancipá":
      $destino="25817000";
      break;
      case "Medina":
      $destino="25438000";
      break;
      case "Fosca":
      $destino="25281000";
      break;
      case "Paime":
      $destino="25518000";
      break;
      case "Nemocón":
      $destino="25486000";
      break;
      case "Gachetá":
      $destino="25297000";
      break;
      case "Choachí":
      $destino="25181000";
      break;
      case "Nariño":
      $destino="25483000";
      break;
      case "Funza":
      $destino="25286000";
      break;
      case "Facatativá":
      $destino="25269000";
      break;
      case "Tenjo":
      $destino="25799000";
      break;
      case "Fúquene":
      $destino="25288000";
      break;
      case "Gachancipa":
      $destino="25295000";
      break;
      case "Viota":
      $destino="25878000";
      break;
      case "Fusagasugá":
      $destino="25290000";
      break;
      case "Tobia":
      $destino="25592003";
      break;
      case "Puerto Salgar":
      $destino="25572000";
      break;
      case "Gachalá":
      $destino="25293000";
      break;
      case "Mosquera":
      $destino="25473000";
      break;
      case "Chinauta los Panches":
      $destino="25290011";
      break;
      case "Puli":
      $destino="25580000";
      break;
      case "Chipaque":
      $destino="25178000";
      break;
      case "Quetame":
      $destino="25594000";
      break;
      case "Fomeque":
      $destino="25279000";
      break;
      case "Nilo":
      $destino="25488000";
      break;
      case "Villagomez":
      $destino="25871000";
      break;
      case "Nimaima":
      $destino="25489000";
      break;
      case "Quebradanegra":
      $destino="25592000";
      break;
      case "Cambao":
      $destino="25662001";
      break;
      case "Chocontá":
      $destino="25183000";
      break;
      case "Fontibon":
      $destino="11030000";
      break;
      case "Soacha":
      $destino="25754000";
      break;
      case "Chusaca":
      $destino="25743006";
      break;
      case "Cajicá":
      $destino="25126000";
      break;
      case "El Triunfo":
      $destino="25245001";
      break;
      case "Nocaima":
      $destino="25491000";
      break;
      case "Viani":
      $destino="25867000";
      break;
      case "Venecia":
      $destino="25506000";
      break;
      case "Subachoque":
      $destino="25769000";
      break;
      case "Susa":
      $destino="25779000";
      break;
      case "San Francisco":
      $destino="25658000";
      break;
      case "Guacheta":
      $destino="25317000";
      break;
      case "Anapoima":
      $destino="25035000";
      break;
      case "Capellanía":
      $destino="25126001";
      break;
      case "La Calera":
      $destino="25377000";
      break;
      case "San Juan de Rioseco":
      $destino="25662000";
      break;
      case "Utica":
      $destino="25851000";
      break;
      case "Venecia - Paime":
      $destino="25518004";
      break;
      case "Zipacón":
      $destino="25898000";
      break;
      case "La Mesa":
      $destino="25386000";
      break;
      case "San Cayetano":
      $destino="25653000";
      break;
      case "Tudela":
      $destino="25518002";
      break;
      case "La Palma":
      $destino="25394000";
      break;
      case "Sasaima":
      $destino="25718000";
      break;
      case "Zipaquirá":
      $destino="25899000";
      break;
      case "La Florida":
      $destino="25040002";
      break;
      case "Carmen de Carupa":
      $destino="25154000";
      break;
      case "Caparrapi":
      $destino="25148000";
      break;
      case "Guaduas":
      $destino="25320000";
      break;
      case "Junin":
      $destino="25372000";
      break;
      case "Subia":
      $destino="25743005";
      break;
      case "Guasca":
      $destino="25322000";
      break;
      case "Arbeláez":
      $destino="25053000";
      break;
      case "El Peñón":
      $destino="25258000";
      break;
      case "Guataqui":
      $destino="25324000";
      break;
      case "Guatavita":
      $destino="25326000";
      break;
      case "Guayabetal":
      $destino="25335000";
      break;
      case "Apulo":
      $destino="25599000";
      break;
      case "Sutatausa":
      $destino="25781000";
      break;
      case "Gutiérrez":
      $destino="25339000";
      break;
      case "Ubala":
      $destino="25839000";
      break;
      case "Ubaque":
      $destino="25841000";
      break;
      case "El Charquito":
      $destino="25754001";
      break;
      case "Ubaté":
      $destino="25843000";
      break;
      case "Anolaima":
      $destino="25040000";
      break;
      case "Jerusalen":
      $destino="25368000";
      break;
      case "El Colegio Mesitas":
      $destino="25245000";
      break;
      case "Caqueza":
      $destino="25151000";
      break;
      case "Santandersito":
      $destino="25645001";
      break;
      case "Suba":
      $destino="11040000";
      break;
      case "Tabio":
      $destino="25785000";
      break;
      case "Cogua":
      $destino="25200000";
      break;
      case "Tibirita":
      $destino="25807000";
      break;
      case "Bosa":
      $destino="11092000";
      break;
      case "Silvania":
      $destino="25743000";
      break;
      case "Briceño":
      $destino="25758006";
      break;
      case "Cota":
      $destino="25214000";
      break;
      case "Une":
      $destino="25845000";
      break;
      case "Cartagena":
      $destino="25898006";
      break;
      case "La Peña":
      $destino="25398000";
      break;
      case "Sibaté":
      $destino="25740000";
      break;
      case "El Rosal":
      $destino="25260000";
      break;
      case "Simijaca":
      $destino="25745000";
      break;
      case "Macheta":
      $destino="25426000";
      break;
      case "El Sisga":
      $destino="25183001";
      break;
      case "Manta":
      $destino="25436000";
      break;
      case "Villapinzón":
      $destino="25873000";
      break;
      case "Albán":
      $destino="25019000";
      break;
      case "Tibacuy":
      $destino="25805000";
      break;
      case "Madrid":
      $destino="25430000";
      break;
      case "Pandi":
      $destino="25524000";
      break;
      case "Guayabal de Siquima":
      $destino="25328000";
      break;
      case "Lenguazaque":
      $destino="25407000";
      break;
      case "Cucunubá":
      $destino="25224000";
      break;
      case "Beltrán":
      $destino="25086000";
      break;
      case "Bituima":
      $destino="25095000";
      break;
      case "Sesquile":
      $destino="25736000";
      break;
      case "La Union":
      $destino="25279001";
      break;
      case "Vergara":
      $destino="25862000";
      break;
      case "Pasca":
      $destino="25535000";
      break;
      case "San Bernardo":
      $destino="25649000";
      break;
      case "Granada":
      $destino="25312000";
      break;
      case "La Punta":
      $destino="25799001";
      break;
      case "Paratebueno":
      $destino="25530000";
      break;
      case "San Ant de Tequen":
      $destino="25599001";
      break;
      case "La Vega":
      $destino="25402000";
      break;
      case "Bogota":
      $destino="11001000";
      break;
      case "Girardot":
      $destino="25307000";
      break;
      case "Bojacá":
      $destino="25099000";
      break;
      case "Topaipi":
      $destino="25823000";
      break;
      case "La Victoria":
      $destino="25245002";
      break;
    }
  }


   if ($reg=="GUA") {
 
    switch ($atts) {   
      case "Inírida":
      $destino="94001000";
      break;
    }
  }

  if ($reg=="GUV") {
 
    switch ($atts) {    
      case "El Retorno":
      $destino="95025000";
      break;
      case "San José del Guaviare":
      $destino="95001000";
      break;
    }
  }


  if ($reg=="HUI") {
 
    switch ($atts) {    
      case "Timaná":
      $destino="41807000";
      break;
      case "Pital":
      $destino="41548000";
      break;
      case "Pitalito":
      $destino="41551000";
      break;
      case "Suaza":
      $destino="41770000";
      break;
      case "Palestina":
      $destino="41530000";
      break;
      case "Palermo":
      $destino="41524000";
      break;
      case "Tesalia":
      $destino="41797000";
      break;
      case "Garzón":
      $destino="41298000";
      break;
      case "Algeciras":
      $destino="41020000";
      break;
      case "La Plata":
      $destino="41396000";
      break;
      case "Belen":
      $destino="41396001";
      break;
      case "San Agustín":
      $destino="41668000";
      break;
      case "San Adolfo":
      $destino="41006001";
      break;
      case "Paicol":
      $destino="41518000";
      break;
      case "Saladoblanco":
      $destino="41660000";
      break;
      case "Altamira":
      $destino="41026000";
      break;
      case "Isnos":
      $destino="41359000";
      break;
      case "Iquira":
      $destino="41357000";
      break;
      case "Hobo":
      $destino="41349000";
      break;
      case "Santa María":
      $destino="41676000";
      break;
      case "Argentina":
      $destino="41378000";
      break;
      case "Vegalarga":
      $destino="41001012";
      break;
      case "Baraya":
      $destino="41078000";
      break;
      case "Guadalupe":
      $destino="41319000";
      break;
      case "Bruselas":
      $destino="41551001";
      break;
      case "Gigante":
      $destino="41306000";
      break;
      case "Yaguará":
      $destino="41885000";
      break;
      case "Tello":
      $destino="41799000";
      break;
      case "Nátaga":
      $destino="41483000";
      break;
      case "Agrado":
      $destino="41013000";
      break;
      case "Villavieja":
      $destino="41872000";
      break;
      case "Neiva":
      $destino="41001000";
      break;
      case "Colombia":
      $destino="41206000";
      break;
      case "Campoalegre":
      $destino="41132000";
      break;
      case "Rivera":
      $destino="41615000";
      break;
      case "Tarqui":
      $destino="41791000";
      break;
      case "Acevedo":
      $destino="41006000";
      break;
      case "Teruel":
      $destino="41801000";
      break;
      case "Aipe":
      $destino="41016000";
      break;
      case "Oporapa":
      $destino="41503000";
      break;
    }
  }


   if ($reg=="GUJ") {
 
    switch ($atts) {   
      case "Barrancas":
      $destino="44078000";
      break;
      case "Buenavista":
      $destino="44098001";
      break;
      case "Albania":
      $destino="44430001";
      break;
      case "Riohacha":
      $destino="44001000";
      break;
      case "San Juan del Cesar":
      $destino="44650000";
      break;
      case "Villanueva":
      $destino="44874000";
      break;
      case "Mingueo":
      $destino="44090003";
      break;
      case "Manaure":
      $destino="44560000";
      break;
      case "Maicao":
      $destino="44430000";
      break;
      case "Hatonuevo":
      $destino="44078002";
      break;
      case "El Molino":
      $destino="44110000";
      break;
      case "Uribia":
      $destino="44847000";
      break;
      case "Fonseca":
      $destino="44279000";
      break;
      case "Distracción":
      $destino="44098000";
      break;
      case "Palomino":
      $destino="44001013";
      break;
      case "La Jagua del Pilar":
      $destino="44420000";
      break;
      case "Urumita":
      $destino="44855000";
      break;
    }
  }

  if ($reg=="MAG") {
 
    switch ($atts) {    
      case "Chibolo":
      $destino="47170000";
      break;
      case "El Dificil":
      $destino="47058000";
      break;
      case "La Gran Via":
      $destino="47189011";
      break;
      case "Guacamayal":
      $destino="47318015";
      break;
      /*
      case "Guacamayal": //inactive
      $destino="47980001";
      break;*/
      case "Ciénaga":
      $destino="47189000";
      break;
      case "Taganga":
      $destino="47001010";
      break;
      case "Tucurinca":
      $destino="47189007";
      break;
      case "Tenerife":
      $destino="47798000";
      break;
      case "Santa Ana":
      $destino="47053008";
      break;
      case "Cerro San Antonio":
      $destino="47161000";
      break;
      case "San Sebastian de Buenavista":
      $destino="47692000";
      break;
      case "Nueva Granada":
      $destino="47555003";
      break;
      case "Fundación":
      $destino="47288000";
      break;
      case "Nueva Granada":
      $destino="47460000";
      break;
      case "Gaira":
      $destino="47001005";
      break;
      case "Sevilla":
      $destino="47980008";
      break;
      case "Sitionuevo":
      $destino="47745000";
      break;
      case "Sabanas de San Angel":
      $destino="47660000";
      break;
      case "Algarrobo":
      $destino="47030000";
      break;
      case "El Banco":
      $destino="47245000";
      break;
      case "El Retén":
      $destino="47053004";
      break;
      case "Remolino":
      $destino="47605000";
      break;
      case "San Fernando":
      $destino="47707006";
      break;
      case "Media Luna":
      $destino="47551008";
      break;
      case "Riofrio":
      $destino="47189003";
      break;
      case "Tasajera":
      $destino="47570004";
      break;
      case "Pueblo Viejo":
      $destino="47570000";
      break;
      case "Salamina":
      $destino="47675000";
      break;
      case "El Piñon":
      $destino="47258000";
      break;
      case "Pivijay":
      $destino="47551000";
      break;
      case "Guachaca":
      $destino="47001006";
      break;
      case "Pijiño del Carmen":
      $destino="47545000";
      break;
      case "Aracataca":
      $destino="47053000";
      break;
      case "San Zenón":
      $destino="47703000";
      break;
      case "Palermo":
      $destino="47745003";
      break;
      case "Plato":
      $destino="47555000";
      break;
      case "Pueblonuevo":
      $destino="47245028";
      break;
      case "Guamal":
      $destino="47318000";
      break;
      case "Orihueca":
      $destino="47189002";
      break;
      case "Santa Ana":
      $destino="47707000";
      break;
      case "Santa Marta":
      $destino="47001000";
      break;
    }
  }

  if ($reg=="MET") {
 
    switch ($atts) {  

      case "Villavicencio":
      $destino="50001000";
      break;
      case "San Martín":
      $destino="50689000";
      break;
      case "La Macarena":
      $destino="50350000";
      break;
      case "Pachaquiaro":
      $destino="50573003";
      break;
      case "Fuente de Oro":
      $destino="50287000";
      break;
      case "El Castillo":
      $destino="50251000";
      break;
      case "Castilla de la Nueva":
      $destino="50150000";
      break;
      case "Restrepo":
      $destino="50606000";
      break;
      case "Piñalito":
      $destino="50711002";
      break;
      case "San Juan de Arama":
      $destino="50683000";
      break;
      case "Barranca de Upía":
      $destino="50110000";
      break;
      case "San Luis de Cubarral":
      $destino="50223000";
      break;
      case "Guamal":
      $destino="50318000";
      break;
      case "Vista Hermosa":
      $destino="50711000";
      break;
      case "Cumaral":
      $destino="50226000";
      break;
      case "Apiay":
      $destino="50001002";
      break;
      case "Medellin del Ariari":
      $destino="50251001";
      break;
      case "Granada":
      $destino="50313000";
      break;
      case "Puerto Concordia":
      $destino="50450000";
      break;
      case "Puerto López":
      $destino="50573000";
      break;
      case "Puerto Rico":
      $destino="50590000";
      break;
      case "Puerto Gaitán":
      $destino="50568000";
      break;
      case "Acacías":
      $destino="50006000";
      break;
      case "Puerto Lleras":
      $destino="50577000";
      break;
      case "La Uribe":
      $destino="50370000";
      break;
      case "El Dorado":
      $destino="50270000";
      break;
    }
  }


  if ($reg=="NAR") {
 
    switch ($atts) {    
      case "El Rosario":
      $destino="52256000";
      break;
      case "Alban":
      $destino="52019000";
      break;
      case "Tangareal del Mira":
      $destino="52835224";
      break;
      case "Samaniego":
      $destino="52678000";
      break;
      case "Leiva":
      $destino="52405000";
      break;
      case "El Encano":
      $destino="52001003";
      break;
      case "Colón Génova":
      $destino="52203000";
      break;
      case "Tangareal Carretera":
      $destino="52835141";
      break;
      case "Pilcuan":
      $destino="52354002";
      break;
      case "Linares":
      $destino="52411000";
      break;
      case "Pinzon":
      $destino="52838004";
      break;
      case "La Cruz":
      $destino="52378000";
      break;
      case "Cuaspud - Carlosama":
      $destino="52224000";
      break;
      case "Barbacoas":
      $destino="52079000";
      break;
      case "Tumaco":
      $destino="52835000";
      break;
      case "El Tablón de Gomez":
      $destino="52258000";
      break;
      case "Guaitarilla":
      $destino="52203001";
      break;
      case "Cuatro Esquinas":
      $destino="52838002";
      break;
      case "Aldana":
      $destino="52022000";
      break;
      case "Llorente":
      $destino="52835031";
      break;
      case "Obonuco":
      $destino="52001007";
      break;
      case "El Remolino":
      $destino="52786019";
      break;
      case "La Florida":
      $destino="52381000";
      break;
      case "San Bernardo":
      $destino="52685000";
      break;
      case "Santa Cruz - Guachavez":
      $destino="52699000";
      break;
      case "Genoy":
      $destino="52001004";
      break;
      case "El Peñol":
      $destino="52254000";
      break;
      case "Piedrahancha":
      $destino="52435000";
      break;
      case "La Llanada":
      $destino="52385000";
      break;
      case "Sandoná":
      $destino="52683000";
      break;
      case "Espriella":
      $destino="52835017";
      break;
      case "La Guayacana":
      $destino="52835030";
      break;
      case "Belen":
      $destino="52083000";
      break;
      case "Las Lajas":
      $destino="52356002";
      break;
      case "La Unión":
      $destino="52399000";
      break;
      case "Guachucal":
      $destino="52317000";
      break;
      case "Pasto":
      $destino="52001000";
      break;
      case "El Espino":
      $destino="52585003";
      break;
      case "Puerres":
      $destino="52573000";
      break;
      case "Gualmatán":
      $destino="52323000";
      break;
      case "Arboleda":
      $destino="52051000";
      break;
      case "Cumbitara":
      $destino="52233000";
      break;
      case "Daza":
      $destino="52001042";
      break;
      case "Cumbal":
      $destino="52227000";
      break;
      case "Taminango":
      $destino="52786000";
      break;
      case "Córdoba":
      $destino="52215000";
      break;
      case "Mocondino":
      $destino="52001053";
      break;
      case "Imues":
      $destino="52354000";
      break;
      case "Nariño":
      $destino="52001006";
      break;
      case "Ancuyá":
      $destino="52036000";
      break;
      case "Jose Maria Hernandez":
      $destino="52585004";
      break;
      case "Cabrera":
      $destino="52001027";
      break;
      case "Tangua":
      $destino="52788000";
      break;
      case "Policarpa":
      $destino="52540000";
      break;
      case "Candelillas":
      $destino="52835160";
      break;
      case "Junin":
      $destino="52079006";
      break;
      case "Ipiales":
      $destino="52356000";
      break;
      case "Catambuco":
      $destino="52001001";
      break;
      case "San Pedro de Cartago":
      $destino="52694000";
      break;
      case "El Charco":
      $destino="52250000";
      break;
      case "Cajapi":
      $destino="52835157";
      break;
      case "Sapuyes":
      $destino="52720000";
      break;
      case "San Pablo":
      $destino="52693000";
      break;
      case "Cebadal":
      $destino="52788007";
      break;
      case "Chucunes":
      $destino="52435002";
      break;
      case "Pupiales":
      $destino="52585000";
      break;
      case "Potosí":
      $destino="52560000";
      break;
      case "Providencia":
      $destino="52565000";
      break;
      case "Buesaquillo":
      $destino="52001030";
      break;
      case "San Lorenzo":
      $destino="52687000";
      break;
      case "Consacá":
      $destino="52207000";
      break;
      case "Yacuanquer":
      $destino="52885000";
      break;
      case "Imbili":
      $destino="52835163";
      break;
      case "Contadero":
      $destino="52210000";
      break;
      case "Ospina":
      $destino="52506000";
      break;
      case "El Diviso":
      $destino="19050005";
      break;
      case "Chachagüi":
      $destino="52240000";
      break;
      case "El Tambo":
      $destino="52260000";
      break;
      case "Iles":
      $destino="52352000";
      break;
      case "Altaquer":
      $destino="52079001";
      break;
      case "Buesaco":
      $destino="52110000";
      break;
      case "Tuquerres":
      $destino="52838000";
      break;
      case "Ricaurte":
      $destino="52612000";
      break;
      case "Sotomayor":
      $destino="52418000";
      break;
      case "Funes":
      $destino="52287000";
      break;
    }
  }

  if ($reg=="NOR") {
 
    switch ($atts) {    
      case "Durania":
      $destino="54239000";
      break;
      case "Arboledas":
      $destino="54051000";
      break;
      case "Gramalote":
      $destino="54313000";
      break;
      case "Labateca":
      $destino="54377000";
      break;
      case "Hacarí":
      $destino="54344000";
      break;
      case "La Esperanza":
      $destino="54385000";
      break;
      case "Sardinata":
      $destino="54720000";
      break;
      case "El Carmen":
      $destino="54245000";
      break;
      case "Herrán":
      $destino="54347000";
      break;
      case "Lourdes":
      $destino="54418000";
      break;
      case "Villa del Rosario":
      $destino="54874000";
      break;
      case "Cáchira":
      $destino="54128000";
      break;
      case "Cácota":
      $destino="54125000";
      break;
      case "Puerto Santander":
      $destino="54001010";
      break;
      case "El Tarra":
      $destino="54250000";
      break;
      case "Convención":
      $destino="54206000";
      break;
      case "Los Patios":
      $destino="54405000";
      break;
      case "Bucarasica":
      $destino="54109000";
      break;
      case "Villa Caro":
      $destino="54871000";
      break;
      case "Chitagá":
      $destino="54174000";
      break;
      case "Mutiscua":
      $destino="54480000";
      break;
      case "Pamplona":
      $destino="54518000";
      break;
      case "Pamplonita":
      $destino="54520000";
      break;
      case "El Zulia":
      $destino="54261000";
      break;
      case "Tibú":
      $destino="54810000";
      break;
      case "Abrego":
      $destino="54003000";
      break;
      case "Teorama":
      $destino="54800000";
      break;
      case "Chinácota":
      $destino="54172000";
      break;
      case "Ocaña":
      $destino="54498000";
      break;
      case "Santiago":
      $destino="54680000";
      break;
      case "Toledo":
      $destino="54820000";
      break;
      case "Ragonvalia":
      $destino="54599000";
      break;
      case "San Bernardo":
      $destino="54820008";
      break;
      case "Salazar":
      $destino="54660000";
      break;
      case "Cucutilla":
      $destino="54223000";
      break;
      case "San Calixto":
      $destino="54670000";
      break;
      case "La Parada":
      $destino="54874005";
      break;
      case "San Cayetano":
      $destino="54673000";
      break;
      case "Silos":
      $destino="54743000";
      break;
      case "Cúcuta":
      $destino="54001000";
      break;
      case "Bochalema":
      $destino="54099000";
      break;
    }
  }

  if ($reg=="PUT") {
 
    switch ($atts) {    
      case "El Tigre":
      $destino="86865003";
      break;
      case "Puerto Caicedo":
      $destino="86569000";
      break;
      case "San Miguel":
      $destino="86757000";
      break;
      case "Puerto Asís":
      $destino="86568000";
      break;
      case "Puerto Guzmán":
      $destino="86571000";
      break;
      case "Puerto Umbria":
      $destino="86885001";
      break;
      case "San Francisco":
      $destino="86749003";
      break;
      case "Puerto Leguízamo":
      $destino="86573000";
      break;
      case "La Dorada":
      $destino="86568013";
      break;
      case "Orito":
      $destino="86320000";
      break;
      case "Santiago":
      $destino="86749006";
      break;
      case "Villagarzón":
      $destino="86885000";
      break;
      case "Valle del Guamuez":
      $destino="86865000";
      break;
      case "Colón":
      $destino="86219000";
      break;
      case "Santana":
      $destino="86568019";
      break;
      case "Mocoa":
      $destino="86001000";
      break;
      case "Sibundoy":
      $destino="86749000";
      break;
    }
  }

  if ($reg=="QUI") {
 
    switch ($atts) {    
      case "Pijao":
      $destino="63548000";
      break;
      case "Filandia":
      $destino="63272000";
      break;
      case "Calarcá":
      $destino="63130000";
      break;
      case "Córdoba":
      $destino="63212000";
      break;
      case "La Tebaida":
      $destino="63401000";
      break;
      case "Barcelona":
      $destino="63130001";
      break;
      case "Génova":
      $destino="63302000";
      break;
      case "Armenia":
      $destino="63001000";
      break;
      case "Montenegro":
      $destino="63470000";
      break;
      case "Buenavista":
      $destino="63111000";
      break;
      case "Salento":
      $destino="63690000";
      break;
      case "Circasia":
      $destino="63190000";
      break;
      case "Quimbaya":
      $destino="63594000";
      break;
    }
  }

  if ($reg=="RIS") {
 
    switch ($atts) {  

      case "Mistrató":
      $destino="66456000";
      break;
      case "Belén de Umbría":
      $destino="66088000";
      break;
      case "Dosquebradas":
      $destino="66170000";
      break;
      case "Guática":
      $destino="66318000";
      break;
      case "San Clemente":
      $destino="66318002";
      break;
      case "Cerritos":
      $destino="66001079";
      break;
      case "Marsella":
      $destino="66440000";
      break;
      case "Apía":
      $destino="66045000";
      break;
      case "Santa Rosa de Cabal":
      $destino="66682000";
      break;
      case "Balboa":
      $destino="66075000";
      break;
      case "La Virginia":
      $destino="66400000";
      break;
      case "La Celia":
      $destino="66383000";
      break;
      case "Santuario":
      $destino="66687000";
      break;
      case "Quinchía":
      $destino="66594000";
      break;
      case "Pereira":
      $destino="66001000";
      break;
      case "Pueblo Rico":
      $destino="66572000";
      break;
      case "Irra":
      $destino="66594002";
      break;
    }
  }

  if ($reg=="SAP") {
 
    switch ($atts) {    
      case "Santa Catalina":
      $destino="88564006";
      break;
      case "San Andres Isla":
      $destino="88001000";
      break;
      case "Providencia":
      $destino="88564000";
      break;
    }
  }

  if ($reg=="SAN") {
 
    switch ($atts) {    
      case "Valle de San José":
      $destino="68855000";
      break;
      case "Gámbita":
      $destino="68298000";
      break;
      case "Floridablanca":
      $destino="68276000";
      break;
      case "Vado Real":
      $destino="68770003";
      break;
      case "Acapulco":
      $destino="68307007";
      break;
      case "Florián":
      $destino="68271000";
      break;
      case "Enciso":
      $destino="68266000";
      break;
      case "Suaita":
      $destino="68770000";
      break;
      case "Aguada":
      $destino="68013000";
      break;
      case "Socorro":
      $destino="68755000";
      break;
      case "Girón":
      $destino="68307000";
      break;
      case "El Playon":
      $destino="68255000";
      break;
      case "Simacota":
      $destino="68745000";
      break;
      case "Guaca":
      $destino="68318000";
      break;
      case "Galán":
      $destino="68296000";
      break;
      case "San Vicente de Chucurí":
      $destino="68689000";
      break;
      case "La Paz":
      $destino="68397000";
      break;
      case "Molagavita":
      $destino="68468000";
      break;
      case "Mogotes":
      $destino="68464000";
      break;
      case "Cimitarra":
      $destino="68190000";
      break;
      case "Puerto Wilches":
      $destino="68575000";
      break;
      case "Chipatá":
      $destino="68179000";
      break;
      case "Matanza":
      $destino="68444000";
      break;
      case "Concepción":
      $destino="68207000";
      break;
      case "Sabana de Torres":
      $destino="68655000";
      break;
      case "Bucaramanga":
      $destino="68001000";
      break;
      case "Malaga":
      $destino="68432000";
      break;
      case "Contratación":
      $destino="68211000";
      break;
      case "Rionegro":
      $destino="68615000";
      break;
      case "Puerto Parra":
      $destino="68573000";
      break;
      case "Charalá":
      $destino="68167000";
      break;
      case "Villanueva":
      $destino="68872000";
      break;
      case "Providencia":
      $destino="68572003";
      break;
      case "Páramo":
      $destino="68533000";
      break;
      case "Pescadero":
      $destino="68547008";
      break;
      case "Pinchote":
      $destino="68549000";
      break;
      case "Onzaga":
      $destino="68502000";
      break;
      case "Olival":
      $destino="68770001";
      break;
      case "Oiba":
      $destino="68500000";
      break;
      case "Puerto Araujo":
      $destino="68190002";
      break;
      case "Cerrito":
      $destino="68162000";
      break;
      case "Puente Nacional":
      $destino="68572000";
      break;
      case "Zapatoca":
      $destino="68895000";
      break;
      case "Piedecuesta":
      $destino="68547000";
      break;
      case "El Carmen De Chucurí":
      $destino="68235000";
      break;
      case "Jesús María":
      $destino="68368000";
      break;
      case "La Belleza":
      $destino="68377000";
      break;
      case "Vélez":
      $destino="68861000";
      break;
      case "San José de Miranda":
      $destino="68684000";
      break;
      case "El Centro":
      $destino="68081001";
      break;
      case "Aratoca":
      $destino="68051000";
      break;
      case "El Peñón":
      $destino="68250000";
      break;
      case "Guadalupe":
      $destino="68320000";
      break;
      case "Guavatá":
      $destino="68324000";
      break;
      case "Guepsa":
      $destino="68327000";
      break;
      case "Santa Helena del Opón":
      $destino="68720000";
      break;
      case "Barbosa":
      $destino="68077000";
      break;
      case "Sucre":
      $destino="68773000";
      break;
    }
  }


  if ($reg=="TOL") {
 
    switch ($atts) {    
      case "Ibague":
      $destino="73001000";
      break;
      case "Espinal":
      $destino="73268000";
      break;
      case "Honda":
      $destino="73349000";
      break;
      case "Guamo":
      $destino="73319000";
      break;
      case "Melgar":
      $destino="73449000";
      break;
      case "Chaparral":
      $destino="73168000";
      break;
      case "Mariquita":
      $destino="73443000";
      break;
      case "Purificación":
      $destino="73585000";
      break;
      case "Flandes":
      $destino="73275000";
      break;
      case "Natagaima":
      $destino="73483000";
      break;
      case "Líbano":
      $destino="73411000";
      break;
      case "Planadas":
      $destino="73555000";
      break;
      case "Prado":
      $destino="73563000";
      break;
      case "Saldaña":
      $destino="73671000";
      break;
      case "Carmen de Apicalá":
      $destino="73148000";
      break;
      case "Lérida":
      $destino="73408000";
      break;
      case "Ataco":
      $destino="73067000";
      break;
      case "Rovira":
      $destino="73624000";
      break;
      case "Falán":
      $destino="73270000";
      break;
      case "Coyaima":
      $destino="73217000";
      break;
      case "Coello":
      $destino="73200000";
      break;
      case "Coello - Cocora":
      $destino="73001020";
      break;

      case "Cajamarca":
      $destino="73124000";
      break;
      case "Fresno":
      $destino="73283000";
      break;
      case "Armero Guayabal":
      $destino="73055000";
      break;
      case "Cunday":
      $destino="73226000";
      break;
      
      case "Villarrica":
      $destino="73873000";
      break;
      
      case "Alpujarra":
      $destino="73024000";
      break;
      case "Herveo":
      $destino="73347000";
      break;
      case "Anzoátegui":
      $destino="73043000";
      break;
      case "Casabianca":
      $destino="73152000";
      break;
      case "San Luis":
      $destino="73678000";
      break;
      case "Venadillo":
      $destino="73861000";
      break;
      case "Ambalema":
      $destino="73030000";
      break;
      case "Icononzo":
      $destino="73352000";
      break;
      case "Piedras":
      $destino="73547000";
      break;
      case "Roncesvalles":
      $destino="73622000";
      break;
      case "Palocabildo":
      $destino="73520000";
      break;
      case "Santa Isabel":
      $destino="73686000";
      break;
      case "Rioblanco":
      $destino="73616000";
      break;
      case "Ortega":
      $destino="73504000";
      break;
      case "San Antonio":
      $destino="73675000";
      break;
      case "Alvarado":
      $destino="73026000";
      break;
      case "Dolores":
      $destino="73236000";
      break;
      case "Suárez":
      $destino="73770000";
      break;
      case "Villahermosa":
      $destino="73870000";
      break;
      case "Murillo":
      $destino="73461000";
      break;
      case "Valle de San Juan":
      $destino="73854000";
      break;


      case "Herrera":
      $destino="73616001";
      break;
      case "Junín":
      $destino="73861001";
      break;
      case "Juntas":
      $destino="73001006";
      break;
      case "La Arada":
      $destino="73024001";
      break;

      case "La Chamba":
      $destino="73319002";
      break;
      case "La Palmita":
      $destino="73483001";
      break;
      case "La Sierra":
      $destino="73408002";
      break;
      case "Olaya Herrera":
      $destino="73504008";
      break;
      case "Padua":
      $destino="73347005";
      break;
      case "Pastales Nuevo":
      $destino="73001027";
      break;
      case "Pastales Viejo":
      $destino="73001025";
      break;
      case "Payande":
      $destino="73678004";
      break;
      case "Playarrica":
      $destino="73675002";
      break;
      case "Boqueron":
      $destino="73352002";
      break;
      case "Buenos Aires":
      $destino="73001001";
      break;
      case "Caldas Viejo":
      $destino="73026001";
      break;
      case "Playarrica":
      $destino="73675002";
      break;
      case "Castilla":
      $destino="73217001";
      break;
      case "Chenche Asoleado":
      $destino="73585001";
      break;
      case "Convenio":
      $destino="73411002";
      break;
      case "Doima":
      $destino="73547002";
      break;
      case "El Limon":
      $destino="73168004";
      break;
      case "El Tablazo":
      $destino="73283003";
      break;
      case "El Totumo":
      $destino="73001015";
      break;
      case "Gaitania":
      $destino="73555002";
      break;
      case "Gualanday":
      $destino="73200001";
      break;

    }
  }

   if ($reg=="SUC") {
 
    switch ($atts) {   
      case "Tolú":
      $destino="70820000";
      break;
      case "Tolú Viejo":
      $destino="70823000";
      break;
      case "Sucre":
      $destino="70771000";
      break;
      case "Majagual":
      $destino="70429000";
      break;
      case "San Benito":
      $destino="70678000";
      break;
      case "Caimito":
      $destino="70124000";
      break;
      case "Corozal":
      $destino="70215000";
      break;
      case "Morroa":
      $destino="70473000";
      break;
      case "Sampués":
      $destino="70670000";
      break;
      case "Loma Seca":
      $destino="70678019";
      break;
      case "Galeras":
      $destino="70235000";
      break;
      case "Guaranda":
      $destino="70265000";
      break;
      case "Los Palmitos":
      $destino="70418000";
      break;
      case "San Onofre":
      $destino="70713000";
      break;
      case "San Marcos":
      $destino="70708000";
      break;
      case "Sincé":
      $destino="70742000";
      break;
      case "Sincelejo":
      $destino="70001000";
      break;
      case "San Pedro":
      $destino="70717000";
      break;
      case "La Unión":
      $destino="70400000";
      break;
      case "Coveñas - Coveñas Sucre":
      $destino="70221000";
      break;
      case "Coveñas - Santiago de Tolu":
      $destino="70820001";
      break;
      case "Ovejas":
      $destino="70508000";
      break;

    }
  }

  if ($reg=="VAC") {
 
    switch ($atts) {    
      case "Remolino":
      $destino="76275010";
      break;
      case "Cisneros":
      $destino="76109008";
      break;
      case "Rozo":
      $destino="76520026";
      break;
      case "Villa Gorgona":
      $destino="76130008";
      break;
      case "Cavasa":
      $destino="76130013";
      break;
      case "Roldanillo":
      $destino="76622000";
      break;
      case "Riofrío":
      $destino="76616000";
      break;
      case "Restrepo":
      $destino="76606000";
      break;
      case "Cartago":
      $destino="76147000";
      break;
      case "Caicedonia":
      $destino="76122000";
      break;
      case "Ansermanuevo":
      $destino="76041000";
      break;
      case "Yumbo":
      $destino="76892000";
      break;
      case "Yotoco":
      $destino="76890000";
      break;
      case "Andalucía":
      $destino="76036000";
      break;
      case "Zaragoza":
      $destino="76147010";
      break;
      case "Amaime":
      $destino="76520002";
      break;
      case "Zarzal":
      $destino="76895000";
      break;
      case "Argelia":
      $destino="76054000";
      break;
      case "Santa Elena":
      $destino="76248009";
      break;
      case "Buga":
      $destino="76111000";
      break;
      case "Salonica - La Marina":
      $destino="76616009";
      break;
      case "Cali":
      $destino="76001000";
      break;
      case "Bugalagrande":
      $destino="76113000";
      break;
      case "Buenaventura":
      $destino="76109000";
      break;
      case "Bolívar":
      $destino="76100000";
      break;
      case "San Pedro":
      $destino="76670000";
      break;
      case "Candelaria":
      $destino="76130000";
      break;
      case "Pradera":
      $destino="76563000";
      break;
      case "Lobo Guerrero":
      $destino="76233017";
      break;
      case "Holguín":
      $destino="76403003";
      break;
      case "La Victoria":
      $destino="76403000";
      break;
      case "Ulloa":
      $destino="76845000";
      break;
      case "Guacarí":
      $destino="76318000";
      break;
      case "Florida":
      $destino="76275000";
      break;
      case "Obando":
      $destino="76497000";
      break;
      case "Ginebra":
      $destino="76306000";
      break;
      case "La Uribe":
      $destino="76113013";
      break;
      case "Jamundí":
      $destino="76364000";
      break;
      case "Tulúa":
      $destino="76834000";
      break;
      case "La Paila":
      $destino="76895002";
      break;
      case "Trujillo":
      $destino="76828000";
      break;
      case "La Cumbre":
      $destino="76377000";
      break;
      case "La Tulia":
      $destino="76100007";
      break;
      case "Toro":
      $destino="76823000";
      break;
      case "La Unión":
      $destino="76400000";
      break;
      case "Fenicia":
      $destino="76616002";
      break;
      case "Palmira":
      $destino="76520000";
      break;
      case "Versalles":
      $destino="76863000";
      break;
      case "Alcalá":
      $destino="76020000";
      break;
      case "Sevilla":
      $destino="76736000";
      break;
      case "Presidente":
      $destino="76670007";
      break;
      case "Costa Rica":
      $destino="76306001";
      break;
      case "Puente Tierra":
      $destino="76126013";
      break;
      case "Primavera":
      $destino="76100009";
      break;
      case "Vijes":
      $destino="76869000";
      break;
      case "Dagua":
      $destino="76233000";
      break;
      case "Darién":
      $destino="76126000";
      break;
      case "El Dovio":
      $destino="76250000";
      break;
      case "El Placer":
      $destino="76248005";
      break;
      case "El Queremal":
      $destino="76233011";
      break;
      case "El Cerrito":
      $destino="76248000";
      break;
      case "El Carmelo":
      $destino="76130004";
      break;
      case "El Cairo":
      $destino="76246000";
      break;
      case "Sonso":
      $destino="76318008";
      break;
      case "El Águila":
      $destino="76243000";
      break;
    }
  }

  if ($reg=="VAU") {
 
    switch ($atts) {    
      case "Mitú":
      $destino="97001000";
      break;
    }
  }


  if ($reg=="VIC") {
 
    switch ($atts) {    
      case "Cumaribo":
      $destino="99773000";
      break;
      case "La Primavera":
      $destino="99524000";
      break;
      case "Puerto Carreno":
      $destino="99001000";
      break;
    }
  }

  return $destino;
}
