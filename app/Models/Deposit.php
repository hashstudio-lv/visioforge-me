<?php

namespace App\Models;

use App\Enums\DepositStatus;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasUuid;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAmountByCurrencyExchangeRateAttribute()
    {
        return $this->amount * $this->exchange_rate;
    }

    protected function casts(): array
    {
        return [
            'status' => DepositStatus::class
        ];
    }
}
