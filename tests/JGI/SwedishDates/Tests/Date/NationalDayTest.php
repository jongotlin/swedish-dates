<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\NationalDay;

class NationalDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function nationalDayIsRed()
    {
        $nationalDay = new NationalDay();

        $this->assertTrue($nationalDay->match(new \DateTime('2005-06-06')));
        $this->assertTrue($nationalDay->match(new \DateTime('2010-06-06')));
        $this->assertTrue($nationalDay->match(new \DateTime('2014-06-06')));
    }

    /**
     * @test
     */
    public function nonNationalDayIsNotRed()
    {
        $nationalDay = new NationalDay();

        $this->assertFalse($nationalDay->match(new \DateTime('2004-06-06')));
        $this->assertFalse($nationalDay->match(new \DateTime('2014-01-06')));
        $this->assertFalse($nationalDay->match(new \DateTime('2014-06-07')));
        $this->assertFalse($nationalDay->match(new \DateTime('2014-06-18')));
        $this->assertFalse($nationalDay->match(new \DateTime('2014-12-24')));
    }
}
