<?php

namespace JGI\SwedishDates\Date;

class GoodFriday implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        $datetime = clone $datetime;
        return date("Y-m-d", easter_date($datetime->format('Y'))) == $datetime->modify('+2 day')->format('Y-m-d');
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
        return 'Långfredag';
    }
}