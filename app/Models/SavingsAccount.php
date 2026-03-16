<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SavingsAccount extends Model
{
    /**
     * SAVINGS ACCOUNT ATTRIBUTES
     * $this->attributes['id'] - int
     * $this->attributes['type'] - string
     * $this->attributes['number'] - string
     * $this->attributes['expiration_date'] - date
     * $this->attributes['balance'] - int
     * $this->attributes['user_id'] - int
     * $this->attributes['created_at'] - timestamp
     * $this->attributes['updated_at'] - timestamp
     */
    protected $fillable = [
        'type',
        'number',
        'expiration_date',
        'balance',
        'user_id'
    ];

    /*Relationships*/

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }   

    /*end relationships*/

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getType(): string
    {
        return $this->attributes['type'];
    }

    public function setType(string $type): void
    {
        $this->attributes['type'] = $type;
    }

    public function getNumber(): string
    {
        return $this->attributes['number'];
    }

    public function setNumber(string $number): void
    {
        $this->attributes['number'] = $number;
    }

    public function getExpirationDate(): string
    {
        return $this->attributes['expiration_date'];
    }

    public function setExpirationDate(string $date): void
    {
        $this->attributes['expiration_date'] = $date;
    }

    public function getBalance(): int
    {
        return $this->attributes['balance'];
    }

    public function setBalance(int $balance): void
    {
        $this->attributes['balance'] = $balance;
    }

    public function getUserId(): int
    {
        return $this->attributes['user_id'];
    }

    public function setUserId(int $userId): void
    {
        $this->attributes['user_id'] = $userId;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }
}
