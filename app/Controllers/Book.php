<?php

declare(strict_types=1);

namespace App\Controllers;

use Closure;

class Book
{
    public $records = [];

    /**
     * @param Closure $address
     *
     * @return Book
     */
    final public function createAddress(Closure $address): Book
    {
        $this->records[] = $address;
        return $this;
    }

    /**
     * @return array
     */
    final public function render(): array
    {
        $output = [];

        foreach ($this->records as $index => $record) {
            $increment = ++$index;
            $data = (array) $record();
            $output[] = 'Book record #' . ($increment);
            $output[] = 'Address: ' . $data['houseNumber'] . ' ' . $data['street'] . ', ' .
                $this->isNotNull($data['city']) .
                $this->isNotNull($data['county']) . $data['postcode'] . ', ' .
                $data['country'];

            foreach ($data['contacts'] as $indexContact => $contact) {
                $data = (array) $contact;
                $output[] = 'Contact #' . (++$indexContact) . ': <' . $data['email'] . '> ' . $data['name'];
            }
        }

        return $output;
    }

    private function isNotNull($field): ?string
    {
        return ! empty($field) ? $field . ', ' : null;
    }
}
