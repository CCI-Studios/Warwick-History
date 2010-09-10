<?php
defined('KOOWA') or die;


KFactory::get('admin::mod.adminhelper.html', array(
	'params'  => $params,
	'module'  => $module,
	'attribs' => $attribs
))->display();
