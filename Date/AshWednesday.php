<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class AshWednesday implements DayInterface, DayOccurOnceAYearInterface
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
        return 'Askonsdag';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        $datetime = new \DateTime();
        $datetime->setTimestamp(easter_date($year));
        $datetime->modify('-46 day');

        return $datetime;
    }
}
