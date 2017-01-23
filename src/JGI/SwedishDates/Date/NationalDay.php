<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class NationalDay implements DayInterface, DayOccurOnceAYearInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime): bool
    {
        if ($nationalDay = $this->getDateForYear((int) $datetime->format('Y'))) {
            return $nationalDay->format('Y-m-d') == $datetime->format('Y-m-d');
        }

        return false;
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
        return 'Nationaldagen';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        if ($year >= 2005) {
            return new \DateTime(sprintf('%s-06-06', $year));
        }

        return null;
    }
}
