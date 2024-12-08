<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest()->get()
        ]);
    }

    public function show(Article $profession)
    {
        return view('articles.show', ['article' => $profession]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));
        return redirect(route('profession.index'));
    }

    public function edit(Article $profession)
    {
        return view('articles.edit', compact('profession'));
    }

    public function update(Article $profession, Request $request)
    {
        $profession->update($this->validateArticle($request));
        return redirect(route('profession.show', $profession));
    }

    public function destroy(Article $profession)
    {
        Article::findorfail($profession->id)->destroy($profession->id);
        return redirect(route('profession.index'));
    }

    /**
     * @return array
     */
    public function validateArticle($request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
