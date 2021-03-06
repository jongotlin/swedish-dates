<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\AscensionDay;

class AscensionDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new AscensionDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['1970-05-07'],
            ['1971-05-20'],
            ['1972-05-11'],
            ['1973-05-31'],
            ['1974-05-23'],
            ['1975-05-08'],
            ['1976-05-27'],
            ['1977-05-19'],
            ['1978-05-04'],
            ['1979-05-24'],
            ['1980-05-15'],
            ['1981-05-28'],
            ['1982-05-20'],
            ['1983-05-12'],
            ['1984-05-31'],
            ['1985-05-16'],
            ['1986-05-08'],
            ['1987-05-28'],
            ['1988-05-12'],
            ['1989-05-04'],
            ['1990-05-24'],
            ['1991-05-09'],
            ['1992-05-28'],
            ['1993-05-20'],
            ['1994-05-12'],
            ['1995-05-25'],
            ['1996-05-16'],
            ['1997-05-08'],
            ['1998-05-21'],
            ['1999-05-13'],
            ['2000-06-01'],
            ['2001-05-24'],
            ['2002-05-09'],
            ['2003-05-29'],
            ['2004-05-20'],
            ['2005-05-05'],
            ['2006-05-25'],
            ['2007-05-17'],
            ['2008-05-01'],
            ['2009-05-21'],
            ['2010-05-13'],
            ['2011-06-02'],
            ['2012-05-17'],
            ['2013-05-09'],
            ['2014-05-29'],
            ['2015-05-14'],
            ['2016-05-05'],
            ['2017-05-25'],
            ['2018-05-10'],
            ['2019-05-30'],
            ['2020-05-21'],
            ['2021-05-13'],
            ['2022-05-26'],
            ['2023-05-18'],
            ['2024-05-09'],
            ['2025-05-29'],
            ['2026-05-14'],
            ['2027-05-06'],
            ['2028-05-25'],
            ['2029-05-10'],
            ['2030-05-30'],
            ['2031-05-22'],
            ['2032-05-06'],
            ['2033-05-26'],
            ['2034-05-18'],
            ['2035-05-03'],
            ['2036-05-22'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-05-28'],
            ['2014-05-30'],
        ];
    }
}
