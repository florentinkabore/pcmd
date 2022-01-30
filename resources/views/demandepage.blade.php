<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demande de sercice') }}
        </h2>
    </x-slot>

    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informations importante</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Quelques instants apres la soumission vous recevrez un email pour les instructions du paiement
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form name="fileform" id="fileform" action="{{ url('uploadfile') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="titre-document" class="block text-sm font-medium text-gray-700">Titre du
                                    document</label>
                                <input type="text" name="name" placeholder="curriculum vitae proffesionnel" id="name"
                                    autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="typedocument" class="block text-sm font-medium text-gray-700">Type de
                                    document</label>
                                <select id="select-filetype" name="filetype" autocomplete="filetype"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Curriculum Vitae">
                                    <option value="curriculum-vitae">curriculum-vitae</option>
                                    <option value="memoire">memoire</option>
                                    <option value="lettre_motivation">lettre_de_motivation</option>
                                    <option value="demande_aide">demande_aide</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Televerser votre fichier
                                </label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="user_avatar">Upload file</label>
                                            <input aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                            <p class="pl-1">ou glisser et deposer</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Word, powerpoint
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">

                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form name="shapeform" id="shapeform" action="{{ url('selectshape') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <p>selectionner les mises en formes que vous desirez appliquer au document</p>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="police" class="block text-sm font-medium text-gray-700">Police</label>
                                <select id="police-select" name="police" autocomplete="police"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Curriculum Vitae">
                                    <option value="timesNewRman">Times New Roman</option>
                                    <option value="arial">Arial</option>
                                    <option value="calibri">Calibri</option>
                                    <option value="cambria">Cambria</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="taille" class="block text-sm font-medium text-gray-700">Taille de
                                    police</label>
                                <select name="taille" id="select-taille" autocomplete="taille"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Curriculum Vitae">
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                            </div>


                            <div class="col-span-6 sm:col-span-3">
                                <label for="interligne"
                                    class="block text-sm font-medium text-gray-700">Interligne</label>
                                <select name="interligne" id="select-interligne" autocomplete="interligne"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Curriculum Vitae">
                                    <option value="1.25">1.25</option>
                                    <option value="1.5">1.5</option>
                                    <option value="1.75">1.75</option>
                                    <option value="2">2</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">

                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form name="demandform" id="demandform" action="{{ url('demande') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div>
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    Description
                                </label>
                                <div class="mt-1">
                                    <textarea name="description" id="description" rows="3"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                        placeholder="correction et mise en forme du cv"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Bref description de vos besoins
                                </p>
                            </div>

                        </div>

                    </div>
                </form>

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button value="submit" onclick="myFunction()"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Soumettre
                    </button>
                </div>

            </div>
        </div>
    </div>





    <script>
        function myFunction() {
            setTimeout(function() {
                document.getElementById("fileform").submit();
            }, 3000);
            setTimeout(function() {
                document.getElementById("shapeform").submit();
            }, 6000);
            setTimeout(function() {
                document.getElementById("demandform").submit();
            }, 5000);
        }

        /* submitForms=function(){
                document.forms["fileform"].submit();
                document.forms["shapeform"].submit();
                document.forms["demandform"].submit();
            }  */
    </script>


</x-app-layout>
