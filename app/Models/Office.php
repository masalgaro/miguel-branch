<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    /**
     * OFFICE ATTRIBUTES
     * $this->attributes['id'] - int - contains the office primary key (id)
     * $this->attributes['name'] - string - contains the office name
     * $this->attributes['address'] - string - contains the address of the office
     * $this->attributes['manager_name'] - string - contains the name of the office manager name
     * $this->attributes['created_at'] - string - timestamp of creation
     * $this->attributes['updated_at'] - string - timestamp of last update
     * $this->phones - Phones[] - contain the associated phones
     */
    protected $fillable = ['name', 'address', 'manager_name'];

    // Getters y Setters

    // Id

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    // Name

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    // Address

    public function getAddress(): string
    {
        return $this->attributes['address'];
    }

    public function setAddress(string $address): void
    {
        $this->attributes['address'] = $address;
    }

    // Manager Name

    public function getManagerName(): string
    {
        return $this->attributes['manager_name'];
    }

    public function setManagerName(string $manager_name): void
    {
        $this->attributes['manager_name'] = $manager_name;
    }

    // CreatedAt

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    // UpdatedAt

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }

    // Relations

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }
}
