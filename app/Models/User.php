<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    /**
     * USER ATTRIBUTES
     * $this->attributes['id'] - int
     * $this->attributes['national_id'] - int
     * $this->attributes['first_name'] - string
     * $this->attributes['last_name'] - string
     * $this->attributes['role'] - string
     * $this->attributes['phone_number'] - int
     * $this->attributes['birthday'] - date
     * $this->attributes['address'] - string
     * $this->attributes['created_at'] - timestamp
     * $this->attributes['updated_at'] - timestamp
     */

    protected $fillable = [
        'national_id',
        'first_name',
        'last_name',
        'role',
        'phone_number',
        'birthday',
        'address'
    ];

    /*Relationships*/

    public function savingsAccounts(): HasMany
    {
        return $this->hasMany(SavingsAccount::class);
    }
    
    /*
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function consultPurchaseHistory()
    {
        return $this->invoices;
    }
    */
    
    /*end Relationships*/

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getNationalId(): int
    {
        return $this->attributes['national_id'];
    }

    public function setNationalId(int $nationalId): void
    {
        $this->attributes['national_id'] = $nationalId;
    }

    public function getFirstName(): string
    {
        return $this->attributes['first_name'];
    }

    public function setFirstName(string $firstName): void
    {
        $this->attributes['first_name'] = $firstName;
    }

    public function getLastName(): string
    {
        return $this->attributes['last_name'];
    }

    public function setLastName(string $lastName): void
    {
        $this->attributes['last_name'] = $lastName;
    }

    public function getRole(): string
    {
        return $this->attributes['role'];
    }

    public function setRole(string $role): void
    {
        $this->attributes['role'] = $role;
    }

    public function getPhoneNumber(): int
    {
        return $this->attributes['phone_number'];
    }

    public function setPhoneNumber(int $phoneNumber): void
    {
        $this->attributes['phone_number'] = $phoneNumber;
    }

    public function getBirthday(): string
    {
        return $this->attributes['birthday'];
    }

    public function setBirthday(string $birthday): void
    {
        $this->attributes['birthday'] = $birthday;
    }

    public function getAddress(): string
    {
        return $this->attributes['address'];
    }

    public function setAddress(string $address): void
    {
        $this->attributes['address'] = $address;
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