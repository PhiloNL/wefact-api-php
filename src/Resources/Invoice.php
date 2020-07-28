<?php

namespace Dokter\WeFact\Resources;

use Dokter\WeFact\Exceptions\ApiException;
use Dokter\WeFact\Exceptions\MissingApiKeyException;
use Dokter\WeFact\Resources\Actions\DownloadAction;
use Dokter\WeFact\Resources\Actions\MarkAsPaidAction;
use Dokter\WeFact\Resources\Actions\PartPaymentAction;

class Invoice extends Resource
{
    use DownloadAction, MarkAsPaidAction, PartPaymentAction;

    public const CONTROLLER_NAME = 'invoice';

    /**
     * @return string
     */
    public function getResourceName(): string
    {
        return self::CONTROLLER_NAME;
    }
}
