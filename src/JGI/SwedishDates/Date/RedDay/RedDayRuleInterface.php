<?php

namespace JGI\SwedishDates\Date\RedDay;

interface RedDayRuleInterface
{
    /**
     * @param \DateTime $datetime
     *
     * @return bool
     */
    public function isRedDay(\DateTime $datetime);
}
