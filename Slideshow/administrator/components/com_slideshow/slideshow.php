<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

KFactory::get('admin::com.slideshow.dispatcher')
	->dispatch(KRequest::get('get.view', 'cmd', 'images'));