<?php

namespace JGI\SwedishDates\Date\RedDay;

class NationalDayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        if (intval($datetime->format('Y')) >= 2005) {
            return '6' == $datetime->format('n') && '6' == $datetime->format('j');
        }

        return false;
    }
}
