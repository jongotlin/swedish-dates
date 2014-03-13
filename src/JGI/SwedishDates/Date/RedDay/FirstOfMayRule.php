<?php

namespace JGI\SwedishDates\Date\RedDay;

class FirstOfMayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        return '5' == $datetime->format('n') && '1' == $datetime->format('j');
    }
}
