@props(['key'])

@php
    [$wrapperClass, $cornerClass, $icon, $iconClass, $checkClass, $buttonClass] = match ($key) {
        'students' => [
            'hover:border-blue-300',
            'from-blue-50 to-indigo-100',
            '🎓',
            'bg-blue-100',
            'text-blue-500',
            'bg-blue-600 hover:bg-blue-700',
        ],
        'professionals' => [
            'hover:border-green-300',
            'from-green-50 to-emerald-100',
            '💻',
            'bg-green-100',
            'text-green-500',
            'bg-green-600 hover:bg-green-700',
        ],
        'others' => [
            'hover:border-purple-300',
            'from-purple-50 to-violet-100',
            '🚀',
            'bg-purple-100',
            'text-purple-500',
            'bg-purple-600 hover:bg-purple-700',
        ],
    };
@endphp

<div @class([
    'group bg-white rounded-2xl p-8 border border-gray-200 hover:shadow-xl transition-all duration-300 relative overflow-hidden',
    $wrapperClass,
])>
    <div @class([
        'absolute top-0 right-0 w-32 h-32 bg-gradient-to-br rounded-bl-full -translate-y-16 translate-x-16 group-hover:scale-110 transition-transform duration-500',
        $cornerClass,
    ])>
    </div>

    <div class="relative z-10 h-full flex flex-col justify-start items-stretch">
        <div @class([
            'w-14 h-14 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300',
            $iconClass,
        ])>
            <span class="text-3xl">{{ $icon }}</span>
        </div>

        <h3 class="font-heading text-2xl font-bold text-gray-900 mb-4">
            {{ __('landing.' . $key . '.title') }}
        </h3>


        <div class="flex-1 flex flex-col justify-start items-stretch">
            <p class="text-gray-600 mb-6 leading-relaxed">
                {{ __('landing.' . $key . '.description') }}
            </p>
        </div>

        <ul class="text-sm text-gray-500 space-y-2 mb-8">
            <li class="flex items-center gap-2">
                <x-lucide-check @class(['w-4 h-4', $checkClass]) />
                {{ __('landing.' . $key . '.point_1') }}
            </li>
            <li class="flex items-center gap-2">
                <x-lucide-check @class(['w-4 h-4', $checkClass]) />
                {{ __('landing.' . $key . '.point_2') }}
            </li>
            <li class="flex items-center gap-2">
                <x-lucide-check @class(['w-4 h-4', $checkClass]) />
                {{ __('landing.' . $key . '.point_3') }}
            </li>
        </ul>

        <a href="{{ route('survey', ['id' => $key . '-' . date('Y')]) }}" @class([
            'w-full text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 flex items-center justify-center gap-2 group/btn',
            $buttonClass,
        ])>
            {{ __('landing.start_survey') }}
            <x-lucide-chevron-right @class([
                'w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-200',
            ]) />
        </a>
    </div>
</div>
