<?php

declare(strict_types=1);

namespace App\Livewire\Steps;

use App\Livewire\Steps\Contracts\FinalStep;
use Spatie\LivewireWizard\Components\StepComponent;

abstract class AbstractStep extends StepComponent
{
    public string $langKey;

    abstract function saveData();

    public function mount()
    {
        $sessionData = $this->getSessionData();

        // Restore session data if any
        foreach ($sessionData as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }

        // Store the name of this step as the last accessed step
        request()->session()->put('latest_step', $this->getName());
    }


    public function confirm()
    {
        // Implement in children classes that are at the end
    }

    public function submitPrevious()
    {
        $this->saveData();
        $this->previousStep();
    }

    public function submit()
    {
        $this->saveData();
        if ($this->hasNextStep()) {
            $this->nextStep();
        } else if (in_array(FinalStep::class, class_implements($this))) {
            $this->confirm();
        } else {
            throw new \Exception('No next step or final step');
        }
    }

    /**
     * Get the session data
     *
     * @return array
     */
    protected function getSessionData(): array
    {
        return request()->session()->get('wizard_data', []);
    }

    /**
     * Update the session data
     *
     * @param array $data
     */
    protected function updateSessionData(array $data): void
    {
        /** @var array $previousData */
        $previousData = $this->getSessionData();
        request()->session()->put('wizard_data', array_merge($previousData, $data));
    }
}
