<div class="p-4 bg-white rounded shadow">
    <h1 class="text-2xl text-[E2121E] font-bold mb-4">Lista de Tarefas</h1>

    @if (session('success'))
        <div class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex gap-4 mb-4">
        <input type="text" wire:model.live="search" placeholder="Buscar título..." class="border p-1 rounded">
        <select wire:model.live="status" class="border p-1 rounded">
            <option value="">Todos os status</option>
            <option value="Pendente">Pendente</option>
            <option value="Em andamento">Em andamento</option>
            <option value="Concluído">Concluído</option>
        </select>
        <a class="block w-fit bg-[E2121E] text-white p-1 rounded shadow hover:bg-gray-300 hover:text-[E2121E] cursor-pointer" href="{{route('tasks.create')}}" ><button class="cursor-pointer">Criar tarefa</button></a>
    </div>

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border px-2 py-1">Título</th>
                <th class="border px-2 py-1">Descrição</th>
                <th class="border px-2 py-1">Prazo</th>
                <th class="border px-2 py-1">Status</th>
                <th class="border px-2 py-1">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td class="border px-2 py-1">{{ $task->title }}</td>
                    <td class="border px-2 py-1">{{ $task->description }}</td>
                    <td class="border px-2 py-1">{{ $task->due_date }}</td>
                    <td class="border px-2 py-1">{{ $task->status }}</td>
                    <td class="border px-2 py-1 flex gap-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="hover:text-red-500">Editar</a>
                        <button wire:click="deleteTask({{ $task->id }})" class="hover:text-red-500 cursor-pointer">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!--<div>Selecionado: {{ $status }}</div>-->
</div>