<?php

namespace App\Models;

use App\Enums\DepositStatus;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class)->orderBy('created_at', 'desc');
    }

    public function getBalanceAttribute(): float
    {
         return $this->deposits->where('status', DepositStatus::APPROVED)->sum('amount') - $this->orders->sum('price');
//        return 100.0;
    }
}
