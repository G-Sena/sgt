<?php

namespace App\Enums;

enum TaskStatusEnum: string {
    case PENDING         = 'Pendente';
    case IN_PROGRESS     = 'Em andamento';
    case COMPLETED       = 'Concluído';

    public function labelText(): string {
        return match($this) {
            self::PENDING       => 'Pendente',
            self::IN_PROGRESS   => 'Em andamento',
            self::COMPLETED     => 'Concluído'
        };
    }
}