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
			This is just another simple rss reader.
			This script will automatically parse RSS feed
		</div>
		<div class="content">
			
		</div>
		<div class="footer">
			&copy; justmyfreak 2010
		</div>
	</body>
</html>