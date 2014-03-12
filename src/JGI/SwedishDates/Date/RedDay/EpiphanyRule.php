<?php

namespace JGI\SwedishDates\Date\RedDay;

class EpiphanyRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        return '1' == $datetime->format('n') && '6' == $datetime->format('j');
    }
}
