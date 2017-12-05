<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\DayInterface;
use JGI\SwedishDates\Date\DayOccurOnceAYearInterface;

abstract class AbstractDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DayInterface|DayOccurOnceAYearInterface
     */
    protected $day;

    /**
     * @test
     * @dataProvider correctDaysProvider
     */
    public function correctDayMatches($date)
    {
        $this->assertTrue($this->day->match(new \DateTime($date)));
    }

    /**
     * @test
     * @dataProvider incorrectDaysProvider
     */
    public function incorrectDayDoesNotMatch($date)
    {
        $this->assertFalse($this->day->match(new \DateTime($date)));
    }

    /**
     * @test
     * @dataProvider correctDaysProvider
     */
    public function returnsCorrectDate($date)
    {
        $this->assertEquals(
            $date,
            $this->day->getDateForYear((int) (new \DateTime($date))->format('Y'))->format('Y-m-d')
        );
    }

    /**
     * @test
     * @dataProvider incorrectDaysProvider
     */
    public function returnsIncorrectDate($expected)
    {
        $date = $this->day->getDateForYear((int) (new \DateTime($expected))->format('Y'));
        if ($date) {
            $date = $date->format('Y-m-d');
        }

        $this->assertNotEquals($expected, $date);
    }
}
