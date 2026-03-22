<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    /**
     * INVOICE ATTRIBUTES
     * $this->attributes['id'] - int - contains the invoice primary key (id)
     * $this->attributes['date'] - string - contains the invoice date
     * $this->attributes['user_id'] - int - contains the associated user id
     * $this->attributes['office_id'] - int - contains the associated office id
     * $this->attributes['created_at'] - string - timestamp of creation
     * $this->attributes['updated_at'] - string - timestamp of last update
     * $this->invoiceLines - InvoiceLine[] - contains the associated invoice lines
     * $this->user - User - contains the associated user
     * $this->office - Office - contains the associated office
     */
    protected $fillable = ['date', 'user_id', 'office_id'];

    // Getters and Setters

    // Id

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    // Date

    public function getDate(): string
    {
        return $this->attributes['date'];
    }

    public function setDate(string $date): void
    {
        $this->attributes['date'] = $date;
    }

    // UserID

    public function getUserId(): int
    {
        return $this->attributes['user_id'];
    }

    public function setUserId(int $userId): void
    {
        $this->attributes['user_id'] = $userId;
    }

    // OfficeId

    public function getOfficeId(): int
    {
        return $this->attributes['office_id'];
    }

    public function setOfficeId(int $office_id): void
    {
        $this->attributes['office_id'] = $office_id;
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

    // Relations Getters and setters

    public function getInvoiceLines(): Collection
    {
        return $this->invoiceLines;
    }

    public function setInvoiceLines(Collection $invoiceLines): void
    {
        $this->invoiceLines = $invoiceLines;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getOffice(): Office
    {
        return $this->office;
    }

    public function setOffice(Office $office): void
    {
        $this->office = $office;
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
