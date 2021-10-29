<?php

namespace Astrogoat\VerifyPass\Settings;

use Helix\Lego\Settings\AppSettings;

class VerifyPassSettings extends AppSettings
{
    public string $shopify_store_url;

    protected array $rules = [
        'shopify_store_url' => ['required', 'url'],
    ];

    public function description(): string
    {
        return 'Create offers for Military, Students, Teachers, Seniors & more.';
    }
}
