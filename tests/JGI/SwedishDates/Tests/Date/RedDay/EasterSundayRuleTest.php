<?php

namespace JGI\SwedishDates\Tests\Date\RedDay;

use JGI\SwedishDates\Date\RedDay\EasterSundayRule;

class EasterSundayRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider easterSundaysProvider
     */
    public function easterSundayIsRed($date)
    {
        $rule = new EasterSundayRule();

        $this->assertTrue($rule->isRedDay(new \DateTime($date)));
    }

    /**
     * @test
     * @dataProvider nonEasterSundaysProvider
     */
    public function nonEasterSundayIsNotRed($date)
    {
        $rule = new EasterSundayRule();

        $this->assertFalse($rule->isRedDay(new \DateTime($date)));
    }

    /**
     * @return array
     */
    public function easterSundaysProvider()
    {
        return [
            ['2014-04-20'],
            ['2015-04-05'],
            ['2016-03-27'],
            ['2017-04-16'],
            ['2018-04-01'],
            ['2019-04-21'],
            ['2020-04-12'],
            ['2021-04-04'],
            ['2022-04-17'],
            ['2023-04-09'],
            ['2024-03-31'],
        ];
    }

    /**
     * @return array
     */
    public function nonEasterSundaysProvider()
    {
        return [
            ['2014-04-18'],
            ['2015-04-03'],
            ['2016-03-25'],
            ['2017-04-14'],
            ['2018-03-30'],
            ['2019-04-19'],
            ['2020-04-10'],
            ['2021-04-02'],
            ['2022-04-15'],
            ['2023-04-07'],
            ['2024-03-29'],
            ['2014-04-21'],
            ['2015-04-06'],
            ['2016-03-28'],
            ['2017-04-17'],
            ['2018-04-02'],
            ['2019-04-22'],
            ['2020-04-13'],
            ['2021-04-05'],
            ['2022-04-18'],
            ['2023-04-10'],
            ['2024-04-01'],
        ];
    }
}
