{{-- resources/views/welcome.blade.php --}}
<x-layout>
    <!-- Language Selector -->
    <div class="fixed top-6 right-6 z-50">
        <div class="flex gap-2">
            <a href="{{ route('landing', ['locale' => 'en']) }}"
                class="px-3 py-1 text-sm rounded-lg transition-colors {{ app()->getLocale() === 'en' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                🇺🇸 EN
            </a>
            <a href="{{ route('landing', ['locale' => 'fr']) }}"
                class="px-3 py-1 text-sm rounded-lg transition-colors {{ app()->getLocale() === 'fr' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                🇫🇷 FR
            </a>
            <a href="{{ route('landing', ['locale' => 'es']) }}"
                class="px-3 py-1 text-sm rounded-lg transition-colors {{ app()->getLocale() === 'es' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                🇪🇸 ES
            </a>
            <a href="{{ route('landing', ['locale' => 'de']) }}"
                class="px-3 py-1 text-sm rounded-lg transition-colors {{ app()->getLocale() === 'de' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                🇩🇪 DE
            </a>
        </div>
    </div>

    <div class="w-full max-w-6xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="mb-8">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-medium mb-6">
                    🤖 {{ __('landing.year_badge', ['year' => date('Y')]) }}
                </div>
                <h1 class="font-heading text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ __('landing.title') }}
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ __('landing.subtitle') }}
                </p>
            </div>

            <!-- Stats Preview -->
            <div class="flex justify-center items-center gap-8 text-sm text-gray-500 mb-8">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                    {{ __('landing.anonymous') }}
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                    {{ __('landing.duration') }}
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                    {{ __('landing.international') }}
                </div>
            </div>
        </div>

        <!-- Survey Types Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Students Card -->
            <div
                class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-blue-300 hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-bl-full -translate-y-16 translate-x-16 group-hover:scale-110 transition-transform duration-500">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl">🎓</span>
                    </div>

                    <h3 class="font-heading text-2xl font-bold text-gray-900 mb-4">
                        {{ __('landing.students.title') }}
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('landing.students.description') }}
                    </p>

                    <ul class="text-sm text-gray-500 space-y-2 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.students.point_1') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.students.point_2') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.students.point_3') }}
                        </li>
                    </ul>

                    <a href="{{ route('survey', ['id' => 'students-' . date('Y')]) }}"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 flex items-center justify-center gap-2 group/btn">
                        {{ __('landing.start_survey') }}
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- IT Professionals Card -->
            <div
                class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-green-300 hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-50 to-emerald-100 rounded-bl-full -translate-y-16 translate-x-16 group-hover:scale-110 transition-transform duration-500">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl">💻</span>
                    </div>

                    <h3 class="font-heading text-2xl font-bold text-gray-900 mb-4">
                        {{ __('landing.professionals.title') }}
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('landing.professionals.description') }}
                    </p>

                    <ul class="text-sm text-gray-500 space-y-2 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.professionals.point_1') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.professionals.point_2') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.professionals.point_3') }}
                        </li>
                    </ul>

                    <a href="{{ route('survey', ['id' => 'professionals-' . date('Y')]) }}"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 flex items-center justify-center gap-2 group/btn">
                        {{ __('landing.start_survey') }}
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Other Professionals Card -->
            <div
                class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-purple-300 hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-50 to-violet-100 rounded-bl-full -translate-y-16 translate-x-16 group-hover:scale-110 transition-transform duration-500">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl">🚀</span>
                    </div>

                    <h3 class="font-heading text-2xl font-bold text-gray-900 mb-4">
                        {{ __('landing.others.title') }}
                    </h3>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ __('landing.others.description') }}
                    </p>

                    <ul class="text-sm text-gray-500 space-y-2 mb-8">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.others.point_1') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.others.point_2') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ __('landing.others.point_3') }}
                        </li>
                    </ul>

                    <a href="{{ route('survey', ['id' => 'others-' . date('Y')]) }}"
                        class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-xl transition-colors duration-200 flex items-center justify-center gap-2 group/btn">
                        {{ __('landing.start_survey') }}
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Why Participate Section -->
        <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 mb-16">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    {{ __('landing.why_participate.title') }}
                </h2>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    {{ __('landing.why_participate.subtitle') }}
                </p>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-3xl">📊</span>
                        </div>
                        <h3 class="font-heading text-lg font-semibold text-gray-900 mb-3">
                            {{ __('landing.why_participate.insight_title') }}
                        </h3>
                        <p class="text-gray-600">
                            {{ __('landing.why_participate.insight_desc') }}
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-3xl">🔒</span>
                        </div>
                        <h3 class="font-heading text-lg font-semibold text-gray-900 mb-3">
                            {{ __('landing.why_participate.privacy_title') }}
                        </h3>
                        <p class="text-gray-600">
                            {{ __('landing.why_participate.privacy_desc') }}
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-3xl">🌍</span>
                        </div>
                        <h3 class="font-heading text-lg font-semibold text-gray-900 mb-3">
                            {{ __('landing.why_participate.community_title') }}
                        </h3>
                        <p class="text-gray-600">
                            {{ __('landing.why_participate.community_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Previous Results (if available) -->
        @if ($previousResults ?? false)
            <div class="text-center mb-16">
                <h2 class="font-heading text-3xl font-bold text-gray-900 mb-6">
                    {{ __('landing.previous_results.title') }}
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    {{ __('landing.previous_results.subtitle') }}
                </p>
                <a href="{{ route('survey.results') }}"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gray-900 text-white font-semibold rounded-xl hover:bg-gray-800 transition-colors duration-200">
                    {{ __('landing.view_results') }}
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        @endif

        <!-- Footer -->
        <footer class="border-t border-gray-200 pt-8 mt-16 text-center text-sm text-gray-500">
            <div class="flex flex-wrap justify-center items-center gap-6 mb-4">
                <a href="{{ route('privacy') }}" class="hover:text-gray-700 transition-colors">
                    {{ __('landing.footer.privacy') }}
                </a>
                <a href="{{ route('terms') }}" class="hover:text-gray-700 transition-colors">
                    {{ __('landing.footer.terms') }}
                </a>
                <a href="{{ route('contact') }}" class="hover:text-gray-700 transition-colors">
                    {{ __('landing.footer.contact') }}
                </a>
                <a href="https://github.com/3rgo/stateofgenai" target="_blank"
                    class="hover:text-gray-700 transition-colors flex items-center gap-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg>
                    {{ __('landing.footer.github') }}
                </a>
            </div>
            <p>© {{ date('Y') }} {{ __('landing.footer.copyright') }}</p>
        </footer>
    </div>
</x-layout>
