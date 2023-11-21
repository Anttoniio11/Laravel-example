<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Casa extends Model
{
    use HasFactory;

    protected $table = 'casa';

    // protected $fillable = [
    //     'name',
    //     'price'
    // ]; Forma 1

    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'idUser');
    }

}
