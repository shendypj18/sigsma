<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
class Sekolah extends Model
{
    protected $table='sekolah';
    use Rateable;
    public function datatahunan()
    {
        return $this->hasOne('App\DataTahunan','sekolah_id');
    }
}
