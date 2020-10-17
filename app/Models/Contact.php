<?php

declare(strict_types=1);

namespace App\Models;

class Contact
{
    public $name = '';

    public $email = '';

    /**
     * @param string $string
     *
     * @return Contact
     */
    final public function setName($string): Contact
    {
        $this->name = $string;
        return $this;
    }

    /**
     * @param string $string
     *
     * @return Contact
     */
    final public function setEmail($string): Contact
    {
        $this->email = $string;
        return $this;
    }
}
