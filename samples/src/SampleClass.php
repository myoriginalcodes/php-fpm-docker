<?php

declare(strict_types=1);

class SampleClass
{
    public function testIFClassIsLoaded(): string
    {
        $status =  sprintf(
            "The sample class was loaded. PHP Server is working using php: %s", 
            PHP_VERSION
        );

        return $status;
    }
}
