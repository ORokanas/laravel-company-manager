<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';
    //TODO add timestamps/deleted_at for soft delete
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'website',
        'email',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
