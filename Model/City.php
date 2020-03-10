<?php
class City extends AbstractPlace
{
    private $Country;

    public function getCountry()
    {
        return $this->Country;
    }

    public function setCountry($Country)
    {
        $this->Country = $Country;
    }



}