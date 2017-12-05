<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class DayChain
{
    /**
     * @var \JGI\SwedishDates\Date\DayInterface[]
     */
    protected $days = [];

    /**
     * @param \JGI\SwedishDates\Date\DayInterface $day
     */
    public function addDay(DayInterface $day)
    {
        $this->days[] = $day;
    }

    /**
     * @return \JGI\SwedishDates\Date\DayInterface[]
     */
    public function getDays(): array
    {
        return $this->days;
    }
}
