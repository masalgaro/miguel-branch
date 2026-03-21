<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\SavingsAccount;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    /**
     * USER ATTRIBUTES
     * $this->attributes['id'] - int - contains the user primary key
     * Default laravel fields
     * $this->attributes['name'] - string - contains the name
     * $this->attributes['email'] - string - contains the email
     * $this->attributes['email_verified_at'] - string|null - contains the timestamp of when the email was verified
     * $this->attributes['password'] - string - contains the password
     * $this->attributes['remember_token'] - string|null - stores the token used for "remember me" sessions
     * End of default laravel fields
     * $this->attributes['national_id'] - string - contains the national ID
     * $this->attributes['first_name'] - string - contains the first name
     * $this->attributes['last_name'] - string - contains the last name
     * $this->attributes['role'] - string - contains the user role
     * $this->attributes['phone_number'] - string - contains the phone number
     * $this->attributes['birthday'] - string - contains the birthday
     * $this->attributes['address'] - string - contains the address
     * $this->attributes['created_at'] - string - contains the creation timestamp
     * $this->attributes['updated_at'] - string - contains the update timestamp
     * $this->invoices - Invoice[] - contains the associated invoices
     * $this->savingsAccounts - SavingsAccount[] - contains the associated saving accounts
    */

    protected $fillable = ['name','email','password','national_id','first_name','last_name','role','phone_number','birthday','address'];

    // Getters and Setters

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getEmail(): string
    {
        return $this->attributes['email'];
    }

    public function setEmail(string $email): void
    {
        $this->attributes['email'] = $email;
    }

    public function getEmailVerifiedAt(): ?string
    {
        return $this->attributes['email_verified_at'];
    }

    public function setEmailVerifiedAt(?string $email_verified_at): void
    {
        $this->attributes['email_verified_at'] = $email_verified_at;
    }

    public function getPassword(): string
    {
        return $this->attributes['password'];
    }

    public function setPassword(string $password): void
    {
        $this->attributes['password'] = $password;
    }

    public function getRememberToken(): ?string
    {
        return $this->attributes['remember_token'];
    }

    public function setRememberToken(?string $remember_token): void
    {
        $this->attributes['remember_token'] = $remember_token;
    }

    public function getNationalId(): string
    {
        return $this->attributes['national_id'];
    }

    public function setNationalId(string $national_id): void
    {
        $this->attributes['national_id'] = $national_id;
    }

    public function getFirstName(): string
    {
        return $this->attributes['first_name'];
    }

    public function setFirstName(string $first_name): void
    {
        $this->attributes['first_name'] = $first_name;
    }

    public function getLastName(): string
    {
        return $this->attributes['last_name'];
    }

    public function setLastName(string $last_name): void
    {
        $this->attributes['last_name'] = $last_name;
    }

    public function getRole(): string
    {
        return $this->attributes['role'];
    }

    public function setRole(string $role): void
    {
        $this->attributes['role'] = $role;
    }

    public function getPhoneNumber(): string
    {
        return $this->attributes['phone_number'];
    }

    public function setPhoneNumber(string $phone_number): void
    {
        $this->attributes['phone_number'] = $phone_number;
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

    // Relations

    public function savingsAccounts(): HasMany
    {
        return $this->hasMany(SavingsAccount::class);
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    // Relations Getters

    public function getSavingsAccounts(): Collection
    {
        return $this->savingsAccounts;
    }

    public function getInvoices(): Collection
    {
        return $this->invoices;
    }
}