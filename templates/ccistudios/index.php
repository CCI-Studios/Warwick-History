<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
$testing = "true";

?>
<html>
<head>



<?php if ($testing): ?>
	<meta name="robots" content="nofollow, noindex" />
<?php endif; ?>


<?php if ($testing): ?>
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/grid.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/forms.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/template.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/editorStyles.css" />
<?php else: ?>
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/template.css" />
<?php endif; ?>
</head>

<body class="<?php echo $menu; ?>">
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
index.php

</body>
</html>