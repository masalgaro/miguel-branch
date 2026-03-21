<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use App\Models\InvoiceLine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    /**
     * INVOICE ATTRIBUTES
     * $this->attributes['id'] - int - contains the invoice primary key (id)
     * $this->attributes['date'] - string - contains the invoice date
     * $this->attributes['user_id'] - int - contains the associated user id
     * $this->attributes['office_id'] - int - contains the associated office id
     * $this->invoiceLines - InvoiceLine[] - contains the associated invoice lines
     * $this->user - User - contains the associated user
     * $this->office - Office - contains the associated office
     * $this->attributes['created_at'] - string - timestamp of creation
     * $this->attributes['updated_at'] - string - timestamp of last update
     */

    protected $fillable = ['date', 'user_id', 'office_id'];

    // Getters and Setters

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getDate(): string
    {
        return $this->attributes['date'];
    }

    public function setDate(string $date): void
    {
        $this->attributes['date'] = $date;
    }

    public function getUserId(): int
    {
        return $this->attributes['user_id'];
    }

    public function getOfficeId(): int
    {
        return $this->attributes['office_id'];
    }

    // Relations

    public function invoiceLines(): HasMany
    {
        return $this->hasMany(InvoiceLine::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
}