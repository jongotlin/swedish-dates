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
     * @var string|null
     */
    protected $name;

    /**
     * @param \DateTime $dateTime
     */
    public function __construct(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
        $this->redDay = false;
        $this->name = null;
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

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
