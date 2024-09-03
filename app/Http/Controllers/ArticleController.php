<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        return view('admin.articles.create', compact('categories'));
    }

    public function store(StoreArticleRequest $request)
    {
        // dd($request);
        $validatedData = ($request->validated());
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('articles', 'public');
            // $validated['foto']$img_url = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        }
        $validatedData['author_id'] = Auth::user()->id;
        Article::create($validatedData);
        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();

        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $validatedData = ($request->validated());

        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $validatedData['image'] = $request->file('image')->store('articles', 'public');
        }
        $article->update($validatedData);
        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
