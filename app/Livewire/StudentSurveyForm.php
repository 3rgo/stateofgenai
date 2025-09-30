<?php

declare(strict_types=1);

namespace App\Livewire;

final class StudentSurveyForm extends AbstractSurveyForm
{
    public function steps(): array
    {
        return $this->studentSteps();
    }
}
