<?php

namespace JGI\SwedishDates\Manager;

use JGI\SwedishDates\Date\DayChain;
use JGI\SwedishDates\Date\UseIfNoOtherNameExistInterface;
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
     * @param \DateTimeInterface $dateTime
     *
     * @return \JGI\SwedishDates\Model\Date
     */
    public function getDate(\DateTimeInterface $dateTime)
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
        $useIfNoOtherNameExist = null;
        foreach ($this->dayChain->getDays() as $day) {
            if ($day->match($date->getDateTime())) {
                if ($day instanceof UseIfNoOtherNameExistInterface) {
                    $useIfNoOtherNameExist = $day->getName();
                } else {
                    $date->addName($day->getName());
                }
                if ($day->isRed()) {
                    $date->setRedDay(true);
                }
                if ($day->isHoliday()) {
                    $date->setHoliday(true);
                }
            }
        }
        if ($useIfNoOtherNameExist && is_null($date->getName())) {
            $date->addName($useIfNoOtherNameExist);
        }
    }
}
