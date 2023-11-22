<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Masyarakat extends Model
{
    use HasFactory;
    protected $table = "masyarakat";
    protected $fillable = ['user_id','nik','no_telepon','alamat','gender'];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
