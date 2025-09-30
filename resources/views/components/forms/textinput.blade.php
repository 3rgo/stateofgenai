@props(['label', 'name', 'placeholder', 'help' => null, 'type' => 'text', 'wrapperClass' => 'sm:col-span-4'])

@php($error = false)
@error($name)
    @php($error = true)
@enderror

<div class="{{ $wrapperClass }}">
    <label for="{{ $name }}" class="block text-sm/6 font-medium text-gray-900">{{ $label }}</label>
    <div class="relative mt-2">
        <input
            {{ $attributes->class([
                    'block w-full rounded-md bg-white px-3 py-1.5 text-base sm:text-sm/6',
                    $error
                        ? 'text-red-900 outline-1 -outline-offset-1 outline-red-300 placeholder:text-red-300 focus:outline-2 focus:-outline-offset-2 focus:outline-red-600'
                        : 'text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600',
                ])->merge(['placeholder' => $placeholder, 'name' => $name, 'autocomplete' => $name, 'type' => $type, 'id' => $name]) }}
            @error($name) aria-invalid="true" aria-describedby="{{ $name }}-error" @enderror />
        @error($name)
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <x-lucide-circle-x class="h-5 w-5 text-red-500" />
            </div>
        @enderror
    </div>
    @if ($help)
        <p class="mt-2 text-sm text-gray-500">{{ $help }}</p>
    @endif
    @error($name)
        <p class="mt-2 text-sm text-red-500" id="{{ $name }}-error">{{ $message }}</p>
    @enderror
</div>
