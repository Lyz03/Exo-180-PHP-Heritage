<?php

class Dwelling
{

    private string $country;
    private string $city;
    private int $postalCode;
    private int $bedroom;
    private int $room;

    public function __construct($country, $city, $postalCode, $bedroom, $room) {
        $this->country = $country;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->bedroom = $bedroom;
        $this->room = $room;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getPostalCode(): int
    {
        return $this->postalCode;
    }

    /**
     * @param int $PostalCode
     */
    public function setPostalCode(int $PostalCode): void
    {
        $this->postalCode = $PostalCode;
    }

    /**
     * @return int
     */
    public function getBedroom(): int
    {
        return $this->bedroom;
    }

    /**
     * @param int $bedroom
     */
    public function setBedroom(int $bedroom): void
    {
        $this->bedroom = $bedroom;
    }

    /**
     * @return int
     */
    public function getRoom(): int
    {
        return $this->room;
    }

    /**
     * @param int $room
     */
    public function setRoom(int $room): void
    {
        $this->room = $room;
    }


}