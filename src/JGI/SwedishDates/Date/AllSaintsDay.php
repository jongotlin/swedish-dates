<?php

namespace JGI\SwedishDates\Date;

class AllSaintsDay implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
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

    /**
     * {@inheritdoc}
     */
    public function isRed()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Alla helgons dag';
    }
}
