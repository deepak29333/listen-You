<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    use HasFactory;

    public function getTiming($id){
        $data=$this->find($id);
        $Days=unserialize($data->timing);
        return $Days;
    }
}
