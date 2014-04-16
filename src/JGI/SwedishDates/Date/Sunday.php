<?php

namespace JGI\SwedishDates\Date;

class Sunday implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        return '7' == $datetime->format('N');
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
        return null;
    }
}
