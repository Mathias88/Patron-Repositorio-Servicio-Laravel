<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StorePostRequest;
use App\Services\UploadImageService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PostCreateController extends PostController
{
    private $redirectTo = '/home';

    /**
     * @return View
     */
    public function create(): View
    {
        return view('post.create');
    }

    /**
     * @param StorePostRequest $request
     * @param UploadImageService $uploadService
     * @return Redirect
     */
    public function store(StorePostRequest $request, UploadImageService $uploadService): Redirect
    {
        if ($request->hasFile('image')) {
            $uploadService->upload($request->file('image'));
        }

        $this->repository->create($request->all());

        return redirect()->to($this->redirectTo);
    }
}
