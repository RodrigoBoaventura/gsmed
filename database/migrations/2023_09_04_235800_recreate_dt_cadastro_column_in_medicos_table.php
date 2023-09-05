<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateDtCadastroColumnInMedicosTable extends Migration
{
    public function up()
    {
        // Primeiro, remova a coluna existente, se ela existir
        if (Schema::hasColumn('medicos', 'dt_cadastro')) {
            Schema::table('medicos', function (Blueprint $table) {
                $table->dropColumn('dt_cadastro');
            });
        }

        // Em seguida, recrie a coluna com as configurações desejadas
        Schema::table('medicos', function (Blueprint $table) {
            $table->timestamp('dt_cadastro')->default(now());
        });
    }

    public function down()
    {
        // Para reverter a migração, você pode simplesmente remover a coluna novamente
        if (Schema::hasColumn('medicos', 'dt_cadastro')) {
            Schema::table('medicos', function (Blueprint $table) {
                $table->dropColumn('dt_cadastro');
            });
        }
    }
}
