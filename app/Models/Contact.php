<?php

/**
 * Class Contact
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
 * Class Contact
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
class Contact
{
    /**
     * Contact Name
     *
     * @var string
     */
    public $name = '';

    /**
     * Contact Email
     *
     * @var string
     */
    public $email = '';

    /**
     * Set Name
     *
     * @param string $string value
     *
     * @return Contact
     */
    final public function setName($string)
    {
        $this->name = $string;
        return $this;
    }

    /**
     * Set Email
     *
     * @param string $string value
     *
     * @return Contact
     */
    final public function setEmail($string)
    {
        $this->email = $string;
        return $this;
    }
}
