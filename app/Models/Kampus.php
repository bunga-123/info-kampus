<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $table = 'kampus';
    protected $fillable = [
        "nama_kampus",
        "alamat",
        "akreditasi",
        "gambar"
    ];

    public function program_studi()
    {
        return $this->hasMany(ProgramStudi::class);
    }
}
