<?php

namespace JGI\SwedishDates\Date;

class EasterSunday implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        return date("Y-m-d", easter_date($datetime->format('Y'))) == $datetime->format('Y-m-d');
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
        return 'Påskafton';
    }
}
