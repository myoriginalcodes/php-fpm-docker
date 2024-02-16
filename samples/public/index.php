<?php

require __DIR__.'/../src/SampleClass.php';

$sampleClass = new SampleClass;

echo "<br /><div class='center' style='background: blueviolet; padding: 20px;'>{$sampleClass->testIFClassIsLoaded()}</div><br />";

echo phpinfo();
