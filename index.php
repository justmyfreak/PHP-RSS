<?php 
include_once('lib/config.php');
include_once('lib/xmlparse.php');
$XML = new XMLParse($config['xml'],$config['perpage']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $site['name']; ?></title>
		<link rel="stylesheet" type="text/css" href="css/default.css"/>
	</head>
	<body>
		<div class="header">
			
		</div>
		<div class="content">
			
		</div>
		<div class="footer">
			
		</div>
	</body>
</html>