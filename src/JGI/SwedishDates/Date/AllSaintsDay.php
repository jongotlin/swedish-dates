<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class AllSaintsDay implements DayInterface, DayOccurOnceAYearInterface
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
    public function getName(): string
    {
        return 'Alla helgons dag';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        foreach (range(0, 6) as $i) {
            $datetime = new \DateTime(sprintf('%s-10-31', $year));
            $datetime->modify(sprintf('+%d day', $i));
            if ('6' == $datetime->format('N')) {
                return $datetime;
            }
        }
    }
}
