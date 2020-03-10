<?php


class country extends AbstractPlace
{
    private $Capital;

    public function getCapital()
    {
        return $this->Capital;
    }

    public function setCapital($Capital)
    {
        $this->Capital = $Capital;
    }
}