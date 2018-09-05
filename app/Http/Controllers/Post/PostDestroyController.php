<?php

namespace App\Http\Controllers\Post;


use App\Models\Post;
use Illuminate\Support\Facades\Redirect;

class PostDestroyController extends PostController
{
    private $redirectTo = '/';

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPostRequest $request
     * @param Post $post
     * @return Redirect
     */
    public function destroy(Post $post): Redirect
    {
        $this->repository->delete($post->id);

        return redirect()->to($this->redirectTo);
    }
}
