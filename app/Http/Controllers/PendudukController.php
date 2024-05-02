<?php

namespace App\Http\Controllers;

use App\Http\Resources\PembayaranResource;
use App\Http\Resources\VirtualAccountResource;
use App\Models\Penduduk;
use App\Models\VirtualAccount;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function show(Request $request)
    {
        $request->validate([
            "nik" => "required",
            "tanggal_lahir" => "required"
        ]);

        $penduduk = Penduduk::all()->where("nik", $request->nik)->where("tanggal_lahir", $request->tanggal_lahir)->first();

        if (!$penduduk)
            return $this->ok(["message" => "Mohon diulangi lagi untuk inputan sahabat JKN, karena tidak sesuai dengan NIK atau Nomor Kartu yang terdaftar"]);

        return $this->ok($penduduk);
    }

    public function pembayaran(Request $request)
    {
        $request->validate([
            "nik" => "required",
            "tanggal_lahir" => "required"
        ]);

        $penduduk = Penduduk::all()->where("nik", $request->nik)->where("tanggal_lahir", $request->tanggal_lahir);

        if ($penduduk->count() == 0) return $this->ok(["status" => "Penduduk not found"]);

        return $this->ok(PembayaranResource::collection($penduduk)[0]);
    }

    public function virtualAccount(Request $request)
    {
        $request->validate([
            "nik" => "required",
            "tanggal_lahir" => "required",
            "nomor_handphone" => "required"
        ]);

        $penduduk = Penduduk::all()->where("nik", $request->nik)->where("tanggal_lahir", $request->tanggal_lahir)->where("nomor_handphone", $request->nomor_handphone);

        if ($penduduk->count() == 0) return $this->ok(["message" => "Nomor hp tidak sesuai"]);

        return $this->ok(VirtualAccountResource::collection($penduduk)[0]);
    }
}
