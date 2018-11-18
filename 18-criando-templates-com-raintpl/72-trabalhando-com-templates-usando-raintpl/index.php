<?php 

	//Carrega a classe autoload
	require_once("vendor/autoload.php");

	// namespace
	use Rain\Tpl;
	// config
	$config = array(
		"tpl_dir"       => "tpl",
		"cache_dir"     => "cache/"
	);
	Tpl::configure( $config );

	// create the Tpl object
	$tpl = new Tpl;
	// assign a variable
	//$tpl->assign( "name", "Obi Wan Kenoby" );
	// assign an array
	//variável name com valor Hcode
	$tpl->assign( "name", "Hcode" );
	//Variável version com valor PHP_VERSION
	$tpl->assign( "version", PHP_VERSION );
	// draw the template
	$tpl->draw( "index" );

?>