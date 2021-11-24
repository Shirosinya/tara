<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/sukucadang/setujui/pengajuan',
        '/sukucadang/tolak/pengajuan',
        '/sukucadang/setujui/realisasi',
        '/sukucadang/tolak/realisasi',
    ];
}
