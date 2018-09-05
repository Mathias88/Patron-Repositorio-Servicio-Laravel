<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\View\View;


class PostController extends Controller
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $posts = $this->repository->all();
        $postMostViewed = $this->repository->getMostViewed();

        return view('post.index', compact('posts', 'postMostViewed'));
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return View
     */
    public function show(Post $post): View
    {
        return view('post.show', compact($post));
    }
}
