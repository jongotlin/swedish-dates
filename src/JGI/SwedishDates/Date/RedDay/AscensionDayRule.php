<?php

namespace JGI\SwedishDates\Date\RedDay;

// Kristi Himmelsfärdsdag
class AscensionDayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        $datetime = clone $datetime;
        return date("Y-m-d", easter_date($datetime->format('Y'))) == $datetime->modify('-39 day')->format('Y-m-d');
    }
}
