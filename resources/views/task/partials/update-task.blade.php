<section>
    <header>
      <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('Informação da Atividade') }}
      </h2>
  
      <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{ __("Atualize sua ativade") }}
      </p>
    </header>
    <form
      method="post"
      action="{{ route('task.update', [$task->id]) }}"
      class="mt-6 space-y-6"
    >
      @csrf
      @method('patch')
  
      <div>
        <x-input-label for="title" :value="__('Título')" />
        <x-text-input
          id="title"
          name="title"
          type="text"
          class="mt-1 block w-full"
          :value="old('title', $task->title)"
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
        >
{{old('description', $task->description)}}</textarea
        >
        <x-input-error class="mt-2" :messages="$errors->get('description')" />
      </div>
      
      <div class="flex justify-between">
        <div>
          <x-input-label for="status" :value="__('Status')" />
          <select
            name="status"
            id="status"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          >
            <option value="1" name="status" id="status" @if (old('status', $task->status) == 1) selected @endif>Ativa</option>
            <option value="0" name="status" id="status" @if (old('status', $task->status) == 0) selected @endif>Finalizada</option>
          </select>
        </div>
        <div>
          <x-input-label for="status" :value="__('Data')" />
          <input
            class="block w-full p-2.5 text-sm rounded-lg dark:border-gray-600 dark:text-white dark:bg-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500"
            type="date"
            value="{{ $task->finish_date }}"
            id="finish_date"
            name="finish_date"
          />
          <x-input-error class="mt-2" :messages="$errors->get('finish_date')" />
        </div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      
      <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Salvar') }}</x-primary-button>
      </div>
    </form>

    <div class="mt-4">
      <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        Atividade criada em: {{$task->created_at->format('d/m/Y')}}
      </p>
    </div>

    
</section>
  