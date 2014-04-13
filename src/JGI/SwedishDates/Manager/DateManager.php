<?php

namespace JGI\SwedishDates\Manager;

use JGI\SwedishDates\Date\Name\NameChain;
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
     * @param \JGI\SwedishDates\Date\Name\NameChain $nameChain
     */
    public function __construct(RedDayChain $redDayChain, NameChain $nameChain)
    {
        $this->redDayChain = $redDayChain;
        $this->nameChain = $nameChain;
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
        $this->loadName($date);

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

    /**
     * @param \JGI\SwedishDates\Model\Date $date
     */
    protected function loadName(Date $date)
    {
        foreach ($this->nameChain->getNames() as $name) {
            if (!is_null($name)) {
                $date->setName($name->getName($date->getDateTime()));
                return;
            }
        }
    }
}
