<x-app-layout>

<div id="uploadfile">


</div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Uploder un document') }}
        </h2>
    </x-slot>

<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Informations importante</h3>
        <p class="mt-1 text-sm text-gray-600">
          Quelques instants apres la soumission vous recevrez un email pour les instructions du  paiement
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
    <form name="fileform" id="fileform" action="{{url('uploadfile')}}" method="post" enctype="multipart/form-data" >
            @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

          <div class="col-span-6 sm:col-span-3">
                <label for="titre-document" class="block text-sm font-medium text-gray-700">Titre du document</label>
                <input type="text" name="filename" placeholder="curriculum vitae proffesionnel" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-3">
                <label for="typedocument" class="block text-sm font-medium text-gray-700">Type de document</label>
                <select id="select-filetype" name="filetype" autocomplete="filetype" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Curriculum Vitae">
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
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <input id="file-upload" name="file" type="file" class="sr-only">
                    </label>
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

      <div></div>

      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <a href="miseenforme" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">suivant</a>
              
    </div>

    </div>
  </div>
</div>

</x-app-layout>