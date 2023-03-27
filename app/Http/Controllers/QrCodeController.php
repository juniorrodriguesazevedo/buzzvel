<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use App\Http\Requests\QrCodeRequest;

class QrCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('qrcode.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QrCodeRequest $request)
    {
        $data = $request->validated();
        $qrCode = QrCode::create($data);

        return redirect()->route('qrcode.show', compact('qrCode'));
    }

    /**
     * Display the specified resource.
     */
    public function show(QrCode $qrCode)
    {
        return view('qrcode.show', compact('qrCode'));
    }

    public function profile(string $name)
    {
        $qrCode = QrCode::firstWhere('name', $name);

        return view('qrcode.profile', compact('qrCode'));
    }
}
