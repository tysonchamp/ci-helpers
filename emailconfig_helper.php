<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function emailConfig(){
	$config = Array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'cwp.erisetechnology.com',
	    'smtp_port' => 25,
	    'smtp_user' => 'support@advertican.com',
	    'smtp_pass' => 'tjyfTz4B',
	    'mailtype'  => 'html', 
	    'charset'   => 'iso-8859-1'
	);
	return $config;
}

function fromEmail(){
	return "support@advertican.com";
}

function fromName(){
	return "Adverticafy Solutions Pvt. Ltd.";
}