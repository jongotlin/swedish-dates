<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\EasterEve;

class EasterEveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider easterEveProvider
     */
    public function isEasterEve($date)
    {
        $easterEve = new EasterEve();

        $this->assertTrue($easterEve->match(new \DateTime($date)));
    }

    /**
     * @test
     * @dataProvider notEasterEveProvider
     */
    public function isNotEasterEve($date)
    {
        $easterEve = new EasterEve();

        $this->assertFalse($easterEve->match(new \DateTime($date)));
    }

    /**
     * @return array
     */
    public function easterEveProvider()
    {
        return [
            ['2014-04-19'],
            ['2015-04-04'],
        ];
    }

    /**
     * @return array
     */
    public function notEasterEveProvider()
    {
        return [
            ['2014-04-18'],
            ['2015-04-20'],
        ];
    }
}
