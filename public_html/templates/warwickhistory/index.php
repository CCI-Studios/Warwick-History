<!DOCTYPE HTML>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
$testing = "true";

if ($testing)
	error_reporting(E_ALL);
?>
<html>
<head>
	<jdoc:include type="head" />

	<link rel="stylesheet" type="text/css" href="/templates/warwickhistory/css/joomla.css" />
	<link rel="stylesheet" type="text/css" href="/templates/warwickhistory/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="/templates/warwickhistory/css/forms.css" />
	<link rel="stylesheet" type="text/css" href="/templates/warwickhistory/css/text.css" />
	<link rel="stylesheet" type="text/css" href="/templates/warwickhistory/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="/templates/warwickhistory/css/modules.css" />
	<link rel="stylesheet" type="text/css" href="/templates/warwickhistory/css/styles.css" />

	<script type="text/javascript" src="/media/system/js/mootools.js"></script>
	<script type="text/javascript" src="/templates/warwickhistory/scripts/image-spacing.js"></script>
	<script type="text/javascript" src="/templates/warwickhistory/scripts/image-block.js"></script>
	<script type="text/javascript" src="/templates/warwickhistory/scripts/dropmenu.js"></script>

	<?php if ($testing): ?>
		<meta name="robots" content="nofollow, noindex" />
	<?php endif; ?>
</head>

<body class="<?php echo $menu;?>">
<?php if (!$testing): ?>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<?php endif; ?>

<div id="sitetitle"><div>
	<a href="/"><img src="images/stories/title.png" alt="The Township of Warwick: A Story Through Time" /></a>
</div></div>


<div id="wrapper"><div>
	<div id="menu"><div>
		<jdoc:include type="modules" name="menu" style="xhtml" />
	</div></div>

	<div id="header"><div>
		<jdoc:include type="modules" name="header" style="xhtml" />
	</div></div>

	<div id="content"><div>
		<div id="search">
			<jdoc:include type="modules" name="search" style="xhtml" />
		</div>
		
		<jdoc:include type="component" />
		<div class="clr"></div>
	</div></div>

	<div class="frill1"></div>
	<div class="frill2"></div>
	<div class="frill3"></div>
	<div class="frill4"></div>
	<div class="frill5"></div>
	<div class="frill6"></div>
</div></div>

<div id="footer"><div>
	<jdoc:include type="modules" name="footer" style="xhtml" />
</div></div>

<div id="copyright"><div>
	<p class="left">Site By CCI Studios</p>
	<p class="right">&copy; The Corporation of the County of Lambton 2010</p>

	<div class="logos">
		<img src="/templates/warwickhistory/images/logos/lambton.png" alt="County of Lambton" />
		<img src="/templates/warwickhistory/images/logos/warwick.png" alt="County of Lambton" />
		<img src="/templates/warwickhistory/images/logos/ontario.png" alt="County of Lambton" />
	</div>
	<div class="clear"></div>
</div></div>

<div class="hidden"><jdoc:include type="modules" name="hidden" style="raw" /></div>
</body>
</html>