<?php

namespace App\Models;

use App\Http\Controllers\UnixTimestampSerializable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use UnixTimestampSerializable;

    protected $fillable = [
        'title',
        'done',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
