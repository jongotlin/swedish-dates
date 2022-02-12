<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class DaylightSavingTimeStop implements DayInterface, DayOccurOnceAYearInterface
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
        return 'Sommartid slutar';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        $checkDate = \DateTime::createFromFormat('Y-m-d H:i:s', sprintf('%s-11-01 00:00:00', (string) $year));

        foreach (range(1, 20) as $i) {
            $checkDate->modify('-1 day');
            if ((int) $checkDate->format('I') == 1) {
                return $checkDate;
            }
        }

        throw new \LogicException(
            sprintf('Timezone %s does not support daylight savings.', date_default_timezone_get())
        );
    }
}
