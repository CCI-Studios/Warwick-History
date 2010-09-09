<?php
$root       = '~/subdomains/warwickhistory/';
$site       = $root.'public_html/';
$nooku		= $root.'Frameworks/Nooku/';
$slideshow	= $root.'Slideshow/';


echo "<pre>";
shell_exec('rm '.$site.'administrator/components/com_default');
shell_exec('ln -s '.
	$nooku.	'administrator/components/com_default '.
	$site.	'administrator/components/com_default');
	
shell_exec('rm '.$site.'administrator/modules/mod_default');
shell_exec('ln -s '.
	$nooku.	'administrator/modules/mod_default '.
	$site.	'administrator/modules/mod_default');
	
shell_exec('rm '.$site.'libraries/koowa');
shell_exec('ln -s '.
	$nooku.	'libraries/koowa '.
	$site.	'libraries/koowa');
	
shell_exec('rm '.$site.'media/lib_koowa');
shell_exec('ln -s '.
	$nooku.	'media/lib_koowa '.
	$site.	'media/lib_koowa');

shell_exec('rm '.$site.'media/com_default');
shell_exec('ln -s '.
	$nooku.	'media/com_default '.
	$site.	'media/com_default');

shell_exec('rm '.$site.'plugins/koowa/default.php');
shell_exec('ln -s '.
	$nooku.	'plugins/koowa/default.php '.
	$site.	'plugins/koowa/default.php');
	
shell_exec('rm '.$site.'plugins/system/koowa.php');
shell_exec('ln -s '.
	$nooku.	'plugins/system/koowa.php '.
	$site.	'plugins/system/koowa.php');
	
shell_exec('rm '.$site.'plugins/system/koowa.xml');
shell_exec('ln -s '.
	$nooku.	'plugins/system/koowa.xml '.
	$site.	'plugins/system/koowa.xml');

shell_exec('rm '.$site.'components/com_default');
shell_exec('ln -s '.
	$nooku.	'site/components/com_default '.
	$site.	'components/com_default');
	
shell_exec('rm '.$site.'modules/mod_default');
shell_exec('ln -s '.
	$nooku.	'site/modules/mod_default '.
	$site.	'modules/mod_default');
echo "Installed Nooku\n";


shell_exec('rm '.$site.'administrator/components/com_slideshow');
echo shell_exec('ln -s '.
	$slideshow.	'administrator/components/com_slideshow '.
	$site.		'administrator/components/com_slideshow');
	
shell_exec('rm '.$site.'modules/mod_slideshow');
shell_exec('ln -s '.
	$slideshow.	'modules/mod_slideshow '.
	$site.		'modules/mod_slideshow');
shell_exec('rm '.$site.'media/com_slideshow');
shell_exec('ln -s '.
	$slideshow.	'media/com_slideshow '.
	$site.		'media/com_slideshow');
echo "Installed Slideshow\n";
echo "</pre>";