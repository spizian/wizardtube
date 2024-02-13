<button
    type="{{ $attributes->get('type', 'submit') }}"
    id="{{ $attributes->get('id', 'checkButton') }}"
    class="bg-{{ $attributes->get('color', 'blue') }}-500 hover:bg-{{ $attributes->get('color', 'blue') }}-700 text-white font-bold py-2 px-4 rounded inline-flex items-center"
>
    {{ $slot }}
</button>
