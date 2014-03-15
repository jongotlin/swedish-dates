<?php

namespace JGI\SwedishDates\Date\RedDay;

class EasterSundayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        return date("Y-m-d", easter_date($datetime->format('Y'))) == $datetime->format('Y-m-d');
    }
}
