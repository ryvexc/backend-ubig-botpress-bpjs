<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VirtualAccountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "nama_peserta" => $this->nama_peserta,
            "sejumlah" => $this->virtual_account->tagihan,
            "start_payment" => Carbon::now(),
            "end_payment" => Carbon::now()->addDays(16)
        ];
    }
}
