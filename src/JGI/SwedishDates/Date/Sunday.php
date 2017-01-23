<?php

declare (strict_types=1);

namespace JGI\SwedishDates\Date;

class Sunday implements DayInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime): bool
    {
        return '7' == $datetime->format('N');
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
        return null;
    }
}
