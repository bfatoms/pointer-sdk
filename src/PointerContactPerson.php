<?php

namespace BfAtoms\Pointer;

use BfAtoms\Pointer\PointerApi;

class PointerContactPerson extends PointerApi
{
    protected $route = '/api/v2/integration/contact-persons';

    public function __construct()
    {
        parent::__construct();
    }
}
