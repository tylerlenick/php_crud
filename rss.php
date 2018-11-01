<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Using RSS Feeds</title>
</head>

<body>
<?php

//What is RSS? http://www.whatisrss.com/
//Anatomy of an RSS feed: http://www.webreference.com/authoring/languages/xml/rss/feeds/index.html

//example: (your submission *must* use another RSS feed)
$url = 'http://www.drudgereportfeed.com/rss.xml';

//simplexml_load_file(): Interprets XML file into an object
$feed = simplexml_load_file($url, 'SimpleXMLIterator');

//Output data from elements in XML file
echo "<h2>" . $feed->channel->description . "</h2>";

// LimitIterator() allows iteration over limited subset of items in an Iterator (Starting, Length)
$filtered = new LimitIterator($feed->channel->item, 0, 10);
foreach ($filtered as $item) { ?>
	<h4><a href="<?= $item->link; ?>"target="_blank"><?= $item->title;?></a></h4>

<?php
	//must set default time zone
	date_default_timezone_set('America/New_York');
	
	$date = new DateTime($item->pubDate);
	$date->setTimezone(new DateTimeZone('America/New_York'));
	
	//getOffset(): Returns timezone offset in seconds from UTC on success or FALSE on failure.
	$offset = $date->getOffset();
	
	//Note: =18000 = -5 hours, -14400 = -4 hours.
	//-14400 (tests for daylight saving time)
	$timezone = ($offset == -14400) ? 'EDT' : 'EST';
	
	//echo $date->format('m/d/y, g:la') . $timezone; //alternate display
	echo $date->format('M j, Y, g:la') . $timezone;
?>
<p><?php echo $item->description; ?></p>
<?php } ?>
</body>
</html>
