<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateVerifyPassSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('verifypass.enabled', false);
        $this->migrator->add('verifypass.shopify_store_url', '');
    }

    public function down()
    {
        $this->migrator->delete('verifypass.enabled');
        $this->migrator->delete('verifypass.shopify_store_url');
    }
}
