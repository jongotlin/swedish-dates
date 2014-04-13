<?php

namespace JGI\SwedishDates\Date\Name;

class NameChain
{
    /**
     * @var \JGI\SwedishDates\Date\Name\NameInterface[]
     */
    protected $names;

    public function __construct()
    {
        $this->names = array();
    }

    /**
     * @param \JGI\SwedishDates\Date\Name\NameInterface $name
     */
    public function addName($name)
    {
        $this->names[] = $name;
    }

    /**
     * @return \JGI\SwedishDates\Date\Name\NameInterface[]
     */
    public function getNames()
    {
        return $this->names;
    }
}
