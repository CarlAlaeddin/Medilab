<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionDoctor extends Model
{
    use HasFactory;

    protected $table = 'position_doctor';

    protected $guarded = [];

    /**
     * Summary of getIsActiveAttribute
     * @param mixed $is_active
     * @return string
     */
    public function getIsActiveAttribute($is_active): string
    {
        return $is_active ? 'Active' : 'DeActive';
    }
}
