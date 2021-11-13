<template x-if="open" x-data="{open: @entangle('open')}">
    <div
            class="fixed z-10 inset-0 overflow-y-auto"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full sm:p-6">
                <h2 class="font-semibold text-xl mb-2">Edit User</h2>
                <div class="sm:flex sm:items-start">
                    <form
                            id="edit-user-form"
                            class="space-y-3 w-full"
                            action="{{ route('users.update', $user) }}"
                            method="POST">
                        {!! csrf_field() !!}
                        {!! method_field('PUT') !!}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Name
                            </label>
                            <div class="mt-1">
                                <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        value="{{ $user->name }}"
                                        required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @if($errors->has('name'))
                                <p class="text-sm text-red-600 mt-1">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Email address
                            </label>
                            <div class="mt-1">
                                <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        autocomplete="email"
                                        value="{{ $user->email }}"
                                        required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @if($errors->has('email'))
                                <p class="text-sm text-red-600 mt-1">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <button
                            form="edit-user-form"
                            type="submit"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                      Update
                    </button>
                    <a href="{{ route('users.index') }}"
                       class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                      Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
