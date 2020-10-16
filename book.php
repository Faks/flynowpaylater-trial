<?php

class Book {

	private $records = [];

	public function createAddress(Address $address) {
	    $this->records[] = $address;
    }

	public function render(){

		$output = [];

		foreach($this->records as $index => $record){

			$output[] = 'Book record #'.($index+1);

			$output[] = $record['address']->getHouseNumber();

			foreach($record['contacts'] as $index => $contact){
				$output[] = 'Contact #'.($index+1).': <'.$contact->getEmail().'>';
			}

		}

	}

}