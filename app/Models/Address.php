<?php

/**
 * Class Address
 *
 * Php version 7.1
 *
 * @file
 *
 * @category PHP
 * @package  App\Models
 * @author   Oskars Germovs <oskars_germovs@inbox.lv>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     https://flynowpaylater-trial.solum-designum.eu/
 * Date: 2020.10.16
 * Time: ??:??
 */

declare(strict_types=1);

namespace App\Models;

/**
 * Class Address
 * GitHub: https://github.com/Faks
 * Bitbucket: https://bitbucket.org/Faks
 * php version 7.1
 *
 * @category PHP
 * @package  App\Models
 * @author   Oskars Germovs <oskars_germovs@inbox.lv>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     https://flynowpaylater-trial.solum-designum.eu/
 * Date: 2020.10.16
 * Time: ??:??
 */
class Address
{
    /**
     * House Number
     *
     * @var string value
     */
    public $houseNumber = '';

    /**
     * Street
     *
     * @var string
     */
    public $street = '';

    /**
     * City
     *
     * @var string
     */
    public $city = '';

    /**
     * County
     *
     * @var string
     */
    public $county = '';

    /**
     * Post Code
     *
     * @var string
     */
    public $postcode = '';

    /**
     * Country
     *
     * @var string
     */
    public $country = '';

    /**
     * Contacts data array
     *
     * @var string
     */
    public $contacts = [];

    /**
     * Set House Number
     *
     * @param string $string value
     *
     * @return $this
     */
    final public function setHouseNumber(string $string): Address
    {
        $this->houseNumber = $string;
        return $this;
    }

    /**
     * Set Street
     *
     * @param string $string value
     *
     * @return $this
     */
    final public function setStreet(string $string): Address
    {
        $this->street = $string;
        return $this;
    }

    /**
     * Set City
     *
     * @param string $string value
     *
     * @return $this
     */
    final public function setCity(string $string): Address
    {
        $this->city = $string;
        return $this;
    }

    /**
     * Set County
     *
     * @param string $string value
     *
     * @return $this
     */
    final public function setCounty(string $string): Address
    {
        $this->county = $string;
        return $this;
    }

    /**
     * Set Country
     *
     * @param string $string value
     *
     * @return Address
     */
    final public function setCountry(string $string): Address
    {
        $this->country = $string;
        return $this;
    }

    /**
     * Set Post Code
     *
     * @param string $string value
     *
     * @return Address
     */
    final public function setPostCode(string $string): Address
    {
        $this->postcode = $string;
        return $this;
    }

    /**
     * Store Contact in array
     *
     * @param mixed $contact value
     *
     * @return void
     */
    final public function addContact($contact): void
    {
        $this->contacts[] = $contact;
    }
}
