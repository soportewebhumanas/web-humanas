<style>
main button .button .button-primary{
    background-color: #1b365d !important;    
}
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel principal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    
                    <div id="content"></div>
                    {{-- <textarea name="" id="content" cols="30" rows="10"></textarea> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

