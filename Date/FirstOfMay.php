<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class FirstOfMay implements DayInterface, DayOccurOnceAYearInterface
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
        return true;
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
        return 'Första maj';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        return new \DateTime(sprintf('%s-05-01', $year));
    }
}
