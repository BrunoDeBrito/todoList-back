<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model para Lista de Tarefas
 *
 * @author Bruno De Brito <bruno@sysout.com.br>
 * @since 22/11/2022
 * @version 1.0.0
 */
class TodoTask extends Model {

    use HasFactory;

    protected $fillable = [
        'label', 'is_complete',
    ];

    /**
     * Relação com as lista
     *
     * @return void
     */
    public function todo() {
        $this->belongsTo(Todo::class);
    }
}
