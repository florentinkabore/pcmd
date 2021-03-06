<!-- component -->
<!-- This is an example component -->


<style>

    .table {
    border-spacing: 0 15px;
  }

  i {
    font-size: 1rem !important;
  }

  .table tr {
    border-radius: 20px;
  }

  tr td:nth-child(n + 6),
  tr th:nth-child(n + 6) {
    border-radius: 0 0.625rem 0.625rem 0;
  }

  tr td:nth-child(1),
  tr th:nth-child(1) {
    border-radius: 0.625rem 0 0 0.625rem;
  }

</style>

  
<!-- component -->
<link
  href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
  rel="stylesheet"
/>
<div class="flex items-center justify-center min-h-screen bg-white">
  <div class="col-span-12">
    <div class="overflow-auto lg:overflow-visible">
      <div class="flex lg:justify-between border-b-2 border-fuchsia-900 pb-1">
        <h2 class="text-2xl text-gray-500 font-bold">All Users</h2>
        <div class="text-center flex-auto">
          <input
            type="text"
            name="name"
            placeholder="Search..."
            class="
              w-1/3
              py-2
              border-b-2 border-blue-600
              outline-none
              focus:border-yellow-400
            "
          />
        </div>

        <div>
          <a href="#">
            <button
              class="
                bg-blue-500
                hover:bg-blue-700
                text-white
                py-1
                px-3
                sm
                rounded-full
              "
            >
              All
            </button>
          </a>
          <a href="#">
            <button
              class="
                bg-blue-500
                hover:bg-blue-700
                text-white
                py-1
                px-3
                sm
                rounded-full
              "
            >
              Admin
            </button>
          </a>
          <a href="#">
            <button
              class="
                bg-blue-500
                hover:bg-blue-700
                text-white
                py-1
                px-3
                sm
                rounded-full
              "
            >
              User
            </button></a
          >
        </div>
      </div>
      <table class="table text-gray-400 border-separate space-y-6 text-sm">
        <thead class="bg-blue-500 text-white">
          <tr>
            <th class="p-3">Name</th>
            <th class="p-3 text-left">Mail</th>
            <th class="p-3 text-left">Phone</th>
            <th class="p-3 text-left">Role</th>

            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
      
          <tr class="bg-blue-200 lg:text-black">
            <td class="p-3 font-medium capitalize">Gazi Rahad</td>
            <td class="p-3">gazi.rahad871@gmail.com</td>
            <td class="p-3">01648349009</td>
            <td class="p-3 uppercase">admin</td>

            <td class="p-3">
              <span class="bg-green-400 text-gray-50 rounded-md px-2"
                >ACTIVE</span
              >
            </td>
            <td class="p-3">
              <a href="#" class="text-gray-500 hover:text-gray-100 mr-2">
                <i class="material-icons-outlined text-base">visibility</i>
              </a>
              <a href="#" class="text-yellow-400 hover:text-gray-100 mx-2">
                <i class="material-icons-outlined text-base">edit</i>
              </a>
              <a
                href="#"
                class="text-red-400 hover:text-gray-100 ml-2"
              >
                <i class="material-icons-round text-base">delete_outline</i>
              </a>
            </td>
          </tr>
       <tr class="bg-blue-200 lg:text-black">
            <td class="p-3 font-medium capitalize">Arif Uddin</td>
            <td class="p-3">gazi.rahad871@gmail.com</td>
            <td class="p-3">01648349009</td>
            <td class="p-3 uppercase">user</td>

            <td class="p-3">
              <span class="bg-green-400 text-gray-50 rounded-md px-2"
                >ACTIVE</span
              >
            </td>
            <td class="p-3">
              <a href="#" class="text-gray-500 hover:text-gray-100 mr-2">
                <i class="material-icons-outlined text-base">visibility</i>
              </a>
              <a href="#" class="text-yellow-400 hover:text-gray-100 mx-2">
                <i class="material-icons-outlined text-base">edit</i>
              </a>
              <a
                href="#"
                class="text-red-400 hover:text-gray-100 ml-2"
              >
                <i class="material-icons-round text-base">delete_outline</i>
              </a>
            </td>
          </tr>
             <tr class="bg-blue-200 lg:text-black">
            <td class="p-3 font-medium capitalize">Rubel Amin</td>
            <td class="p-3">gazi.rahad871@gmail.com</td>
            <td class="p-3">01648349010</td>
            <td class="p-3 uppercase">admin</td>

            <td class="p-3">
              <span class="bg-green-400 text-gray-50 rounded-md px-2"
                >ACTIVE</span
              >
            </td>
            <td class="p-3">
              <a href="#" class="text-gray-500 hover:text-gray-100 mr-2">
                <i class="material-icons-outlined text-base">visibility</i>
              </a>
              <a href="#" class="text-yellow-400 hover:text-gray-100 mx-2">
                <i class="material-icons-outlined text-base">edit</i>
              </a>
              <a
                href="#"
                class="text-red-400 hover:text-gray-100 ml-2"
              >
                <i class="material-icons-round text-base">delete_outline</i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>