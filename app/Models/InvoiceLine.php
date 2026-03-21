<?php

namespace App\Models;

use App\Models\Phone;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceLine extends Model
{
    /**
     * INVOICE LINE ATTRIBUTES
     * $this->attributes['id'] - int - contains the invoice line primary key (id)
     * $this->attributes['unit_price'] - float - contains the unit price of the phone
     * $this->attributes['discount'] - float - contains the discount applied
     * $this->attributes['quantity'] - int - contains the quantity of phones
     * $this->attributes['reason'] - string - contains the reason for discount
     * $this->attributes['invoice_id'] - int - contains the associated invoice id
     * $this->attributes['phone_id'] - int - contains the associated phone id
     * $this->attributes['created_at'] - string - timestamp of creation
     * $this->attributes['updated_at'] - string - timestamp of last update
     * $this->phone - Phone - contains the associated Phone
     */
    protected $fillable = ['unit_price', 'discount', 'quantity', 'reason', 'phone_id' , 'invoice_id'];

    // Getters and Setters

    // Id

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    // Unit Price

    public function getUnitPrice(): float
    {
        return (float) $this->attributes['unit_price'];
    }

    public function setUnitPrice(float $unitPrice): void
    {
        $this->attributes['unit_price'] = $unitPrice;
    }

    // Discount

    public function getDiscount(): float
    {
        return (float) $this->attributes['discount'];
    }

    public function setDiscount(float $discount): void
    {
        $this->attributes['discount'] = $discount;
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

    // Reason

    public function getReason(): ?string
    {
        return $this->attributes['reason'];
    }

    public function setReason(?string $reason): void
    {
        $this->attributes['reason'] = $reason;
    }

    // Phone Id

    public function getPhoneId(): int
    {
        return $this->attributes['phone_id'];
    }

    public function setPhoneId(int $phoneId): void
    {
        $this->attributes['phone_id'] = $phoneId;
    }

    // Invoice Id

    public function getInvoiceId(): int
    {
        return $this->attributes['invoice_id'];
    }

    public function setInvoiceId(int $invoiceId): void
    {
        $this->attributes['invoice_id'] = $invoiceId;
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

    public function phone(): BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}