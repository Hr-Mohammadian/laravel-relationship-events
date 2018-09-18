<?php

namespace Chelout\RelationshipEvents\Tests\Stubs\Events\MorphOne;

class MorphOneUpdating
{
    public $user;
    public $address;

    public function __construct($user, $params)
    {
        $this->user = $user;
        $this->address = $params[0];
    }
}
