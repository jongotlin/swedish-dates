<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\Epiphany;

class EpiphanyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function epiphanyIsRed()
    {
        $epiphany = new Epiphany();

        $this->assertTrue($epiphany->match(new \DateTime('2000-01-06')));
        $this->assertTrue($epiphany->match(new \DateTime('2014-01-06')));
    }

    /**
     * @test
     */
    public function nonEphiphanyIsNotRed()
    {
        $epiphany = new Epiphany();

        $this->assertFalse($epiphany->match(new \DateTime('1014-01-05')));
        $this->assertFalse($epiphany->match(new \DateTime('1014-01-07')));
        $this->assertFalse($epiphany->match(new \DateTime('2014-06-01')));
    }
}
