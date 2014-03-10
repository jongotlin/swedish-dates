<?php

namespace JGI\SwedishDates\Model;

class Date
{
    /**
     * @var \DateTime
     */
    protected $dateTime;

    /**
     * @var bool
     */
    protected $redDay;

    /**
     * @param \DateTime $dateTime
     */
    public function __construct(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
        $this->redDay = false;
    }

    /**
     * @return bool
     */
    public function isRedDay()
    {
        return $this->redDay;
    }

    /**
     * @param bool redDay
     */
    public function setRedDay($redDay)
    {
        $this->redDay = $redDay;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
}
