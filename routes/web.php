<?php

use App\Models\Katalog;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $katalogs = Katalog::all();
    return view('landingpage', compact("katalogs"));
})->name("home");

Route::get("/katalog/{id}", function(int $id) {
  $katalog = Katalog::where("id", $id)->first();
  return view("katalog", compact("katalog"));
})->name("katalog");

Route::get("/katalogs", function() {
  $katalogs = Katalog::all();
  return view("katalogs", compact("katalogs"));
})->name("katalogs");

Route::post("/katalog/{id}", function(Request $request, int $id) {
  $validated_data = $request->validate([
    "nama_pemesan" => ["string", "required"],
    "email_pemesan" => ["string", "required", "email:dns"],
    "no_telp" => ["string", "required"],
    "tanggal_acara" => ["date", "required"],
    "catatan" => ["string", "required"]
  ]);
  Pemesanan::create([
    "nama_pemesan" => $validated_data["nama_pemesan"],
    "email_pemesan" => $validated_data["email_pemesan"],
    "no_telp" => $validated_data["no_telp"],
    "tanggal_acara" => $validated_data["tanggal_acara"],
    "catatan" => $validated_data["catatan"],
    "status" => "request",
    "id_paket" => $id
  ]);
  return redirect()->back()->with('success', 'Pesanan berhasil dikirim!');
})->name("submit-pesanan");



Route::get("/tentang-kami", function() {
  return view("tentang-kami");
})->name("tentang-kami");