<?php

declare(strict_types=1);

namespace App\Support;

use Spatie\LivewireWizard\Support\State;

final class SurveyWizardState extends State
{
    public function langKey(): ?string
    {
        foreach ($this->all() as $step => $state) {
            if ($state['langKey']) {
                return $state['langKey'];
            }
        }

        return null;
    }
}
