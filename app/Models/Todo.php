<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model para TODOS
 *
 * @author Bruno De Brito <bruno@sysout.com.br>
 * @since 22/11/2022
 * @version 1.0.0
 */
class Todo extends Model {

    use HasFactory;

    protected $fillable = [
        'label',
    ];

    /**
     * Obtém as tarefas
     *
     * @return void
     */
    public function tasks() {
        $this->hasMany(TodoTask::class);
    }
}
