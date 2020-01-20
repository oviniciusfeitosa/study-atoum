<?php

namespace Vendor\Project\tests\units;

require_once __DIR__ . '/../../../../../vendor/autoload.php';

use atoum;

/*
 * Test class for Vendor\Project\HelloWorld
 *
 * Note that they had the same name that the tested class
 * and that it derives frim the atoum class
 */
class HelloWorld extends \atoum
{
    /*
     * This method is dedicated to the getHiAtoum() method
     */
    public function testGetHiAtoum ()
    {
        $this->given($this->newTestedInstance)
            ->then->string($this->testedInstance->getHiAtoum())
            ->isEqualTo('Hi atoum !');
    }
}