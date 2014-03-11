<?php

namespace JGI\SwedishDates\Date\RedDay;

class NationalDayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        return '6' == $datetime->format('m') && '6' == $datetime->format('d');
    }
}
