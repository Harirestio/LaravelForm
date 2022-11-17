<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function read()
    {
        $model_post=new Post;
        $data=$model_post->all();
        //echo "<pre>";
        return view('read',['data'=>$data]);
    }

    public function edit($id)
    {   
        $model_post=new Post;
        $data=$model_post->all();
        //echo "<pre>";
        return view('edit', ['data' =>$data]);
    }
    public function delete()
    {
        $model_post=new Post;
        $data=$model_post->all();
        //echo "<pre>";
        return view('delete', ['id'=>$id]);
    }
    
    public function destroy($id)
    {
        $model_post = Post::find($id);
        $data=$model_post->delete();
        //echo "<pre>";
        return redirect('/read')->with('status', 'Blog Post Form Data Has Been deleted');
    }
}