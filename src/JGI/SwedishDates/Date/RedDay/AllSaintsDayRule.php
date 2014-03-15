<?php

namespace JGI\SwedishDates\Date\RedDay;

class AllSaintsDayRule implements RedDayRuleInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedDay(\DateTime $datetime)
    {
        foreach (range(0, 6) as $i) {
            $tempDatetime = new \DateTime(sprintf('%s-10-31', $datetime->format('Y')));
            $tempDatetime->modify(sprintf('+%d day', $i));
            if ('6' == $tempDatetime->format('N') && $tempDatetime->format('Y-m-d') == $datetime->format('Y-m-d')) {
                return true;
            }
        }

        return false;
    }
}
