<?php

namespace BfAtoms\Pointer;

use BfAtoms\Pointer\PointerApi;

class PointerPaymentTerm extends PointerApi
{
    protected $route = '/api/v2/integration/orders/payment-terms';

    public function __construct()
    {
        parent::__construct();
    }
}
