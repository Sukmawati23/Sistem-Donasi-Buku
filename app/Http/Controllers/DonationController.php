<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::where('user_id', auth()->id())->get();
        return view('donations.index', compact('donations'));
    }

    public function create()
    {
        return view('donations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'pengarang' => 'nullable|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'deskripsi' => 'nullable|string',
        ]);

        Donation::create([
            'user_id' => auth()->id(),
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('donations.index')->with('success', 'Donasi berhasil ditambahkan.');
    }
}