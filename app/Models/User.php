<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'name_furigana',
        'email',
        'password',
        'company_name',
        'image',
        'plan_status',
        'status'
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
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the messages sent by the user.
     */
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'from_user_id', 'id');
    }

    /**
     * Get the messages received by the user.
     */
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'to_user_id', 'id');
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'created_by', 'id');
    }

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    public function announcementParticipants()
    {
        return $this->hasMany(AnnouncementParticipant::class);
    }

    public function receivedAlarms()
    {
        return $this->hasMany(Alarm::class, 'to_user_id', 'id');
    }

    public function sentAlarms()
    {
        return $this->hasMany(Alarm::class, 'from_user_id', 'id');
    }

    public function userPayments()
    {
        return $this->hasMany(UserPayment::class);
    }
}
