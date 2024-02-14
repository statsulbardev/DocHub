<div>
    {{-- Label --}}
    <x-forms.attributes.label :label="$label ?? null" :labelinfo="$labelinfo ?? null" />

    {{-- Form --}}
    <input
        wire:model.{{ $method ?? null }}="{{ $model }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        type="{{ $type }}"
        @isset($disable) disabled @endisset
        @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
    />

    {{-- Error Notification --}}
    @include('components.forms.attributes.error', ['model' => $model])
</div>
