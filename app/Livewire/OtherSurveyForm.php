<?php

declare(strict_types=1);

namespace App\Livewire;

final class OtherSurveyForm extends AbstractSurveyForm
{
    public function steps(): array
    {
        return $this->otherSteps();
    }
}
