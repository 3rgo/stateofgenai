<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Support\SurveyWizardState;
use Livewire\Attributes\On;
use Spatie\LivewireWizard\Components\WizardComponent;

abstract class AbstractSurveyForm extends WizardComponent
{
    public string $langKey;

    public function mount(string $langKey): void
    {
        $this->langKey = $langKey;
        $latestStep = request()->session()->get('latest_step', null);
        if ($latestStep) {
            $this->showStep($latestStep);
        }
    }

    public function initialState(): ?array
    {
        $langKeys = $this->stepNames()->mapWithKeys(function ($step) {
            return [$step => ['langKey' => $this->langKey]];
        })->toArray();

        return $langKeys;
    }

    public function stateClass(): string
    {
        return SurveyWizardState::class;
    }

    protected function studentSteps(): array
    {
        return [
            Steps\Email::class,
            Steps\StudentDetails::class,
            Steps\StudentAiUsage::class,
            Steps\StudentWorkMethods::class,
            Steps\StudentLearningImpact::class,
            Steps\StudentCareer::class,
            Steps\Consent::class,
        ];
    }

    protected function professionalSteps(): array
    {
        return [
            Steps\Email::class,
            Steps\ProDetails::class,
            // TODO : add other steps
            Steps\Consent::class,
        ];
    }

    protected function otherSteps(): array
    {
        return [
            Steps\Email::class,
            Steps\OtherDetails::class,
            // TODO : add other steps
            Steps\Consent::class,
        ];
    }
}
