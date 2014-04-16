<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\AllSaintsDay;

class AllSaintsDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider allSaintsDayProvider
     */
    public function allSaintsDayIsRed($date)
    {
        $allSaintsDay = new AllSaintsDay();

        $this->assertTrue($allSaintsDay->match(new \DateTime($date)));
    }

    /**
     * @test
     * @dataProvider nonAllSaintsDayProvider
     */
    public function nonAllSaintsDayIsNotRed($date)
    {
        $allSaintsDay = new AllSaintsDay();

        $this->assertFalse($allSaintsDay->match(new \DateTime($date)));
    }

    /**
     * @return array
     */
    public function allSaintsDayProvider()
    {
        return [
            ['2014-11-01'],
            ['2015-10-31'],
            ['2016-11-05'],
            ['2017-11-04'],
            ['2018-11-03'],
            ['2019-11-02'],
            ['2020-10-31'],
            ['2021-11-06'],
            ['2022-11-05'],
            ['2023-11-04'],
            ['2024-11-02'],
        ];
    }

    /**
     * @return array
     */
    public function nonAllSaintsDayProvider()
    {
        return [
            ['2014-11-02'],
            ['2015-11-01'],
            ['2016-11-06'],
            ['2017-11-05'],
            ['2018-11-04'],
            ['2019-11-03'],
            ['2020-11-01'],
            ['2021-11-07'],
            ['2022-11-06'],
            ['2023-11-05'],
            ['2024-11-03'],
            ['2014-10-31'],
            ['2015-10-30'],
            ['2016-11-04'],
            ['2017-11-03'],
            ['2018-11-02'],
            ['2019-11-01'],
            ['2020-10-30'],
            ['2021-11-05'],
            ['2022-11-04'],
            ['2023-11-03'],
            ['2024-11-01'],
        ];
    }
}
