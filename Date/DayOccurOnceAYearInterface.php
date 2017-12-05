<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

interface DayOccurOnceAYearInterface
{
    /**
     * @param int $year
     *
     * @return \DateTime|null $datetime
     */
    public function getDateForYear(int $year);
}
