<?php

namespace Astrogoat\TrueMed\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class TrueMedSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
//            'url' => Rule::requiredIf($this->enabled === true), // Example, modify to fit your need.
        ];
    }

    public function description(): string
    {
        return 'Interact with TrueMed.';
    }

    public static function group(): string
    {
        return 'true-med';
    }
}
