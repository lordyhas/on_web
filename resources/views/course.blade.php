<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Cours") }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl"><b>{{ __("") }}</b></h3>
                </div>
            </div>
        </div>
    </div>



    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="mb-3  text-2xl"><b>{{ __("Sommaire") }}</b></h2>
                    <div>
                        <table class="table text-start" >
                            <tbody>
                            <tr>
                                <th class="col-6 text-start">{{"Session"}}</th>
                                <td class="col-2">{{"Aucune"}}</td>
                                <td class="col-2">{{""}}</td>
                            </tr>


                            <tr>
                                <th class="col-6 text-start pr-5">Enseignant</th>
                                <td class="col-2">{{""}}</td>
                                <td class="col-2">{{""}}</td>
                            </tr>

                            <tr>
                                <th class="col-6 text-start">Période de cours</th>
                                <td class="col-2">{{""}}</td>
                                <td class="col-2">{{""}}</td>
                            </tr>

                            <tr>
                                <th class="col-6 text-start pr-5">Période de disponibilités </th>
                                <td class="col-2 ">Par Teams ou sur demande pour une rencontre en personne.</td>
                                <td class="col-2">{{""}}</td>
                            </tr>

                            <tr>
                                <th class="col-6 text-start">Absences</th>
                                <td class="col-2">Aucune</td>
                                <td class="col-2">{{""}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <strong>420-7A4-FE Environnement Web</strong>
                        <ul>
                            <li>Pondération : 2-2-2</li>
                            <li>2,0 unités</li>
                        </ul>

                        Le préalable absolu à ce cours :<br>
                        &emsp;&minus; <em>420-705-FE Programmation des interfaces Web</em><br>

                        Ce cours est préalable absolu au cours suivant :<br>
                        &emsp;&minus; <em>420-706-FE Projet intégrateur</em>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .expand-col {
            width: 100%;
        }

        .expand-col-60 {
            width: 60%;
        }

        .expand-col-20 {
            width: 20%;
        }
    </style>

    @if(true)
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="mb-3  text-2xl"><b>{{ __("Notes et support de cours") }}</b></h3>

                        <div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="expand-col-60 text-start">01. Introduction au cours</th>
                                        <td class="expand-col-20">Diapo <i class="fas fa-download"></i></td>
                                        <td class="expand-col-20">{{"PDF"}}</td>
                                        <td>{{""}}</td>
                                    </tr>

                                    <tr>
                                        <th class="text-start">02. </th>
                                        <td>Diapo</td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
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
