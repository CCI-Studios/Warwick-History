<!DOCTYPE html>
<?php
$menu = 'home';
$testing = "true";s

?>
<html>
<head>



<?php if ($testing): ?>
	<meta name="robots" content="nofollow, noindex" />
<?php endif; ?>


	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/forms.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/template.css" />
	<link rel="stylesheet" type="text/css" href="/templates/<?php echo $this->template ?>/css/style.css" />
</head>

<body>
<?php if (!$testing): ?>
GOOGLE ANALYTICS
<?php endif; ?>
index.php

</body>
</html>