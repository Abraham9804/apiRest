<?php

namespace App\Http\Resources;
use App\Http\Resources\InvoiceResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;



class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
            'invoices' => InvoiceResource::collection($this->whenLoaded('invoices')),
        ];
    }
}
