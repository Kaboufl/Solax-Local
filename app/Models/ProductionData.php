<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionData extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'production_datas';

    protected $fillable = [
        'yield_today',
        'grid_power',
        'grid_voltage',
        'grid_current',
        'grid_freq',
        'pv1_power',
        'pv1_voltage',
        'pv1_current',
        'pv2_power',
        'pv2_voltage',
        'pv2_current',
        'measured_at'
    ];


}
