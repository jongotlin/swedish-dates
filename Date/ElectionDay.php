<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class ElectionDay implements DayInterface, DayOccurOnceAYearInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime): bool
    {
        $electionDayDate = $this->getDateForYear((int) $datetime->format('Y'));
        if (!$electionDayDate) {
            return false;
        }

        return $electionDayDate->format('Y-m-d') == $datetime->format('Y-m-d');
    }

    /**
     * {@inheritdoc}
     */
    public function isRed(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHoliday(): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Val till riksdagen';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        $checkDate = \DateTime::createFromFormat('Y-m-d H:i:s', sprintf('%s-09-01 00:00:00', (string) $year));

        $leapYearDate = clone $checkDate;
        $leapYearDate->modify('+2 year');
        if ((int) $leapYearDate->format('L') != 1) {
            return null;
        }

        $sundayCount = 0;
        while (true) {
            if ((int) $checkDate->format('N') == 7) {
                $sundayCount++;
                if ($sundayCount == 2) {
                    return $checkDate;
                }
            }
            $checkDate->modify('+1 day');
        }
    }
}
