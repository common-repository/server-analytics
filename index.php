<?php
/*
	* Plugin Name: Server Analytics
	* Plugin URL: https://www.diletec.com.br
	* Description: Verificação de servidor de aplicação (Server Analytics) é o melhor plugin para saber até quando o seu servidor aguenta em acessos.
	* Version: 2

	* Author: Diletec Desenvolvimento Web
	* Author URI: https://www.diletec.com.br
	*
*/


function SeverAnalytics_add_dashboard_widgets() {

	wp_add_dashboard_widget(
		'server_analytics_dashboard_widget',  // Widget slug.
		'Server Analytics',         // Title.
		'SeverAnalytics_dashboard_widget_function' // Display function.
	);
}
add_action( 'wp_dashboard_setup', 'SeverAnalytics_add_dashboard_widgets' );


function SeverAnalytics_dashboard_widget_function() {

	include_once("uso.php");

	include_once("cargacpu.php");

	include_once("alocada.php");

	echo '<br/><br/><b>Detalhes de memoria HD:</b> ';
	include_once("infos.php");




}