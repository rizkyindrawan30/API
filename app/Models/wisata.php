<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\TableRow;

class wisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_wisata', 'nama_wisata', 'lokasi_wisata', 'foto', 'harga', 'deskripsi'
    ];

    static function getWisata()
    {
        $return = DB::table('wisata');
        return $return;
    }
}
