<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medicos';

    protected $fillable = ['nome', 'crm', 'telefone', 'email', 'dt_cadastro'];
    public $timestamps = true;

    public function especialidades()
    {
        return $this->belongsToMany(Especialidade::class, 'medicos_especialidades', 'medicos_id', 'especialidades_id');
    }

}