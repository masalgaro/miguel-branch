<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    /**
     * OFFICE ATTRIBUTES
     * $this->attributes['id'] - int - contains the office primary key (id)
     * $this->attributes['name'] - string - contains the office name
     * $this->attributes['address'] - string - contains the address of the office
     * $this->attributes['manager_name'] - string - contains the name of the office manager name
     */
    protected $fillable = ['name', 'address', 'manager_name'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getAddress(): string
    {
        return $this->attributes['address'];
    }

    public function setAddress(string $address): void
    {
        $this->attributes['address'] = $address;
    }

    public function getManagerName(): string
    {
        return $this->attributes['manager_name'];
    }

    public function setManagerName(string $manager_name): void
    {
        $this->attributes['manager_name'] = $manager_name;
    }
}
