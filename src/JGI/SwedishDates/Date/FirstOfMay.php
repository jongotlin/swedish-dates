<?php

namespace JGI\SwedishDates\Date;

class FirstOfMay implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        return '5' == $datetime->format('n') && '1' == $datetime->format('j');
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
        return 'Första maj';
    }
}
