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
                                <td class="col-2">{{"Automne"}}</td>
                                <td class="col-2">{{""}}</td>
                            </tr>


                            <tr>
                                <th class="col-6 text-start pr-5">Enseignant</th>
                                <td class="col-2">{{""}}</td>
                                <td class="col-2">{{""}}</td>
                            </tr>

                            <tr>
                                <th class="col-6 text-start">Période de cours</th>
                                <td class="col-2">{{"Mardi 18h30-21h30 (en ligne) | Jeudi 18h30-21h30 (en ligne)"}}</td>
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
                                        <th class="expand-col-60 text-start">00. Introduction au cours</th>
                                        <td class="expand-col-20"><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td class="expand-col-20">{{"PDF"}}</td>
                                        <td>{{""}}</td>
                                    </tr>

                                    <tr>
                                        <th class="text-start">A &minus; 01. Déterminer le contexte du projet. &#42;</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>

                                    <tr>
                                        <th class="text-start">A &minus; 2. Rechercher de l'information sur Internet.</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{"PDF"}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">B &minus; 3. Conception visuel d'un site Web &amp; Marquette.</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>

                                    <tr>
                                        <th class="text-start">A &minus; 4. Planification des tâches. &#42;</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">A &minus; 4.1. Techniques de planification AGILE</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">A &minus; 4.2. Techniques de gestion de temps.</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">A &minus; 5. Assurer le suivi de l'évolution du projet.</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">B &minus; 6. Programmation d'interface Web. &#42;</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">B &minus; 7. Programmation de la logique applicative du côté client.</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">B &minus; 8. Déboguer la syntaxe du code. &#42;</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">B &minus; 9. Tests fonctionnels.</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">A &minus; 10. Déploiement de l'application Web. &#42;</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">A &minus; 11. Assurer l’utilisatilisabilité de l’application Web.</th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{{""}}</td>
                                        <td>{{""}}</td>
                                    </tr>
                                    <!-- tr>
                                        <th class="text-start"></th>
                                        <td><a href="#">Diapos &nbsp; <i class="fas fa-download"></i></a></td>
                                        <td>{ {""}}</td>
                                        <td>{ {""}}</td>
                                    </tr -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-3  text-2xl"><b>{{ __("Travaux Pratiques") }}</b></h3>
                    <div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th class="expand-col-60 text-start">Devoir 1 - Cahier des charges (CDC)</th>
                                <td class="expand-col-20"><a href="#">PDF &nbsp; <i class="fas fa-download"></i></a></td>
                                <td class="expand-col-20">{{""}}</td>
                                <td>{{""}}</td>
                            </tr>

                            <tr>
                                <th class="text-start">Devoir 2 - Planification </th>
                                <td><a href="#">PDF &nbsp; <i class="fas fa-download"></i></a></td>
                                <td>{{""}}</td>
                                <td>{{""}}</td>
                            </tr>

                            <tr>
                                <th class="text-start">Devoir 3 - Hébergement </th>
                                <td><a href="#">PDF &nbsp; <i class="fas fa-download"></i></a></td>
                                <td>{{""}}</td>
                                <td>{{""}}</td>
                            </tr>
                            <tr>
                                <th class="text-start">Mini-test</th>
                                <td><a href="#">Lien &nbsp;</a></td>
                                <td>{{"Résultat"}}</td>
                                <td>{{""}}</td>
                            </tr>

                            <tr>
                                <th class="text-start">Projet</th>
                                <td><a href="#">PDF &nbsp; <i class="fas fa-download"></i></a></td>
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

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-3  text-2xl"><b>{{ __("Autres sites/documents utiles") }}</b></h3>
                    <div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th class="expand-col-60 text-start">Utilisation appropriée de l'IA en tant que développeur web</th>
                                <td class="expand-col-20"><a href="#">PDF &nbsp; <i class="fas fa-download"></i></a></td>
                                <td class="expand-col-20">{{""}}</td>
                                <td>{{""}}</td>
                            </tr>

                            <tr>
                                <th class="text-start">Méthodes AGILE - SCRUM </th>
                                <td><a href="https://youtu.be/anZcEIQlpoY?si=JvtviTD1gcORsF9e">Tuto &nbsp;</a></td>
                                <td>{{""}}</td>
                                <td>{{""}}</td>
                            </tr>

                            <tr>
                                <th class="text-start">Méthodes AGILE - KANBAN</th>
                                <td><a href="https://youtu.be/i2-WWbYJn_w?si=zqUruCp--BgnfpqU">Tuto &nbsp;</a></td>
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

</x-app-layout>
