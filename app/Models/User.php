<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    /**
     * USER ATTRIBUTES
     * $this->attributes['id'] - int - contains the user primary key
     * $this->attributes['national_id'] - int - contains the national ID
     * $this->attributes['first_name'] - string - contains the first name
     * $this->attributes['last_name'] - string - contains the last name
     * $this->attributes['role'] - string - contains the user role
     * $this->attributes['phone_number'] - int - contains the phone number
     * $this->attributes['birthday'] - string - contains the birthday
     * $this->attributes['address'] - string - contains the address
     * $this->attributes['created_at'] - string - contains the creation timestamp
     * $this->attributes['updated_at'] - string - contains the update timestamp
     * $this->savingsAccounts - SavingsAccount[] - contains the associated saving accounts
     */
    protected $fillable = ['national_id', 'first_name', 'last_name', 'role', 'phone_number', 'birthday', 'address'];

    /* Relationships */

    public function savingsAccounts(): HasMany
    {
        return $this->hasMany(SavingsAccount::class);
    }

    /* End Relationships */

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

    public function getSavingsAccounts(): Collection
    {
        return $this->savingsAccounts;
    }

    public function setSavingsAccounts(Collection $savingsAccounts): void
    {
        $this->savingsAccounts = $savingsAccounts;
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
