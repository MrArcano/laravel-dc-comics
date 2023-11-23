<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;
    public static function generateSlug($string){
        // genero il mio slug
        $slug = Str::slug($string, '-');
        $origina_slug = $slug;

        // controllo se nel mio db esiste già
        $exist = Comic::where('slug',$slug)->first();
        $counter=1;
        while($exist){
            $slug = $origina_slug .'-'. $counter;
            $counter++;
            $exist = Comic::where('slug',$slug)->first();
        }

        return $slug;
    }
}
