<?php
// app/Models/MedicoEspecialidade.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoEspecialidade extends Model
{
    use HasFactory;

    protected $table = 'medicos_especialidades';

    protected $fillable = ['especialidaes_id', 'medicos_id'];
    public $timestamps = true;
}
