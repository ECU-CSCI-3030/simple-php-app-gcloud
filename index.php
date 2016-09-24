<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP Application</title>
</head>
<body>
<?php
$words = array('Hello','everyone','looking','at','this','site');
?>
<p>
<?php
foreach($words as $word) {
	echo $word,' ';
}
?>
</p>
</body>
</html>