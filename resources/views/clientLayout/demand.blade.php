<x-app-layout>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="redirects">{{ __('Accueil') }}</a>
        </h2>
    </x-slot>
    <div class="main_conteneur">
        <form name="demandform" id="demandform" action="{{ url('demande') }}" method="post"
            enctype="multipart/form-data" wire:submit.prevent="save">
            @csrf

            {{-- stepper --}}
            <a onclick="toggle_testers('uploadfile')" href="javascript:void(0);">Step1</a>
            &nbsp;&nbsp;
            <a onclick="toggle_testers('service')" href="javascript:void(0);">Step2</a>
            <div class="step1 md:grid md:grid-cols-3 md:gap-6 active" id="uploadfile ">
                {{-- informationbox --}}
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Informations importante</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Quelques instants apres la soumission vous recevrez un email pour les instructions du
                            paiement
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        {{-- file information form --}}
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="titre-document" class="block text-sm font-medium text-gray-700">Titre du
                                    document</label>
                                <input type="text" name="filename" placeholder="curriculum vitae proffesionnel"
                                    id="name" autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('filename'){{ $message }}@enderror</span>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="typedocument" class="block text-sm font-medium text-gray-700">Type de
                                        document</label>
                                    <select id="select-filetype" name="filetype" autocomplete="filetype"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Curriculum Vitae">
                                        <option value=" ">--------</option>
                                        <option value="curriculum-vitae">curriculum-vitae</option>
                                        <option value="memoire">memoire</option>
                                        <option value="lettre_motivation">lettre_de_motivation</option>
                                        <option value="demande_aide">demande_aide</option>
                                    </select>
                                    <span style="color:red">@error('filetype'){{ $message }}@enderror</span>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Televerser votre fichier
                                        </label>
                                        <div
                                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">

                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600  focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <input id="file-upload" name="file" type="file">
                                                        <span
                                                            style="color:red">@error('file'){{ $message }}@enderror</span>
                                                        </label>
                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        Word, powerpoint
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex ">

                                        <div class="flex-2">
                                            <button
                                                class="bg-blue-500  hover:bg-blue-700 text-gray-800 font-bold py-2 px-4 rounded m-2 text-center">
                                                suivant
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="step1 md:grid md:grid-cols-3 md:gap-6 mt-4 active" id="uploadfile ">
                            {{-- service form --}}
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <div>
                                        <hr style="size: 3px;">
                                        <p class=" text-sm text-gray-600  flex  text-3xl ml-4">Autres services </p>
                                        <hr style="size: 3px;">
                                    </div>

                                    <div class=" ml-4  inline-block bg-blue-600  rounded-sm">
                                        <div class="form-check">
                                            <input name="type_service" type="checkbox" value="mise_en_forme" class="mt-2"
                                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                                            <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                                                Mise en forme
                                            </label>
                                        </div><br>
                                        <div class="form-check">
                                            <input name="type_service" type="checkbox" value="correction"
                                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                                            <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                                                Correction
                                            </label>
                                        </div><br>

                                        <div class="form-check">
                                            <input name="type_service" type="checkbox" value="redaction"
                                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                                            <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                                                Redaction
                                            </label>
                                        </div><br>
                                        <span>
                                            @error('type_service')
                                                <p style="color:red"> {{ $message }} </p>
                                            @enderror
                                        </span>

                                    </div>

                                </div>
                            </div>

                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    {{-- file information form2 --}}
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <p>selectionner les mises en formes que vous desirez appliquer au document</p>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="police" class="block text-sm font-medium text-gray-700">Police</label>
                                            <select id="police-select" name="police" autocomplete="police"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                placeholder="Curriculum Vitae">
                                                <option value="">-------</option>
                                                <option value="timesNewRman">Times New Roman</option>
                                                <option value="arial">Arial</option>
                                                <option value="calibri">Calibri</option>
                                                <option value="cambria">Cambria</option>
                                            </select>
                                            <span style="color:red">@error('police'){{ $message }}@enderror</span>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="taille" class="block text-sm font-medium text-gray-700">Taille de
                                                    police</label>
                                                <select name="taille" id="select-taille" autocomplete="taille"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    placeholder="Curriculum Vitae">
                                                    <option value="">--------</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                </select>
                                                <span style="color:red">@error('taille'){{ $message }}@enderror</span>
                                                </div>


                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="interligne"
                                                        class="block text-sm font-medium text-gray-700">Interligne</label>
                                                    <select name="interligne" id="select-interligne" autocomplete="interligne"
                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                        placeholder="Curriculum Vitae">
                                                        <option value="">--------</option>
                                                        <option value="1.25">1.25</option>
                                                        <option value="1.5">1.5</option>
                                                        <option value="1.75">1.75</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                    <span style="color:red">@error('interligne'){{ $message }}@enderror</span>
                                                    </div>

                                                </div>
                                                <div class="flex">

                                                    <div class="flex-1">
                                                        <button
                                                            class="bg-blue-500 hover:bg-blue-700 text-gray-800 font-bold py-2 px-4 mb-4  rounded m-2">
                                                            Precedent
                                                        </button>
                                                    </div>
                                                    <div class="flex-3">
                                                        <button type="submit"
                                                            class="bg-blue-500 hover:bg-blue-700 text-white-200 font-bold py-2 px-4 mb-4 rounded m-2">
                                                            Soumettre
                                                        </button>
                                                    </div>
                                                    <div>
                                                        @if (session()->has('message'))
                                                            <div class="alert alert-success">
                                                                {{ session('message') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            </div>

                            </div>

                            </form>

                            </div>


                            <script>
                                function toggle_testers(divname) {
                                    if (document.getElementById(divname).style.display == 'none')
                                        document.getElementById(divname).style.display = 'block';
                                    else
                                        document.getElementById(divname).style.display = 'none';
                                }
                            </script>

                        </x-app-layout>
