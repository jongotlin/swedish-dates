<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class FathersDay implements DayInterface, DayOccurOnceAYearInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime): bool
    {
        return $this->getDateForYear((int) $datetime->format('Y'))->format('Y-m-d') == $datetime->format('Y-m-d');
    }

    /**
     * {@inheritdoc}
     */
    public function isRed(): bool
    {
        return false;
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
        return 'Fars dag';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        $checkDate = \DateTime::createFromFormat('Y-m-d H:i:s', sprintf('%s-11-01 00:00:00', (string) $year));

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
