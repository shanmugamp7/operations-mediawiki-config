<?php
# WARNING: This file is publically viewable on the web. Do not put private data here.
$wgJobQueueAggregator = array(
	'class'       => 'JobQueueAggregatorRedis',
	'redisServer' => '10.64.0.180', # mc1001
	'redisConfig' => array(
		'connectTimeout' => 1
	)
);
# vim: set sts=4 sw=4 et :