<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentTittle;
use App\Models\Contact;
use Illuminate\Http\Request;

class CommentTittleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment_tittle = CommentTittle::find(1);

        return View('dashboard.comment_tittle.index' ,compact('comment_tittle'));
    }


    public function comment()
    {
        $comments = Comment::orderBy('created_at','DESC') ->get();

        return View('dashboard.comment_tittle.comment' ,compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $comment_tittle = CommentTittle::find($id);

        return View('dashboard.comment_tittle.edit',compact('comment_tittle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $comment_tittle = CommentTittle::find($id);

        $request_data = $request->all();

        $comment_tittle->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.comment_tittle.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //
    }
}
