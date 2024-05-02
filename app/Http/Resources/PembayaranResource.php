<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PembayaranResource extends JsonResource
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
            "tagihan" => $this->virtual_account->tagihan,
            "status_pembayaran" => ($this->virtual_account->tagihan == 0 ? "LUNAS" : "BELUM LUNAS")
        ];
    }
}
