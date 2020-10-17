<?php

/**
 * Index Entry
 *
 * Php version 7.1
 *
 * @file
 *
 * @category PHP
 * @package  App
 * @author   Oskars Germovs <oskars_germovs@inbox.lv>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     https://flynowpaylater-trial.solum-designum.eu/
 * Date: 2020.10.16
 * Time: ??:??
 */

declare(strict_types=1);

use App\Controllers\Book;
use App\Models\Address;
use App\Models\Contact;

require __DIR__ . '/vendor/autoload.php';

// Create first contact
$contact = new Contact();
$contact->setName('John Doe');
$contact->setEmail('john@doe.com');

// Add first contact to list of contacts
$contacts[] = $contact;

// Create second contact
$contact = new Contact;
$contact->setName('Anna Baker')->setEmail('anna@baker.com');

// Add second contact to list of contacts
$contacts[] = $contact;

// Open new book
$book = new Book();

// Add first address with both contacts
$book->createAddress(
    function () use ($contacts) {
        $address = new Address();
        $address->setHouseNumber('33');
        $address->setStreet('Market street')->setCity('London');
        $address->setPostCode('EC4 MB5');
        $address->setCounty('Greater London');
        $address->setCountry('GB');

        foreach ($contacts as $contact) {
            $address->addContact($contact);
        }
        return $address;
    }
);

//  Reset contact list
$contacts = [];

// Create first contact
$contact = new Contact();
$contact->setName('Ms Dane Rovens');
$contact->setEmail('dane@rovens.com');

//  Add first contact to list of contacts
$contacts[] = $contact;

// Add second address with one contact
$book->createAddress(
    function () use ($contacts) {
        $address = new Address();
        $address->setHouseNumber('22');
        $address->setStreet('Tower Street');
        $address->setPostCode('SK4 1HV');
        $address->setCountry('GB');

        foreach ($contacts as $contact) {
            $address->addContact($contact);
        }
        return $address;
    }
);

// Output all of the known information
echo $book->render();
// preview of expected output below
/**
Book record: #1
Address: 33 Market street, London, Greater London, EC4 MB5, GB
Contact #1: <john@doe.com> John Doe
Contact #2: <anna@baker.com> Anna Baker
Book record: #2
Address: 22 Tower Street, SK4 1HV, GB
Contact #1: <dane@rovens.com> Ms Dane Rovens
**/