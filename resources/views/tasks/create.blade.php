<head>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <main class="w-1/2 mt-30 mx-auto w-1/2 bg-white p-4">
        <h1 class="text-3xl text-[E2121E] font-bold mb-6 text-center">Criar tarefa</h1>
        
        <form action={{route('tasks.store')}} method='POST'>
            @csrf
            <div>
                <label for="title">Título</label>
                <input class="w-full text-gray border-2 border-[E2121E] rounded p-2" class="w-full text-white border border-gray-300 rounded p-2" type=text name='title' id='title' value="{{old('title')}}" required ></input>
                @error('title')
                    <div class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg">
                        <div>{{$message}}</div>
                    </div>
                @enderror
            </div>
            <div>
                <label for="description">Descrição</label>
                <input class="w-full text-gray border-2 border-[E2121E] rounded p-2" type=text name='description' id='description' value="{{old('description')}} "></input>
            </div>
            <div>
                <label for="due_date">Prazo de entrega</label>
                <input class="w-full text-gray border-2 border-[E2121E] rounded p-2" type=date name='due_date' id='due_date' value="{{old('due_date')}}" required></input>
                @error('due_date')
                    <div class="text-danger">
                        <div>{{$message}}</div>
                    </div>
                @enderror
            </div>
            <div>
                <label for="status">Status</label>
        
                <select class="w-full text-gray border-2 border-[E2121E] rounded p-2" name='status' id='status' required>
                    <option value="Pendente">Pendente</option>
                    <option value="Em andamento">Em andamento</option>
                    <option value="Concluído">Concluído</option>
                </select>
                @error('status')
                    <div class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg">
                        <div>{{$message}}</div>
                    </div>
                @enderror
            </div>
            <button class="block mx-1 mb-2 mt-4 w-fit bg-[E2121E] text-white p-1 rounded shadow hover:bg-gray-300 hover:text-[E2121E] cursor-pointer" type=submit>Salvar</button>
        
        </form>
        <a class="block mx-1 mb-4 w-fit bg-[E2121E] text-white p-1 rounded shadow hover:bg-gray-300 hover:text-[E2121E]" href="{{route('tasks.index')}}"><button class="cursor-pointer" >Voltar</button></a>
    </main>
</body>

