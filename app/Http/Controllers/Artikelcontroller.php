<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Artikelcontroller extends Controller
{

    public function index()
    {
        $articles = Article::where('user_id', Auth::user()->id)->get();
        return view('artikel.index', compact('articles'));
    }

    public function create()
    {
        return view('artikel.tambah');
    }

    public function store(Request $request)
    {

        // Simpan foto artikel
        $filename = time() . '.' . $request->file('foto')->getClientOriginalExtension();
        $path = storage_path('app/public/artikel');
        $request->file('foto')->move($path, $filename);

        Article::create([
            'user_id' => $request->user()->id,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'body' => $request->body,
            'sumber' => $request->sumber,
            'photo' => $filename
        ]);

        return redirect('/artikel')->with('status', 'Artikel berhasil ditambahkan!');
    }

    public function edit(string $slug)
    {

        $article = Article::where('slug', $slug)->first();
        return view('artikel.edit', compact('article'));
    }

    public function update(Request $request, string $slug)
    {
        $article = Article::where('slug', $slug)->first();

        $filename = $article->photo;
        if ($request->file('foto') != null) {
            $filename = time() . '.' . $request->file('foto')->getClientOriginalExtension();
            $path = storage_path('app/public/artikel');
            $request->file('foto')->move($path, $filename);

            // Delete old file
            Storage::disk('public')->delete('artikel/'.$article->photo);
        }

        $article->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'sumber' => $request->sumber,
            'body' => $request->body,
            'photo' => $filename
        ]);

        return redirect('/artikel')->with('status', 'Artikel berhasil diedit!');
    }

    public function destroy($id)
    {

        $article = Article::find($id);

        Storage::disk('public')->delete('artikel/'.$article->photo);

        $article->delete();
        return redirect('/artikel')->with('status', 'Artikel berhasil dihapus!');
    }


    //* USER BACA ARTIKEL 

    public function showArtikel() 
    {
        $data_artikel = Article::all();
        return view('bacaartikel.show-artikel', compact('data_artikel'));
    }

    public function detailArtikel(Request $request) 
    {
        $data_article = Article::find($request->id);
        return view('bacaartikel.detail-artikel', [
            'artikel' => $data_article
        ]);
    }

}
