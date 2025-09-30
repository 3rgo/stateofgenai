<?php

declare(strict_types=1);

namespace App\Livewire\Steps;

use App\Livewire\Steps\Contracts\FinalStep;

final class Consent extends AbstractStep implements FinalStep
{
    public function saveData()
    {
        // TODO: Implement saveData() method.
    }

    public function confirm(): void
    {
        // TODO: Implement confirm() method.
    }

    public function render()
    {
        return view('livewire.steps.consent');
    }
}
