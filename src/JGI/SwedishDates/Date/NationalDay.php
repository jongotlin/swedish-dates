<?php

namespace JGI\SwedishDates\Date;

class NationalDay implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime)
    {
        if (intval($datetime->format('Y')) >= 2005) {
            return '6' == $datetime->format('n') && '6' == $datetime->format('j');
        }

        return false;
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
        return 'Nationaldagen';
    }
}
