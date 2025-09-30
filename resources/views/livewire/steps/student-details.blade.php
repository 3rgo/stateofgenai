<x-wizard :steps="$steps" :title="__($this->state()->langKey() . '.student.steps.student_details')">
    <form class="bg-white shadow-xs outline outline-gray-900/5 sm:rounded-xl">
        <div class="px-4 py-4 sm:p-8">
            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-6 sm:gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-6">
                    <x-forms.select name="country"
                        label="{{ __($this->state()->langKey() . '.student.questions.country.label') }}"
                        placeholder="{{ __($this->state()->langKey() . '.student.questions.country.placeholder') }}"
                        :options="$countries" help="{{ __($this->state()->langKey() . '.student.questions.country.help') }}"
                        wire:model="country" />
                </div>

                <div class="sm:col-span-3">
                    <x-forms.textinput name="birth_year" type="number"
                        label="{{ __($this->state()->langKey() . '.student.questions.birth_year.label') }}"
                        placeholder="{{ __($this->state()->langKey() . '.student.questions.birth_year.placeholder') }}"
                        min="1900" max="{{ date('Y') - 10 }}" step="1" wire:model="birth_year" />
                </div>

                <div class="sm:col-span-3">
                    <x-forms.select name="gender"
                        label="{{ __($this->state()->langKey() . '.student.questions.gender.label') }}"
                        :options="$genders" wire:model="gender" />
                </div>

                <div class="sm:col-span-3">
                    <x-forms.select name="current_education_level"
                        label="{{ __($this->state()->langKey() . '.student.questions.current_education_level.label') }}"
                        help="{{ __($this->state()->langKey() . '.student.questions.current_education_level.help') }}"
                        :options="$education_levels" wire:model="current_education_level" />
                </div>

                <div class="sm:col-span-3">
                    <x-forms.select name="training_type"
                        label="{{ __($this->state()->langKey() . '.student.questions.training_type.label') }}"
                        :options="$training_types" wire:model="training_type" />
                </div>

                <div class="sm:col-span-3">
                    <x-forms.select name="specialization"
                        label="{{ __($this->state()->langKey() . '.student.questions.specialization.label') }}"
                        help="{{ __($this->state()->langKey() . '.student.questions.specialization.help') }}"
                        :options="$specializations" wire:model="specialization" />
                </div>

                <div class="sm:col-span-3">
                    <x-forms.select name="work_experience"
                        label="{{ __($this->state()->langKey() . '.student.questions.work_experience.label') }}"
                        help="{{ __($this->state()->langKey() . '.student.questions.work_experience.help') }}"
                        :options="$work_experiences" wire:model="work_experience" />
                </div>
            </div>
        </div>
    </form>
</x-wizard>
