<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Nos clients") }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl"><b>{{ __("") }}</b></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="mb-3  text-xl"><b>{{ __("Sommaire") }}</b></h3>
                    <div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">{{"Session"}}</th>
                                <td>{{""}}</td>
                                <td>{{}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Enseignant</th>
                                <td>{{}}</td>
                                <td>{{}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Période de cours</th>
                                <td>{{}}</td>
                                <td>{{}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Période de disponibilités</th>
                                <td>Par Teams ou sur demande pour une rencontre en personne.</td>
                                <td>{{}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Absences</th>
                                <td>Aucune</td>
                                <td>{{}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(true)
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="mb-3  text-xl"><b>{{ __("Notes et support de cours") }}</b></h3>

                        <div>
                            <table class="table">
                                <!-- thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead -->
                                <tbody>
                                    <tr>
                                        <th scope="row">01. Introduction au cours</th>
                                        <td>Diapo</td>
                                        <td>{{}}</td>
                                        <td>{{}}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">02. </th>
                                        <td>Diapo</td>
                                        <td>{{}}</td>
                                        <td>{{}}</td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-app-layout>
