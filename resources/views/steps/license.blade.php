@extends('installer::install')

@section('step')
    <p class="pb-3 text-gray-800">lorem ipsum</p>
    <form method="post" action="{{ route('install.license') }}">
        @csrf
        {{-- <div class="mb-3">
            <x-installer::label for="domain" :required="true">Domain</x-installer::label>
            <x-installer::input
                id="domain"
                name="domain"
                type="url"
                :required="true"
            />
        </div> --}}
        <div class="mb-3">
            <x-installer::label for="licensekey" :required="true">Serial Number</x-installer::label>
            <x-installer::input
                id="licensekey"
                name="licensekey"
                type="text"
                :required="true"
            />
        </div>
        <div class="flex justify-end">
            <x-installer::button >
                Check
                <svg class="fill-current w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </x-installer::link>
            @if($status == 'true')
            <x-installer::link :href="route('install.database')">
                Next step
                <svg class="fill-current w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </x-installer::link>
            @elseif($status == 'false')
            <x-installer::link :href="route('install.license')" color="red">
                Try Again
                <svg class="fill-current w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                        clip-rule="evenodd"
                    />
                </svg>
            </x-installer::link>
            @endif
        </div>
    </form>

<script>
    document.getElementById('checkButton').addEventListener('click', function() {
        fetch('{{ route('install.license') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                licensekey: document.getElementById('licensekey').value
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'true') {
                document.getElementById('checkButton').classList.add('hidden');
                document.getElementById('nextButton').classList.remove('hidden');
            } else {
                document.getElementById('checkButton').classList.add('hidden');
                document.getElementById('tryAgainButton').classList.remove('hidden');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>
@endsection
