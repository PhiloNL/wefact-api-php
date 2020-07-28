<?php

namespace Dokter\WeFact\Resources;

use Dokter\WeFact\Resources\Actions\MarkAsPaidAction;
use Dokter\WeFact\Resources\Actions\PartPaymentAction;

class CreditInvoice extends Resource
{
    use MarkAsPaidAction, PartPaymentAction;

    public const CONTROLLER_NAME = 'creditinvoice';

    public function getResourceName(): string
    {
        return self::CONTROLLER_NAME;
    }
}
