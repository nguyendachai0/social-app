<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $table = 'conversations';
    protected $fillable = ['created_at', 'updated_at'];
    public function notifcations()
    {
        return $this->morphMany(Notification::class, 'reference');
    }
}
