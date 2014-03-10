<?php

namespace JGI\SwedishDates\Date\RedDay;

class ChristmasRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        return '12' == $datetime->format('n') && in_array($datetime->format('j'), ['25', '26']);
    }
}
