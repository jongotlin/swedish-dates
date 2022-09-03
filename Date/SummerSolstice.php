<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class SummerSolstice implements DayInterface, DayOccurOnceAYearInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime): bool
    {
        $date = $this->getDateForYear((int) $datetime->format('Y'));
        if (!$date) {
            return false;
        }

        return $date->format('Y-m-d') == $datetime->format('Y-m-d');
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
        return 'Sommarsolstånd';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        if (in_array($year, [2022, 2023, 2025, 2026, 2027])) {
            return new \DateTime(sprintf('%s-06-21', $year));
        } elseif (in_array($year, [2024])) {
            return new \DateTime(sprintf('%s-06-20', $year));
        }

        return null;
    }
}
