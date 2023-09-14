<section class="space-y-6">
    <header>
      <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('Deletar Atividade') }}
      </h2>
  
      <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Uma vez que a atividade for excluída, todos os seus recursos e
        dados serão permanentemente apagados. Antes de excluir a atividade, por
        favor faça o download de quaisquer dados ou informações que você deseja
        manter.') }}
      </p>
    </header>
  
    <x-danger-button
      x-data=""
      x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
      >{{ __('Deletar Atividade') }}</x-danger-button
    >
  
    <x-modal
      name="confirm-user-deletion"
      :show="$errors->userDeletion->isNotEmpty()"
      focusable
    >
      <form
        method="post"
        action="{{ route('task.destroy', [$task->id]) }}"
        class="p-6"
      >
        @csrf @method('delete')
  
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
          {{ __('Deseja mesmo deletar a atividade ?') }}
        </h2>
  
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
          {{ __('Depois de deletar a atividade você não poderar mais recuperar os
          dados.') }}
        </p>
  
        <div class="mt-6 flex justify-end">
          <x-secondary-button x-on:click="$dispatch('close')">
            {{ __('Cancelar') }}
          </x-secondary-button>
  
          <x-danger-button class="ml-3"> {{ __('Deletar') }} </x-danger-button>
        </div>
      </form>
    </x-modal>
  </section>
  