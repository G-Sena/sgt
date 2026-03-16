<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskSearch extends Component
{
    public $search = '';
    public $status = '';

    public function render()
    {
        $tasks = Task::query()
            ->when($this->search, function($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->status, function($query) {
                $query->where('status', $this->status);
            })
            ->orderBy('due_date', 'asc')
            ->get();

        return view('livewire.task-search', ['tasks' => $tasks]);
    }

    public function deleteTask($id)
    {
        Task::find($id)?->delete();
        session()->flash('success', 'Tarefa excluída com sucesso!');
    }
}