<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Phome extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Actionable;

    protected $fillable = [
        "titulo",
        "programas",
        "urlvideo",
        "content",
        "data",
        "imagem",
        "resumo",
    ];

    protected $table = "phomes";
}
