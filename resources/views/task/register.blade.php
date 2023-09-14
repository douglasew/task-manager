<x-app-layout>
  {{-- <x-slot name="header">
    <h2
      class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
    >
      {{ __('Criar tarefa') }}
    </h2>
  </x-slot> --}}

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl">
          <form
            method="POST"
            action="{{ route('task.create') }}"
            class="mt-6 space-y-6"
          >
            @csrf

            <div>
              <x-input-label for="title" :value="__('Título')" />
              <x-text-input
                id="title"
                name="title"
                type="text"
                class="mt-1 block w-full"
              />
              <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>

            <div>
              <x-input-label for="description" :value="__('Descrição')" />
              <textarea
                id="description"
                name="description"
                rows="10"
                class="block p-2.5 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
              ></textarea>
              <x-input-error
                class="mt-2"
                :messages="$errors->get('description')"
              />
            </div>
            <div class="flex justify-between">
              <div>
                <x-input-label for="status" :value="__('Data')" />
                <input
                  class="block w-full p-2.5 text-sm rounded-lg dark:border-gray-600 dark:text-white dark:bg-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  type="date"
                  id="finish_date"
                  name="finish_date"
                />
                <x-input-error class="mt-2" :messages="$errors->get('finish_date')" />
              </div>
              <div></div>
            </div>
            <div class="flex items-center gap-4">
              <x-primary-button>{{ __('Criar') }}</x-primary-button>

              @if (session('status') === 'task-created')
              <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
              >
                {{ __('Criado.') }}
              </p>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
