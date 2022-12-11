<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    public static function getRiwayat($user_id)
    {
        return Booking::where('user_id', $user_id)->get();
    }

    public static function getJadwal($studio_id)
    {
        return Booking::where('studio_id', $studio_id)->get();
    }
}
