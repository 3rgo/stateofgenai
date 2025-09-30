<x-wizard :steps="$steps" :title="__($this->state()->langKey() . '.common.steps.email')">
    <form class="bg-white shadow-xs outline outline-gray-900/5 sm:rounded-xl">
        <div class="px-4 py-6 sm:p-8">
            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-forms.textinput name="email"
                    label="{{ __($this->state()->langKey() . '.common.questions.email.label') }}"
                    placeholder="{{ __($this->state()->langKey() . '.common.questions.email.placeholder') }}"
                    help="{{ __($this->state()->langKey() . '.common.questions.email.help') }}"
                    wrapperClass="sm:col-span-6" wire:model="email" />
            </div>
        </div>
    </form>
</x-wizard>
