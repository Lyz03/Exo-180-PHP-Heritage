<?php

class Apartment extends Dwelling
{

    private bool $garage;

    public function __construct($country, $city, $postalCode, $bedroom, $room, $garage)
    {
        parent::__construct($country, $city, $postalCode, $bedroom, $room);
        $this->garage = $garage;
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }
}