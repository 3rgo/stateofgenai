<?php

declare(strict_types=1);

namespace App\Livewire\Steps;

use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use PeterColes\Countries\CountriesFacade;

final class StudentDetails extends AbstractStep
{

    public string $country;
    public int $birth_year;
    public string $gender;
    public string $current_education_level;
    public string $training_type;
    public string $specialization;
    public string $work_experience;

    protected function rules()
    {
        return [
            'country'                 => ['required', 'string', 'max:2', Rule::in($this->getCountries()->keys())],
            'birth_year'              => ['required', 'integer', 'min:1900', 'max:' . (date('Y') - 10)],
            'gender'                  => ['required', 'string', Rule::in(array_keys($this->getGenders()))],
            'current_education_level' => ['required', 'string', Rule::in(array_keys($this->getEducationLevels()))],
            'training_type'           => ['required', 'string', Rule::in(array_keys($this->getTrainingTypes()))],
            'specialization'          => ['required', 'string', Rule::in(array_keys($this->getSpecializations()))],
            'work_experience'         => ['required', 'string', Rule::in(array_keys($this->getWorkExperiences()))],
        ];
    }

    public function saveData()
    {
        $this->validate();
        $this->updateSessionData([
            'country'                 => $this->country,
            'birth_year'              => $this->birth_year,
            'gender'                  => $this->gender,
            'current_education_level' => $this->current_education_level,
            'training_type'           => $this->training_type,
            'specialization'          => $this->specialization,
            'work_experience'         => $this->work_experience,
        ]);
    }

    public function render()
    {
        return view('livewire.steps.student-details', [
            'countries' => $this->getCountries(),
            'genders' => $this->getGenders(),
            'education_levels' => $this->getEducationLevels(),
            'training_types' => $this->getTrainingTypes(),
            'specializations' => $this->getSpecializations(),
            'work_experiences' => $this->getWorkExperiences(),
        ]);
    }

    protected function getCountries(): Collection
    {
        return once(fn(): Collection => CountriesFacade::lookup());
    }

    protected function getGenders(): array
    {
        return once(fn(): array => __($this->state()->langKey() . '.student.questions.gender.options'));
    }

    protected function getEducationLevels(): array
    {
        return once(fn(): array => __($this->state()->langKey() . '.student.questions.current_education_level.options'));
    }

    protected function getTrainingTypes(): array
    {
        return once(fn(): array => __($this->state()->langKey() . '.student.questions.training_type.options'));
    }

    protected function getSpecializations(): array
    {
        return once(fn(): array => __($this->state()->langKey() . '.student.questions.specialization.options'));
    }

    protected function getWorkExperiences(): array
    {
        return once(fn(): array => __($this->state()->langKey() . '.student.questions.work_experience.options'));
    }
}
