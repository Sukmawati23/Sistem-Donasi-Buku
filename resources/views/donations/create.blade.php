@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-4">
    <h2 class="text-xl font-semibold mb-4">Form Donasi Buku</h2>

    <form method="POST" action="{{ route('donations.store') }}">
        @csrf

        <div class="mb-3">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-3">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="w-full border rounded p-2">
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="w-full border rounded p-2"></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Kirim Donasi</button>
    </form>
</div>
@endsection
