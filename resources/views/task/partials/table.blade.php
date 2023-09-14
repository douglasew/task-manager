<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <caption
        class="p-6 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800"
      >
        Suas Tarefas
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
          Browse a list of Flowbite products designed to help you work and play,
          stay organized, get answers, keep in touch, grow your business, and
          more.
        </p>
      </caption>
      <thead
        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
      >
        <tr>
          <th scope="col" class="px-6 py-4">Título</th>
          <th scope="col" class="px-6 py-4">Descrição</th>
          <th scope="col" class="px-6 py-4">Data</th>
          <th scope="col" class="px-6 py-4">Status</th>
          <th scope="col" class="px-6 py-4 flex items-center justify-center">
            Visualizar
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th
            scope="row"
            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
          >
            {{$task->title}}
          </th>
          <td class="px-6 py-4">{{$task->description}}</td>
          <td class="px-6 py-4">{{$task->finish_date}}</td>
          {{-- <td class="px-6 py-4">{{$task->finish_date->format('d/m/Y')}}</td> --}}
          <td class="px-6 py-4">
            @if ($task->status === 'Ativa')
            <span style="color: #86efac">{{$task->status}}</span>
            @else
            <span style="color: #fca5a5">{{$task->status}}</span>
            @endif
          </td>
          <td class="px-6 py-4 flex items-center justify-center">
            <a href={{route('task.edit', [$task->id])}}>
              <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                height="0.75em"
                viewBox="0 0 512 512"
              >
                <style>
                  svg {
                    fill: #ffffff;
                  }
                </style>
                <path
                  d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                />
              </svg>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

<div class="px-6 py-4 mt-10 font-medium text-white dark:text-black">
  {{ $tasks->links('pagination::tailwind') }}
</div>
  