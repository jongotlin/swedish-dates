<?php

namespace JGI\SwedishDates\Date\Name;

class NewYearsDayName implements NameInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(\DateTime $datetime)
    {
        if ('1' == $datetime->format('n') && '1' == $datetime->format('j')) {
            return 'Nyårsdagen';
        }

        return null;
    }
}
