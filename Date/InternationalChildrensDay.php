<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class InternationalChildrensDay implements DayInterface, DayOccurOnceAYearInterface
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
        return 'Internationella barndagen';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        $date = new \DateTime(sprintf('%s-09-30', $year));
        $date->modify('next monday');

        return $date;
    }
}
