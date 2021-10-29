<?php

namespace Astrogoat\VerifyPass\Settings;

use Helix\Lego\Settings\AppSettings;
use Astrogoat\VerifyPass\Actions\VerifyPassAction;
use Illuminate\Support\Str;

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
