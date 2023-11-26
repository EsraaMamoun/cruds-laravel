<?php

namespace App\Http\Resources\V1;

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
            "id"=> $this->id,
            "name"=> $this->name,
            "email"=> $this->email,
            "type"=> $this->type,
            "city"=> $this->city,
            "address"=> $this->address,
            "state"=> $this->state,
            "postal_code"=> $this->postal_code,
            "invoices"=> $this->invoices,
        ];
    }
}
