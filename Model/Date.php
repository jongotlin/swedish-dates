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
     * @var string[]
     */
    protected $names;

    /**
     * @param \DateTimeInterface $dateTime
     */
    public function __construct(\DateTimeInterface $dateTime)
    {
        $this->dateTime = $dateTime;
        $this->redDay = false;
        $this->names = [];
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
        if (count($this->names) == 0) {
            return null;
        }

        return implode(', ', $this->names);
    }

    /**
     * @param null|string $name
     */
    public function setName($name)
    {
        $this->names = [$name];
    }

    /**
     * @param null|string $name
     */
    public function addName($name)
    {
        $this->names[] = $name;
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
