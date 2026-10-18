<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'title', 'genre', 'duration', 'release_year', 'description', 'poster',
    ];

    // URL poster dari folder public/assets/images/
    public function getPosterUrlAttribute(): string
    {
        return asset('assets/images/' . $this->poster);
    }

    // 148 -> "2 jam 28 menit"
    public function getDurationTextAttribute(): string
    {
        $jam = intdiv($this->duration, 60);
        $menit = $this->duration % 60;

        return ($jam > 0 ? $jam . ' jam ' : '') . ($menit > 0 ? $menit . ' menit' : '');
    }
}
