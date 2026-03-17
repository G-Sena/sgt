<head>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <main class="w-1/2 mt-30 mx-auto bg-white p-4">
        <h1 class="text-3xl text-[E2121E] font-bold mb-6 text-center">Editar tarefa</h1>
        
        <form action="{{route('tasks.update', $task->id)}}" method='POST'>
            @csrf
            @method('PUT')
        
            <div>
                <label for='title'>Título</label>
                <input class="w-full text-gray border-2 border-[E2121E] rounded p-2" type="text" name='title' value='{{old('title', $task->title)}}' required>
            </div>
            <div>
                <label for='description'>Descrição</label>
                <input class="w-full text-gray border-2 border-[E2121E] rounded p-2" type="text" name='description' value='{{old('description', $task->description)}}'>
            </div>
            <div>
                <label for='due_date'>Prazo</label>
                <input class="w-full text-gray border-2 border-[E2121E] rounded p-2" type="date" name='due_date' value='{{old('due_date', $task->due_date)}}' required>
            </div>
            <div>
                <label for='status'>Status</label>
                <select class="mb-6 w-full text-gray border-2 border-[E2121E] rounded p-2" name='status' required>
                    <option value="Pendente" {{ $task->status=='Pendente' ? 'selected' : '' }}>Pendente</option>
                    <option value="Em andamento" {{ $task->status=='Em andamento' ? 'selected' : '' }}>Em andamento</option>
                    <option value="Concluído" {{ $task->status=='Concluído' ? 'selected' : '' }}>Concluído</option>
                </select>
            </div>
        
            <button class="block m-1 w-fit bg-[E2121E] text-white p-1 rounded shadow hover:bg-gray-300 hover:text-[E2121E] cursor-pointer" type="submit">Atualizar</button>
        
        </form>
        <a class="block m-1 w-fit bg-[E2121E] text-white p-1 rounded shadow hover:bg-gray-300 hover:text-[E2121E] cursor-pointer" href="{{route('tasks.index')}}"><button class="cursor-pointer" >Cancelar</button></a>
    </main>
</body>
