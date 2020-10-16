<?php

require_once dirname(__FILE__).'/book.php';
require_once dirname(__FILE__).'/address.php';
require_once dirname(__FILE__).'/contact.php';

# Create first contact
$contact = new Contact;
$contact->setName('Mr John Doe');
$contact->setEmail('john@doe.com');

# Add first contact to list of contacts
$contacts[] = $contact;

# Create second contact
$contact = new Contact;
$contact->setName('Ms Anna Baker')->setEmail('anna@baker.com');

# Add second contact to list of contacts
$contacts[] = $contact;

# Open new book
$book = new Book;

# Add first address with both contacts
$book->createAddress(function(Address $address) use ($contacts){
	$address->setHouseNumber('33');
	$address->setStreet('Market street')->setCity('London');
	$address->setPostCode('EC4 MB5');
	$address->setCounty('Greater London');
	$address->setCountry('GB');

	foreach($contacts as $contact){
		$address->addContact($contact);
	}
});

# Reset contact list
$contacts = [];

# Create first contact
$contact = new Contact;
$contact->setName('Ms Dane Rovens');
$contact->setEmail('dane@rovens.com');

# Add first contact to list of contacts
$contacts[] = $contact;

# Add second address with one contact
$book->createAddress(function(Address $address) use ($contacts) {
	$address->setHouseNumber('22');
	$address->setStreet('Tower street');
	$address->setPostCode('SK4 1HV');
	$address->setCountry('GB');

	foreach($contacts as $contact){
		$address->addContact($contact);
	}
})

# Output all of the known information
->render();
# preview of expected output below
/**

Book record: #1
Address: 33 Market street, London, Greater London, EC4 MB5, GB
Contact #1: <john@doe.com> John Doe 
Contact #2: <anna@baker.com> Anna Baker
Book record: #2
Address: 22 Tower Street, SK4 1HV, GB
Contact #1: <dane@rovens.com> Ms Dane Rovens

**/