<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'location'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }
        $query->when($filters['location'] ?? false, function ($query, $location) {

            if ($location === 'all') {
                dd('akam');
            } else {
                $query->where('location', 'like', '%' . request('location') . '%');
            }
        });
    }
}
