<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SavingsAccount extends Model
{
    /**
     * SAVINGS ACCOUNT ATTRIBUTES
     * $this->attributes['id'] - int - contains the savings account primary key
     * $this->attributes['type'] - string - contains the account type
     * $this->attributes['number'] - string - contains the account number
     * $this->attributes['expiration_date'] - string - contains the expiration date
     * $this->attributes['balance'] - int - contains the account balance
     * $this->attributes['user_id'] - int - contains the associated user foreign key
     * $this->attributes['created_at'] - string - contains the creation timestamp
     * $this->attributes['updated_at'] - string - contains the update timestamp
     * $this->user - User - contains the associated user
     */
    protected $fillable = ['type', 'number', 'expiration_date', 'balance', 'user_id'];

    /* Relationships */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /* End relationships */

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

    public function setExpirationDate(string $expirationDate): void
    {
        $this->attributes['expiration_date'] = $expirationDate;
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

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user()->associate($user);
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
