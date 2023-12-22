<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['produto_id', 'quantidade', 'total', 'cliente_nome'];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
