<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = [
        'id',
    ];

    protected $appends = ['raw_fee'];

    // Activity log
    use LogsActivity;
    protected static $logAttributes = ['*'];
    // protected static $logOnlyDirty = true;
    // protected static $ignoreChangedAttributes = [];
    protected static $logAttributesToIgnore = ['created_at', 'updated_at'];
    protected static $submitEmptyLogs = false;

    public function setFeeAttribute($value)
    {
        $this->attributes['fee'] = $value / 100;
    }

    public function getFeeAttribute($value)
    {
        return $value * 100;
    }

    public function getRawFeeAttribute()
    {
        return $this->getRawOriginal('fee');
    }

    public function tickets()
    {
        return $this->hasMany(Models\Ticket::class);
    }

    public function invoices()
    {
        return $this->hasMany(Models\Invoice::class);
    }
}
