<?php
chdir(dirname(__DIR__));

require(__DIR__ . '/vendor/autoload.php');

(new Bashka\Taskbot\App)->run();
