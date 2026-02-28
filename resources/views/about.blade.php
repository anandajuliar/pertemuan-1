<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Biodata Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full text-left">
                        <tbody>
                            <tr>
                                <th class="px-4 py-2 text-gray-600">Nama</th>
                                <td class="px-4 py-2">: Ananda Julia</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 text-gray-600">NIM</th>
                                <td class="px-4 py-2">: 20230140046</td> </tr>
                            <tr>
                                <th class="px-4 py-2 text-gray-600">Program Studi</th>
                                <td class="px-4 py-2">: Teknologi Informasi</td>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 text-gray-600">Hobi</th>
                                <td class="px-4 py-2">: Coding & Belajar AI</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>