<x-app-layout>
  <div id="service">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sercices') }}
        </h2>
    </x-slot>

    <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        
        <div>
            <p class=" text-sm text-gray-600  flex justify-center text-xl" >Autres Services </p>
            <hr style="size: 3px;">
        </div>
         
              <div class="flex justify-center">
              
        <div>
          <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="mise_en_forme" id="flexCheckDefault">
            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
              Mise en forme
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="correction" id="flexCheckChecked" checked>
            <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
              Correction 
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="redaction" id="flexCheckChecked" checked>
            <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
              Redaction
            </label>
          </div>

        </div>
      </div>
      </div>
    </div>

<div class="mt-5 md:mt-0 md:col-span-2">
    <form name="shapeform" id="shapeform" action="{{url('selectshape')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
          
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mises en forme') }}
        </h2>
          
          <div class="col-span-6 sm:col-span-3">
                <label for="police" class="block text-sm font-medium text-gray-700">Police</label>
                <select id="police-select" name="police" autocomplete="police" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Curriculum Vitae">
                    <option value="timesNewRman">Times New Roman</option>
                    <option value="arial">Arial</option>
                    <option value="calibri">Calibri</option>
                    <option value="cambria">Cambria</option>
                </select>
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="taille" class="block text-sm font-medium text-gray-700">Taille de police</label>
                <select name="taille" id="select-taille" autocomplete="taille" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Curriculum Vitae">
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>
            </div>


            <div class="col-span-6 sm:col-span-3">
                <label for="interligne" class="block text-sm font-medium text-gray-700">Interligne</label>
                <select name="interligne" id="select-interligne" autocomplete="interligne" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Curriculum Vitae">
                    <option value="1.25">1.25</option>
                    <option value="1.5">1.5</option>
                    <option value="1.75">1.75</option>
                    <option value="2">2</option>
                </select>
            </div>
          </div>
        </div>
      </form>
      <div class="px-2 py-3 bg-gray-50 text-left sm:px-6">
              <a href="uploader_document" class="inline-block justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Precedente</a>      
    </div>
    <div class="px-2 py-3 bg-gray-50 text-right sm:px-6">
              <a href="miseenforme" class="inline-block justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Soumettre</a>      
    </div>
    </div>
  </div>
</div>
<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
      </div>
    </div>


  </div>
    

    </x-app-layout>