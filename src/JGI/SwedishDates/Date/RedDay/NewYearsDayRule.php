<?php

namespace JGI\SwedishDates\Date\RedDay;

class NewYearsDayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        return '1' == $datetime->format('n') && '1' == $datetime->format('j');
    }
}
