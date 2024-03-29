<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Iluminate\Support\Facades\Storage;
use DB; //use sql queries
class PostsController extends Controller
{
     /**
     * Create a new controller instance dont allow guest to create post but see post.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts=Post::all();
        //$posts=Post::where('title','post2')->get();
        //sql $posts=DB::select('SELECT * FROM posts');
        
        $posts=Post::orderBy('title','asc')->paginate(1);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required','body'=>'required',
            'cover_image'=>'image|nullable|max:1999'  //image=jpeg,gif,jpg  nullable=optional size in kb
        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
           //get filename with extension
           $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
           //get just filename
           $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
           //get extension
           $extension = $request->file('cover_image')->getClientOriginalExtension();
           $fileNameToStore= $filename.'_'.time().'.'.$extension;
           //upload image
           $path= $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
          
        //create post
        $post=new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->user_id=auth()->user()->id;
        $post->cover_image= $fileNameToStore;
        $post->save();
        return redirect('/posts')->with('success','Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Model post
        $post=Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        //check user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        else return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required','body'=>'required'
        ]);
        //handle file upload
        if($request->hasFile('cover_image')){
            //get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //upload image
            $path= $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
         }
        //create post
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();
        return redirect('/posts')->with('success','Post updated');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        //check user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        
        if($post->cover_image != 'noimage.jpg'){
            Stoarge::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success','Post Deleted');
        
    }
}
