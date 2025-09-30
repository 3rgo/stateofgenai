<x-layout>
    <div class="text-center space-y-4">
        <div class="flex items-center justify-center">
            <img src="/logo.png" alt="State of Gen. AI" class="w-16 h-16" />
        </div>
        <h1 class="font-heading text-4xl md:text-6xl font-bold text-gray-900 leading-tight">
            {{ config('app.name') }}
        </h1>
    </div>
    <div class="flex-1 flex flex-col *:flex-1 *:flex *:flex-col">
        @switch($surveyType)
            @case(\App\Enums\SurveyType::STUDENT)
                <livewire:student-survey-form :langKey="$langKey" />
            @break

            @case(\App\Enums\SurveyType::PROFESSIONAL)
                <livewire:professional-survey-form :langKey="$langKey" />
            @break

            @case(\App\Enums\SurveyType::OTHER)
                <livewire:other-survey-form :langKey="$langKey" />
            @break
        @endswitch
    </div>
</x-layout>
