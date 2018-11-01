<!DOCTYPE HTML>
<html>
	<!-- minimal code provided: be sure to use Bootstrap to make it "mobile first" -->
<head>
  <meta charset="utf-8">
  <title>Using RSS Feeds</title>
</head>
<body>
<?php
$url = "http://www.feedforall.com/sample.xml";

$feed = simplexml_load_file($url, 'SimpleXMLIterator');

echo "<h2>" .$feed->channel->description . "</h2>";

$filtered = new LimitIterator($feed->channel->item,0,10);
foreach($filtered as $item) {?>
	<h4><a href="<?=$item->link;?>"target="_blank"><?=$item->title;?></a></h4>
	
<?php

	date_default_timezone_set('Amereica/New_York');
	
	$date = new DateTime($item->pubDate);
	$date->setTimezone(new DateTimeZone('America/New_York'));
	
	$offset = $date->getOffset();
	
	$timezone = ($offset == -14400)? 'EDT':'EST';
	
	echo$date->format('M j, Y, g:ia') .$timezone;
?>
	<p><?php echo $item->description; ?></p>
<?php } ?>
</body>
</html>
