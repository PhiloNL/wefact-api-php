<?php

namespace Dokter\WeFact\Resources;

use Dokter\WeFact\Resources\Actions\DownloadAction;

class PriceQuote extends Resource
{
    use DownloadAction;

    public const CONTROLLER_NAME = 'pricequote';

    /**
     * @return string
     */
    public function getResourceName(): string
    {
        return self::CONTROLLER_NAME;
    }
}
