<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="bg-white mb-4 shadow rounded p-2">
            <input
                    wire:model="search"
                    type="search"
                    name="search"
                    id="search"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    placeholder="Search...">
        </div>
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-4">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Created At
                    @if(($sortBy === 'created_at' && $order === 'desc') || $sortBy !== 'created_at')
                        <button wire:click="sort('created_at', 'asc')" type="button">
                      &uparrow;
                  </button>
                    @elseif($sortBy === 'created_at' && $order === 'asc')
                        <button wire:click="sort('created_at', 'desc')" type="button">
                      &downarrow;
                  </button>
                    @endif
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                  @if(($sortBy === 'name' && $order === 'desc') || $sortBy !== 'name')
                      <button wire:click="sort('name', 'asc')" type="button">
                      &uparrow;
                  </button>
                  @elseif($sortBy === 'name' && $order === 'asc')
                      <button wire:click="sort('name', 'desc')" type="button">
                      &downarrow;
                  </button>
                  @endif
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
                  @if(($sortBy === 'email' && $order === 'desc') || $sortBy !== 'email')
                      <button wire:click="sort('email', 'asc')" type="button">
                      &uparrow;
                  </button>
                  @elseif($sortBy === 'email' && $order === 'asc')
                      <button wire:click="sort('email', 'desc')" type="button">
                      &downarrow;
                  </button>
                  @endif
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- Odd row -->
              @foreach($users as $user)
                  <tr class="bg-white">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $user->created_at }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $user->name }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $user->email  }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
        {!! $users->links() !!}
    </div>
  </div>
</div>

