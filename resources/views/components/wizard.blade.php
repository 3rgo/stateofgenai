<div class="flex-1 flex flex-col items-stretch space-y-4 py-8">
    <nav aria-label="Progress" class="self-center">
        <ol role="list" class="flex items-center">
            @foreach ($steps as $step)
                @if ($step->isPrevious())
                    <li class="relative pr-8 sm:pr-20">
                        <!-- Completed Step -->
                        <div aria-hidden="true" class="absolute inset-0 flex items-center">
                            <div class="h-0.5 w-full bg-indigo-600"></div>
                        </div>
                        <a href="#" wire:click="{{ $step->show() }}"
                            class="relative flex size-8 items-center justify-center rounded-full bg-indigo-600 hover:bg-indigo-900">
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                class="size-5 text-white">
                                <path
                                    d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                    clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                            <span class="sr-only">{{ __('form.step_number', ['number' => 1]) }}</span>
                        </a>
                    </li>
                @elseif ($step->isCurrent())
                    <li class="relative pr-8 sm:pr-20">
                        <!-- Current Step -->
                        <div aria-hidden="true" class="absolute inset-0 flex items-center">
                            <div class="h-0.5 w-full bg-gray-200"></div>
                        </div>
                        <a href="#" aria-current="step"
                            class="relative flex size-8 items-center justify-center rounded-full border-2 border-indigo-600 bg-white">
                            <span aria-hidden="true" class="size-2.5 rounded-full bg-indigo-600"></span>
                            <span class="sr-only">{{ __('form.step_number', ['number' => 3]) }}</span>
                        </a>
                    </li>
                @else
                    <li @class(['relative' => true, 'pr-8 sm:pr-20' => !$loop->last])>
                        <!-- Upcoming Step -->
                        @unless ($loop->last)
                            <div aria-hidden="true" class="absolute inset-0 flex items-center">
                                <div class="h-0.5 w-full bg-gray-200"></div>
                            </div>
                        @endunless
                        <a href="#" wire:click="{{ $step->show() }}"
                            class="group relative flex size-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white hover:border-gray-400">
                            <span aria-hidden="true"
                                class="size-2.5 rounded-full bg-transparent group-hover:bg-gray-300"></span>
                            <span class="sr-only">{{ __('form.step_number', ['number' => 4]) }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>

    <div class="flex-1 flex flex-col items-stretch justify-center space-y-8 px-4">
        <div class="flex justify-center">
            <h1 class="text-2xl font-bold">{{ $title }}</h1>
        </div>
        {{ $slot }}
    </div>
    <div class="flex items-stretch justify-between px-8">
        @if ($this->hasPreviousStep())
            <button type="button" class="text-sm/6 font-semibold text-gray-900" wire:click="submitPrevious">
                {{ __('form.previous') }}
            </button>
        @else
            <div class="w-10"></div>
        @endif
        @if ($this->hasNextStep())
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="submit">
                {{ __('form.next') }}
            </button>
        @endif
    </div>
</div>
