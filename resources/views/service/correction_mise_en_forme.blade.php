<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demande de sercice') }}
        </h2>
    </x-slot>

<div class="mt-5 md:mt-0 md:col-span-2">
    <form name="shapeform" id="shapeform" action="{{url('selectshape')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <p>selectionner les mises en formes  que vous desirez appliquer au document</p>
          
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
    </div>
  </div>
</div>


<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">

      </div>
    </div>

    </x-app-layout>