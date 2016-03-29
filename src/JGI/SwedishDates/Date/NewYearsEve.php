<?php

namespace JGI\SwedishDates\Date;

class NewYearsEve implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        return '12' == $datetime->format('n') && '31' == $datetime->format('j');
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
        return 'Nyårsafton';
    }
}
