<?php

namespace JGI\SwedishDates\Date;

class BoxingDay implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        return '12' == $datetime->format('n') && '26' == $datetime->format('j');
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
        return 'Annandag jul';
    }
}
