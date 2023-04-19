<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Local extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'location', 'image', 'user_id', 'count'];

    // filter products
    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }
        $query->when($filters['location'] ?? null, function ($query, $location) {
            if ($location === 'all') {
                null;
            } else {
                $query->where('location', 'like', '%' . request('location') . '%');
            }
        });
    }


    // relationship to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }
}
