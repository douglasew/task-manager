<section>
    <header>
      <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('Profile Photo') }}
      </h2>
  
      <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{ __("Update your photo account's profile") }}
      </p>
    </header>
  
    <form method="post" action="">@csrf</form>
  
    <form
      method="post"
      action="{{ route('profile.update') }}"
      class="mt-6 space-y-6"
      enctype="multipart/form-data"
    >
      @csrf @method('patch') @if($user->photo)
      <img
        class="max-h-full max-w-full rounded-full shadow-xl dark:shadow-gray-800"
        src="{{ url("storage/{$user->photo}") }}"
        alt="photo"
      />
      @else
      <img
        class="max-h-full max-w-full rounded-full shadow-xl dark:shadow-gray-800"
        src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png"
        alt="photo"
      />
      @endif {{--
      <label
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        for="file_input"
        >Upload Photo</label
      >
      <input
        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        aria-describedby="file_input_help"
        id="photo"
        name="photo"
        type="file"
      />
      <p
        class="mt-1 text-sm text-gray-500 dark:text-gray-300"
        id="file_input_help"
      >
        PNG, JPG
      </p>
      --}}
  
      <input
        class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        id="photo"
        name="photo"
        type="file"
      />
      <p
        class="mt-1 text-sm text-gray-500 dark:text-gray-300"
        id="file_input_help"
      >
        Formatos: PNG, JPG
      </p>
      <x-input-error class="mt-2" :messages="$errors->get('photo')" />
  
      <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Save') }}</x-primary-button>
  
        @if (session('status') === 'profile-updated')
        <p
          x-data="{ show: true }"
          x-show="show"
          x-transition
          x-init="setTimeout(() => show = false, 2000)"
          class="text-sm text-gray-600 dark:text-gray-400"
        >
          {{ __('Saved.') }}
        </p>
        @endif
      </div>
    </form>
</section>
  