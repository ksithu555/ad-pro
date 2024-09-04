<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnouncementParticipant extends Model
{
    protected $fillable = [
        'announcement_id',
        'user_id',
        'status'
    ];

    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
