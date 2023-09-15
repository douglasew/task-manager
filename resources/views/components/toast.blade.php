@if(Session::has('profile-updated'))
<div
  id="toast-default"
  class="fixed mx-auto flex inset-x-0 w-52 p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
  role="alert"
  x-data="{ show: true }"
  x-show="show"
  x-transition
  style="left: 45%; margin-top: 5px; background-color: #4F46E5; color: white"
  x-init="setTimeout(() => show = false, 4000)"
  class="text-sm text-gray-600 dark:text-gray-400"
>
  <div
    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200"
  >
    <svg
      class="w-5 h-5"
      aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg"
      fill="currentColor"
      viewBox="0 0 20 20"
    >
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
      />
    </svg>
    <span class="sr-only">Fire icon</span>
  </div>
  <div class="ml-3 text-sm font-normal">Perfil Atualizado</div>
</div>
@endif

@if(Session::has('task-deleted'))
<div
  id="toast-default"
  class="fixed mx-auto flex inset-x-0 w-52 p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
  role="alert"
  x-data="{ show: true }"
  x-show="show"
  x-transition
  style="left: 45%; margin-top: 5px; background-color: #4F46E5; color: white"
  x-init="setTimeout(() => show = false, 4000)"
  class="text-sm text-gray-600 dark:text-gray-400"
>
  <div
    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200"
  >
    <svg
      class="w-5 h-5"
      aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg"
      fill="currentColor"
      viewBox="0 0 20 20"
    >
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
      />
    </svg>
    <span class="sr-only">Fire icon</span>
  </div>
  <div class="ml-3 text-sm font-normal">{{session('task-deleted') }}</div>
</div>
@endif

@if(Session::has('task-created'))
<div
  id="toast-default"
  class="fixed mx-auto flex inset-x-0 w-52 p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
  role="alert"
  x-data="{ show: true }"
  x-show="show"
  x-transition
  style="left: 45%; margin-top: 5px; background-color: #4F46E5; color: white"
  x-init="setTimeout(() => show = false, 4000)"
  class="text-sm text-gray-600 dark:text-gray-400"
>
  <div
    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200"
  >
    <svg
      class="w-5 h-5"
      aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg"
      fill="currentColor"
      viewBox="0 0 20 20"
    >
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
      />
    </svg>
    <span class="sr-only">Fire icon</span>
  </div>
  <div class="ml-3 text-sm font-normal">{{ session('task-created') }}</div>
</div>
@endif

@if(Session::has('task-updated'))
<div
  id="toast-default"
  class="fixed mx-auto flex inset-x-0 w-52 p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
  role="alert"
  x-data="{ show: true }"
  x-show="show"
  x-transition
  style="left: 45%; margin-top: 5px; background-color: #4F46E5; color: white"
  x-init="setTimeout(() => show = false, 4000)"
  class="text-sm text-gray-600 dark:text-gray-400"
>
  <div
    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200"
  >
    <svg
      class="w-5 h-5"
      aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg"
      fill="currentColor"
      viewBox="0 0 20 20"
    >
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
      />
    </svg>
    <span class="sr-only">Fire icon</span>
  </div>
  <div class="ml-3 text-sm font-normal">{{ session('task-updated') }}</div>
</div>
@endif
