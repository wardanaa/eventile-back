<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'address', 'image', 'ticket_price', 'ticket_remaining', 'published_at', 'date', 'slug'];

    protected $casts = ['date' => 'datetime'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            $event->slug = Str::slug($event->name);
        });
    }

    public function attachImage($image)
    {
        $filename = $image->store('public');
        $this->update(['image'=>$filename]);
    }

    public function updateImage($image)
    {
        if ($image !== null) {
        }
    }

    public function getDateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M, Y');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'product');
    }
}
