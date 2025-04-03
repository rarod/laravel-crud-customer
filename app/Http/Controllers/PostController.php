<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    // ... (index(), show(), destroy() permanecem iguais)
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:posts', // Validando email como único
            'telefone' => 'nullable|string|max:20', // Validando telefone (opcional)
            'image' => 'nullable|image|max:2048', // Max 2MB
        ]);

        $post = new Post();
        $post->nome = $request->nome;
        $post->email = $request->email;
        $post->telefone = $request->telefone;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:posts,email,'.$post->id, // Validando email único, exceto o email do próprio registro
            'telefone' => 'nullable|string|max:20',
            'image' => 'nullable|image|max:2048',
        ]);

        $post->nome = $request->nome;
        $post->email = $request->email;
        $post->telefone = $request->telefone;

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }
            $imagePath = $request->file('image')->store('posts', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

    // ... (destroy() permanece igual)
}