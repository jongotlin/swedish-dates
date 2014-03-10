<?php

namespace JGI\SwedishDates\Date\RedDay;

class SundayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        return '7' == $datetime->format('N');
    }
}
