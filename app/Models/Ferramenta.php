<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Ferramenta extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Actionable;

    protected $fillable = [
        "nome",
        "logo",
        "url",
        "descricao",
        "tag",
        "grupo_id",
    ];

    protected $table = "ferramentas";

    public function grupo()
    {
        return $this->belongsTo(\App\Models\Grupo::class);
    }
}
