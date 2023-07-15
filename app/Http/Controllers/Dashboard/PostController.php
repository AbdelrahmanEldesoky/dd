<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();

        return View('dashboard.post.index' ,compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return View('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request_data = $request->all();
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('/home/u229183464/domains/bahar-app.com/public_html/b/front/img/' . $request->image->hashName());
              //  ->save('/home/u516457093/domains/w-wasabi.online/public_html/uploads/product_images/' . $request->image->hashName());
            $request_data['image'] = $request->image->hashName();

        }//end of if
        Post::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return View('dashboard.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $post = Post::find($id);

        return View('dashboard.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $post = Post::find($id);

        $request_data = $request->all();

        
        if ($request->image) {

            if ($post->image != 'default.png') {

                Storage::disk('public')->delete('/front/img/' . $post->image);

            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('/home/u229183464/domains/bahar-app.com/public_html/b/front/img/' . $request->image->hashName());
              //  ->save('/home/u516457093/domains/w-wasabi.online/public_html/uploads/product_images/' . $request->image->hashName());
            $request_data['image'] = $request->image->hashName();

        }//end of if
        $post->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $post = Post::find($id);
        $post->delete();
        
        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.post.index');
    }
}
