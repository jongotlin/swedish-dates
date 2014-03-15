<?php

namespace JGI\SwedishDates\Date\RedDay;

class GoodFridayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        $datetime = clone $datetime;
        return date("Y-m-d", easter_date($datetime->format('Y'))) == $datetime->modify('+2 day')->format('Y-m-d');
    }
}
