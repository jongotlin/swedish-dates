<?php

namespace JGI\SwedishDates\Date\Name;

interface NameInterface
{
    /**
     * @param \DateTime $datetime
     *
     * @return string|null
     */
    public function getName(\DateTime $datetime);
}
