<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    Selamat datang di Dashboard E-Commerce!
                    Silakan pilih menu yang ingin kamu buka.
                </div>
            </div>


            {{-- Menu E-Commerce --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-grey-900">
                    <h3 class="text-lg font-semibold mb-4">
                        Menu E-Commerce
                    </h3>

                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('products.index') }}"
                            class="bg-blue-600 text-black px-4 py-2 rounded hover:bg-blue-700">
                            Katalog Produk
                        </a>

                        <a href="{{ url('/eager-loading-demo') }}"
                            class="bg-green-600 text-black px-4 py-2 rounded hover:bg-green-700">
                            Eager Loading Demo
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>