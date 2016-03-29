<?php

namespace JGI\SwedishDates\Date;

class EasterEve implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        $datetime = clone $datetime;

        return date("Y-m-d", easter_date($datetime->format('Y'))) == $datetime->modify('+1 day')->format('Y-m-d');
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
        return 'Påskafton';
    }
}