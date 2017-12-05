<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class MidsummerDay implements DayInterface, DayOccurOnceAYearInterface
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
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Midsommardagen';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        foreach (range(0, 6) as $i) {
            $datetime = new \DateTime(sprintf('%s-06-19', $year));
            $datetime->modify(sprintf('+%d day', $i));
            if ('6' == $datetime->format('N')) {
                return $datetime;
            }
        }
    }
}
