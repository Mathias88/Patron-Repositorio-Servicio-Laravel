<?php

namespace App\Http\Controllers\Post;


use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PostEditController extends PostController
{
    /**
     * * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return View
     */
    public function edit(Post $post): View
    {
        return view('post.edit', compact($post));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param Post $post
     * @return Redirect
     */
    public function update(UpdatePostRequest $request, Post $post): Redirect
    {
        $this->repository->update($request->all(), $post->id);

        redirect()->to('post.show', compact($post));
    }
}
