<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demande recu') }}
        </h2>
    </x-slot>

    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nom
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Telephone
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Type de document
              </th>

              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Titre du document 
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                document
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Mise en forme
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                description
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                statut
              </th>
                
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($data as $row) 
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$row->name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$row->email}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$row->phone}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$row->filetype}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$row->filename}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$row->file}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <div class="text-sm text-gray-900">{{$row->police}}</div>
                <div class="text-sm text-gray-500">{{$row->taille}}</div>
                <div class="text-sm text-gray-500">{{$row->interligne}}</div>
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$row->description}}
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$row->statut}}
              </td>

              
            </tr>

            <!-- More people... -->
            endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</x-app-layout>
