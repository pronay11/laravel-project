<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <p>JODI DATA NITE CHAN TAHOLE APNAKE----------->>></p>
                <h1> {
                     "authcode":"your authcode",

                     "token": "your token",

                     "name":"your product name",

                     "des":"your product description"
                    }
                </h1>
            </div>
        </div>
    </div>
</x-app-layout>
