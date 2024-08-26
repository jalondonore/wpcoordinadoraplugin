<?php



function Coordiplug_Cron_cities_plugin_activation() {
    // Si no existe el evento, lo registramos
    if( ! wp_next_scheduled( 'Coordiplug_Cron_cities_daily_cron_job' ) ) {
        wp_schedule_event( current_time( 'timestamp' ), 'daily', 'Coordiplug_Cron_cities_daily_cron_job' );
    }
}


add_action( 'Coordiplug_Cron_cities_daily_cron_job', 'Coordiplug_Cron_cities_daily_do_this_job' );
function Coordiplug_Cron_cities_daily_do_this_job() {
    // Update DB cities
    WSDL_CitiesUpdateData();
}


function Coordiplug_Cron_cities_plugin_deactivation() {
    wp_clear_scheduled_hook( 'Coordiplug_Cron_cities_daily_cron_job' );
}