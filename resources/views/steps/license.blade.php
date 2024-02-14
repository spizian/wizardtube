@extends('installer::install')

@section('step')

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif
    
    <p class="pb-3 text-gray-800">Input your serial number from purchased code for verifying.</p>

    <form method="post" action="{{ route('install.license') }}">
        @csrf
        <div class="mb-3">
            <x-installer::label for="licensekey" :required="true">Input serial number</x-installer::label>
            <x-installer::input
                id="licensekey"
                name="licensekey"
                placeholder="XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX"
                :required="true"
            />
        </div>
        <div class="flex justify-end">
            <x-installer::button type="submit">
                Check
                <svg class="fill-current w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </x-installer::button>
        </div>
    </form>
@endsection
