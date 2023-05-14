<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Empresa extends Model
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
    ];

    protected $table = "empresas";
}
