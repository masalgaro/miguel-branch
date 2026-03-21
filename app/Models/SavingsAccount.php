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
     * $this->attributes['balance'] - int - contains the account balance
     * $this->attributes['user_id'] - int - contains the associated user foreign key
     * $this->attributes['created_at'] - string - contains the creation timestamp
     * $this->attributes['updated_at'] - string - contains the update timestamp
     * $this->user - User - contains the associated user
     */
    protected $fillable = ['type', 'balance', 'user_id'];

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

    public function setUserId(int $user_id): void
    {
        $this->attributes['user_id'] = $user_id;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user()->associate($user);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
