<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Grupo extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Actionable;

    protected $fillable = [
        "nome",
    ];

    protected $table = "grupos";

    public function ferramenta()
    {
        return $this->hasMany(\App\Models\Ferramenta::class, 'grupo_id');
    }
}
