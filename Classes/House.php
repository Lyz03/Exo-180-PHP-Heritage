<?php

class House extends Dwelling
{

    private bool $garden;
    private int $floor;
    private bool $garage;

    public function __construct($country, $city, $postalCode, $bedroom, $room, $garden, $floor, $garage)
    {
        parent::__construct($country, $city, $postalCode, $bedroom, $room);
        $this->garden = $garden;
        $this->floor = $floor;
        $this->garage = $garage;
    }

    /**
     * @return bool
     */
    public function isGarden(): bool
    {
        return $this->garden;
    }

    /**
     * @param bool $garden
     */
    public function setGarden(bool $garden): void
    {
        $this->garden = $garden;
    }

    /**
     * @return int
     */
    public function getFloor(): int
    {
        return $this->floor;
    }

    /**
     * @param int $floor
     */
    public function setFloor(int $floor): void
    {
        $this->floor = $floor;
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