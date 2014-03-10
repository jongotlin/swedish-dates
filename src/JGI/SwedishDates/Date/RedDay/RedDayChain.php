<?php

namespace JGI\SwedishDates\Date\RedDay;

class RedDayChain
{
    /**
     * @var \JGI\SwedishDates\Date\RedDay\RedDayRuleInterface[]
     */
    protected $redDayRules;

    public function __construct()
    {
        $this->redDayRules = array();
    }

    /**
     * @param \JGI\SwedishDates\Date\RedDay\RedDayRuleInterface $redDayRule
     */
    public function addRedDayRule($redDayRule)
    {
        $this->redDayRules[] = $redDayRule;
    }

    /**
     * @return \JGI\SwedishDates\Date\RedDay\RedDayRuleInterface[]
     */
    public function getRedDayRules()
    {
        return $this->redDayRules;
    }
}
