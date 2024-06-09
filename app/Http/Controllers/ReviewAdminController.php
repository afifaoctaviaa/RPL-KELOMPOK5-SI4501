<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review; // Import model Review

class ReviewAdminController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        $averageRating = $reviews->avg('rating');
        $ratingsCount = Review::selectRaw('rating, count(*) as count')
                              ->groupBy('rating')
                              ->pluck('count', 'rating')
                              ->all();

        return view('admin.reviews.index', compact('reviews', 'averageRating', 'ratingsCount'));
    }

    public function destroy($id)
    {
        $review = Review::find($id);

        if ($review) {
            $review->delete();
        }

        return redirect()->route('admin.reviews.index')->with('success', 'Ulasan Berhasil Dihapus');
    }
}

