<?php
defined('KOOWA') or die;

KFactory::get('site::mod.slideshow.html', array(
	'params'  => $params,
	'module'  => $module,
	'attribs' => $attribs
))->display();
