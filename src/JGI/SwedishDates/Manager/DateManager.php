<?php

namespace JGI\SwedishDates\Manager;

use JGI\SwedishDates\Model\Date;
use JGI\SwedishDates\Date\RedDay\RedDayChain;

class DateManager
{
    /**
     * @var \JGI\SwedishDates\Date\RedDay\RedDayChain
     */
    protected $redDayChain;

    /**
     * @param \JGI\SwedishDates\Date\RedDay\RedDayChain $redDayChain
     */
    public function __construct(RedDayChain $redDayChain)
    {
        $this->redDayChain = $redDayChain;
    }

    /**
     * @param \DateTime $dateTime
     *
     * @return \JGI\SwedishDates\Model\Date
     */
    public function getDate(\DateTime $dateTime)
    {
        $date = new Date($dateTime);
        $this->loadRedDay($date);

        return $date;
    }

    /**
     * @param \JGI\SwedishDates\Model\Date $date
     */
    protected function loadRedDay(Date $date)
    {
        foreach ($this->redDayChain->getRedDayRules() as $rule) {
            if ($rule->isRedDay($date->getDateTime())) {
                $date->setRedDay(true);
                return;
            }
        }
    }
}
