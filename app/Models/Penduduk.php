<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = "penduduk";
    protected $with = ["virtual_account"];

    public function virtual_account()
    {
        return $this->belongsTo(VirtualAccount::class, "virtual_account_id", "id");
    }
}
