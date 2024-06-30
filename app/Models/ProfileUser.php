<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProfileUser extends Authenticatable
{  
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "profile_users";
    protected $fillable = [
        'email',
        'password',
        'date_of_birth',
        'first_name',
        'last_name',
        'sur_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function sentFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'sender_id');
    }
    public function receivedFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'receiver_id');
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'profile_user_id');
    }
    public function participants()
    {
        return $this->hasMany(Participant::class, 'profile_user_id');
    }
    public function messages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
    public function shares()
    {
        return $this->hasMany(Share::class, 'profile_user_id');
    }
    public function userPosts()
    {
        return $this->hasMany(UserPost::class, 'profile_user_id');
    }

}
