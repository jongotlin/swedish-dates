<?php

namespace JGI\SwedishDates\Date;

class DayChain
{
    /**
     * @var \JGI\SwedishDates\Date\DayInterface[]
     */
    protected $day;

    public function __construct()
    {
        $this->day = array();
    }

    /**
     * @param \JGI\SwedishDates\Date\DayInterface $day
     */
    public function addDay($day)
    {
        $this->day[] = $day;
    }

    /**
     * @return \JGI\SwedishDates\Date\DayInterface[]
     */
    public function getDays()
    {
        return $this->day;
    }
}
