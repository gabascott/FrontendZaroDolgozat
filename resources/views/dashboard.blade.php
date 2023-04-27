<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Szakdolgozat címe
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Készítők neve
                            </th>
                            <th scope="col" class="px-6 py-3">
                                GitHub link
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Szakdolgozat elérhetősége
                            </th>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody class="szakdolgozatoklistazasa">
                        
                    </tbody>
                </table>

                <div class="ujadat">
                    <form>
                        <div style="display:none"><input type="text" id="id"></div>
                        <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" id="szakdoga_nev"></div>
                        <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" id="tagokneve"></div>
                        <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" id="oldallink"></div>
                        <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" id="githublink"></div>
                        <div class="gomb"><button id="uj">Új</button>
                            <button id="modosit">Módosít</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
