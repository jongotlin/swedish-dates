<?php

namespace JGI\SwedishDates\Manager;

use JGI\SwedishDates\Date\DayChain;
use JGI\SwedishDates\Model\Date;

class DateManager
{
    /**
     * @var \JGI\SwedishDates\Date\DayChain
     */
    protected $dayChain;

    /**
     * @param \JGI\SwedishDates\Date\DayChain $dayChain
     */
    public function __construct(DayChain $dayChain)
    {
        $this->dayChain = $dayChain;
    }

    /**
     * @param \DateTime $dateTime
     *
     * @return \JGI\SwedishDates\Model\Date
     */
    public function getDate(\DateTime $dateTime)
    {
        $date = new Date($dateTime);
        $this->loadDay($date);

        return $date;
    }

    /**
     * @param \JGI\SwedishDates\Model\Date $date
     */
    protected function loadDay(Date $date)
    {
        foreach ($this->dayChain->getDays() as $day) {
            if ($day->match($date->getDateTime())) {
                $date->setRedDay($day->isRed());
                $date->setName($day->getName());

                return;
            }
        }
    }
}
