<?php

declare(strict_types=1);

namespace App\Models;

class Address
{
    public $houseNumber = '';

    public $street = '';

    public $city = '';

    public $county = '';

    public $postcode = '';

    public $country = '';

    public $contacts = [];

    final public function setHouseNumber(string $string): Address
    {
        $this->houseNumber = $string;
        return $this;
    }

    /**
     * @param string $string
     *
     * @return $this
     */
    final public function setStreet(string $string): Address
    {
        $this->street = $string;
        return $this;
    }

    /**
     * @param string $string
     *
     * @return $this
     */
    final public function setCity(string $string): Address
    {
        $this->city = $string;
        return $this;
    }

    /**
     * @param string $string
     *
     * @return $this
     */
    final public function setCounty(string $string): Address
    {
        $this->county = $string;
        return $this;
    }

    /**
     * @param string $string
     *
     * @return $this
     */
    final public function setCountry(string $string): Address
    {
        $this->country = $string;
        return $this;
    }

    /**
     * @param string $string
     *
     * @return $this
     */
    final public function setPostCode(string $string): Address
    {
        $this->postcode = $string;
        return $this;
    }

    /**
     * @param $contact
     *
     */
    final public function addContact($contact): void
    {
        $this->contacts[] = $contact;
    }
}