<?php

namespace App\Observers;

use App\Models\QrCode;
use Illuminate\Support\Str;

class QrCodeObserver
{
    /**
     * Handle the QrCode "creating" event.
     */
    public function creating(QrCode $qrCode): void
    {
        $url = 'https://fitagenda.com.br';
        $name = Str::slug($qrCode->name, '-');
        $qrCode->url = "$url/$name";
    }
}
