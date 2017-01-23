<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

interface DayInterface
{
    /**
     * @param \DateTime $datetime
     *
     * @return bool
     */
    public function match(\DateTime $datetime): bool;
}
