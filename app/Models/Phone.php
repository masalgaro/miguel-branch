<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Phone extends Model
{
    /**
     * PHONE ATTRIBUTES

     * $this->attributes['id'] - int - contains the phone primary key (id)

     * $this->attributes['name'] - string - contains the phone name

     * $this->attributes['memory'] - string - contains the phone memory. It also includes the unit of measure. For example kb, mb, gb, etc.

     * $this->attributes['ram'] - string - contains the phone ram. It also includes the unit of measure. For example kb, mb, gb, etc.

     * $this->attributes['battery'] - string - contains the phone battery. It also includes the unit of measure. For example mAh, etc.

     * $this->attributes['brand'] - string - contains the phone brand. For example Samsumg, Apple, Xiaomi, etc.

     * $this->attributes['quantity'] - integer - contains the number of phones in that store.
     */
    protected $fillable = ['name', 'memory', 'ram', 'battery', 'brand', 'quantity'];

    // Id

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
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

    // Memory

    public function getMemory(): string
    {
        return $this->attributes['memory'];
    }

    public function setMemory(string $memory): void
    {
        $this->attributes['memory'] = $memory;
    }

    // Ram

    public function getRam(): string
    {
        return $this->attributes['ram'];
    }

    public function setRam(string $ram): void
    {
        $this->attributes['ram'] = $ram;
    }

    // Battery

    public function getBattery(): string
    {
        return $this->attributes['battery'];
    }

    public function setBattery(string $battery): void
    {
        $this->attributes['battery'] = $battery;
    }

    // Brand

    public function getBrand(): string
    {
        return $this->attributes['brand'];
    }

    public function setBrand(string $brand): void
    {
        $this->attributes['brand'] = $brand;
    }

    // Quantity

    public function getQuantity(): int
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity(int $quantity): void
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
