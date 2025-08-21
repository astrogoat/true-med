<?php

namespace Astrogoat\TrueMed\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class TrueMedSettings extends AppSettings
{
     public string $id;

    public function rules(): array
    {
        return [
            'id' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Allow the True Med widget to be displayed on the site.';
    }

    public static function group(): string
    {
        return 'true-med';
    }
}
