<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'size',
        'status',
        'price_per_hour',
    ];

    // Relation avec les locations de vélos
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    // Relation avec les opérations de maintenance
    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
