<?php

namespace JGI\SwedishDates\Date;

class MidsummerEve implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        foreach (range(0, 6) as $i) {
            $tempDatetime = new \DateTime(sprintf('%s-06-19', $datetime->format('Y')));
            $tempDatetime->modify(sprintf('+%d day', $i));
            if ('5' == $tempDatetime->format('N') && $tempDatetime->format('Y-m-d') == $datetime->format('Y-m-d')) {
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
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Midsommarafton';
    }
}
