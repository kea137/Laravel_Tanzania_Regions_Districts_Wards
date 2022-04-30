<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'id',
        'region_id',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function region(){
        return $this->hasOne(Region::class);
    }

    public function wards(){
        return $this->hasMany(Ward::class);
    }
}
