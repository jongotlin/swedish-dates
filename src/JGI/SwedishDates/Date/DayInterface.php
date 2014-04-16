<?php

namespace JGI\SwedishDates\Date;

interface DayInterface
{
    /**
     * @param \DateTime $datetime
     *
     * @return bool
     */
    public function match(\DateTime $datetime);
}
