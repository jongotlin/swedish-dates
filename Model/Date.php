<?php

namespace JGI\SwedishDates\Model;

class Date
{
    /**
     * @var \DateTimeInterface
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
     * @param \DateTimeInterface $dateTime
     */
    public function __construct(\DateTimeInterface $dateTime)
    {
        $this->dateTime = $dateTime;
        $this->redDay = false;
        $this->name = null;
        $this->holiday = false;
    }

    /**
     * @return bool
     */
    public function isRedDay()
    {
        return $this->redDay;
    }

    /**
     * @param bool $redDay
     */
    public function setRedDay($redDay)
    {
        $this->redDay = $redDay;
    }

    /**
     * @return \DateTimeInterface
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

    /**
     * @return bool
     */
    public function isHoliday()
    {
        return $this->holiday;
    }

    /**
     * @param bool $holiday
     */
    public function setHoliday($holiday)
    {
        $this->holiday = $holiday;
    }
}
