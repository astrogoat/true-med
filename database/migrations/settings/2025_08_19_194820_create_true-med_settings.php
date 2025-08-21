<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('true-med.enabled', false);
        $this->migrator->add('true-med.id', '');
    }

    public function down()
    {
        $this->migrator->delete('true-med.enabled');
        $this->migrator->delete('true-med.id');
    }
};
