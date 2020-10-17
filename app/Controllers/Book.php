<?php

/**
 *  Book Controller
 *
 * Php version 7.1
 *
 * @file
 *
 * @category PHP
 * @package  App\Controllers
 * @author   Oskars Germovs <oskars_germovs@inbox.lv>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     https://flynowpaylater-trial.solum-designum.eu/
 * Date: 2020.10.16
 * Time: ??:??
 */

declare(strict_types=1);

namespace App\Controllers;

use Closure;

use function html_entity_decode;
use function htmlentities;
use function implode;

/**
 * Class Book
 * GitHub: https://github.com/Faks
 * Bitbucket: https://bitbucket.org/Faks
 * php version 7.1
 *
 * @category PHP
 * @package  App\Controllers
 * @author   Oskars Germovs <oskars_germovs@inbox.lv>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     https://flynowpaylater-trial.solum-designum.eu/
 * Date: 2020.10.16
 * Time: ??:??
 */
class Book
{
    /**
     * Data Array
     *
     * @var array
     */
    public $records = [];

    /**
     * Building data array
     *
     * @param Closure $address Closure Callback
     *
     * @return Book
     */
    final public function createAddress(Closure $address): Book
    {
        $this->records[] = $address;
        return $this;
    }

    /**
     * Returns data array
     *
     * @return string
     */
    final public function render(): string
    {
        $output = [];

        foreach ($this->records as $index => $record) {
            $increment = ++$index;
            $data = (array) $record();
            $output[] = 'Book record: #' . $increment;
            $address = '';
            $address .= "Address: {$data['houseNumber']} {$data['street']}, ";
            $address .= $this->isNotNull($data['city']);
            $address .= $this->isNotNull($data['county']);
            $address .= $data['postcode'] . ', ' . $data['country'];
            $output[] = $address;

            foreach ($data['contacts'] as $indexContact => $contact) {
                $data = (array) $contact;
                $output[] = $this->contact(++$indexContact, $data);
            }
        }

        $outputStringRaw = implode('<br>', $output);
        $outputStringEntities = htmlentities($outputStringRaw);
        return html_entity_decode($outputStringEntities);
    }

    /**
     * Filter out empty field
     *
     * @param string|null $field field value
     *
     * @return string|null
     */
    protected function isNotNull($field): ?string
    {
        return ! empty($field) ? ($field . ', ') : null;
    }

    /**
     * Return formatted contact address
     *
     * @param int   $increment Increment value
     * @param array $data      array
     *
     * @return string
     */
    protected function contact(
        int $increment,
        array $data
    ): string {
        $string = "Contact #{$increment }:";
        return $string . " &#x3C;{$data['email']}&#x3E; {$data['name']}";
    }
}
