<?php

namespace JGI\SwedishDates\Date;

class AscensionDay implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        $datetime = clone $datetime;
        return date("Y-m-d", easter_date($datetime->format('Y'))) == $datetime->modify('-39 day')->format('Y-m-d');
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
        return 'Kristi Himmelsfärdsdag';
    }
}
