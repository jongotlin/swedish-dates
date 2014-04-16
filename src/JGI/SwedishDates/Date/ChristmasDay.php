<?php

namespace JGI\SwedishDates\Date;

class ChristmasDay implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        return '12' == $datetime->format('n') && '25' == $datetime->format('j');
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
        return 'Juldagen';
    }
}
