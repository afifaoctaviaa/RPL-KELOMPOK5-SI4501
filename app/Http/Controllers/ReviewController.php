<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        // Hitung jumlah total ulasan
        $totalReviews = $reviews->count();

        // Hitung rata-rata skor ulasan
        $averageRating = $reviews->avg('rating');

        // Hitung jumlah ulasan untuk setiap skor
        $ratingsCount = Review::selectRaw('rating, count(*) as count')
                              ->groupBy('rating')
                              ->pluck('count', 'rating')
                              ->all();

        // Mengirimkan semua variabel ke tampilan
        return view('reviews.index', [
            'reviews' => $reviews,
            'totalReviews' => $totalReviews,
            'averageRating' => $averageRating,
            'ratingsCount' => $ratingsCount,
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'nullable|string|max:255',
        ]);

        // Simpan ulasan baru ke basis data
        $review = new Review();
        $review->user_id = auth()->user()->id; // Asumsi pengguna sudah terautentikasi
        $review->rating = $validatedData['rating'];
        $review->comment = $validatedData['comment'];
        $review->save();

        return redirect()->route('reviews.index')->with('success', 'Ulasan berhasil disimpan.');
    }
}