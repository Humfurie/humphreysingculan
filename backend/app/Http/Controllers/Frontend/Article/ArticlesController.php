<?php

namespace App\Http\Controllers\Frontend\Article;

use App\Http\Controllers\Controller;
use Domain\Posts\Models\Post;
use Domain\Posts\Requests\ArticleFormRequest;
use Illuminate\Http\JsonResponse;

class ArticlesController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::query()->get();
        return response()->json([
            'posts' => $posts
        ]);
    }

    public function store(ArticleFormRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Post Saved Successfully'
        ]);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json([
            'post' => $post,
        ]);
    }

    public function edit(Post $post): JsonResponse
    {
        return response()->json([
            'post' => $post,
        ]);
    }

    public function update(Post $post, ArticleFormRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Post Updated Successfully',
        ]);
    }

    public function delete(Post $post): JsonResponse
    {
        $post->delete();
        return response()->json([
            'message' => 'Post Deleted Successfully',
        ]);
    }

}
