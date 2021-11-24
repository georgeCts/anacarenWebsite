<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Tag;
use App\Models\Post;
use App\Library\Errors;
use App\Models\Category;
use App\Library\Messages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Library\Returns\ActionReturn;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('panel.auth');
    }

    public function index() {
        $posts = Post::where('deleted', false)->orderBy('created_at', 'DESC')->get();
        return view('panel.contents.publicaciones.Index', ['posts' => $posts]);
    }

    public function create() {
        $categories = Category::where('deleted', 0)->get();
        $tags = Tag::where('deleted', 0)->get();

        return view('panel.contents.publicaciones.Create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function store(Request $request) {
        $objReturn = new ActionReturn('panel/publicaciones/crear', 'panel/publicaciones');

        if($request->file('image')) {
            $file       = $request->file('image');
            $extension  = $file->getClientOriginalExtension();
            $fileName   = time() . '_image_post.' . $extension;
            $url        = '/posts/' . $fileName;

            try {
                if($request->image->storeAs('posts', $fileName, 'public')) {
                    $objPost               = new Post();
                    $objPost->user_id      = Auth::user()->id;
                    $objPost->title        = $request['txtTitle'];
                    $objPost->slug         = $request['txtSlug'];
                    $objPost->excerpt      = $request['txtExcerpt'];
                    $objPost->body         = $request['txtBody'];
                    $objPost->status       = $request['rdEstatus'];
                    $objPost->category_id  = $request['cmbCategory'];
                    $objPost->highlight    = $request['rdHighlight'] == "false" ? false : true;
                    $objPost->file         = $url;
                    $objPost->save();

                    $objPost->tags()->attach($request->cmbTags);

                    $objReturn->setResult(true, Messages::POSTS_CREATE_TITLE, Messages::POSTS_CREATE_MESSAGE);
                } else {
                    $objReturn->setResult(false, Errors::POSTS_CREATE_02_TITLE, Errors::POSTS_CREATE_02_MESSAGE);
                }
            } catch(Exception $exception) {
                $objReturn->setResult(false, "Exception", $exception->getMessage());
            }
        } else {
            $objReturn->setResult(false, Errors::POSTS_CREATE_01_TITLE, Errors::POSTS_CREATE_01_MESSAGE);
        }

        return $objReturn->getRedirectPath();
    }

    public function edit($id) {
        $return = redirect('panel/publicaciones');
        $objPost = Post::where(['id' => $id, 'deleted' => false])->first();

        if(!is_null($objPost)) {
            $categories = Category::where('deleted', false)->get();
            $tags = Tag::where('deleted', false)->get();

            $return = view('panel.contents.publicaciones.Edit', ['objPost' => $objPost, 'categories' => $categories, 'tags' => $tags]);
        }

        return $return;
    }

    public function update(Request $request) {
        $objPost = Post::find($request['hddIdPost']);
        $objReturn = new ActionReturn('panel/publicaciones/editar/'.$request['hddIdPost'], 'panel/publicaciones');

        if(!is_null($objPost)) {

            $objPost->user_id      = Auth::user()->id;
            $objPost->title        = $request['txtTitle'];
            $objPost->slug         = $request['txtSlug'];
            $objPost->excerpt      = $request['txtExcerpt'];
            $objPost->body         = $request['txtBody'];
            $objPost->status       = $request['rdEstatus'];
            $objPost->category_id  = $request['cmbCategory'];
            $objPost->highlight    = $request['rdHighlight'] == "false" ? false : true;

            //CARGA LA IMAGEN DEL POST
            if($request->file('image')) {
                Storage::delete($objPost->file);
                $file       = $request->file('image');
                $extension  = $file->getClientOriginalExtension();
                $fileName   = time() . '_image_post.' . $extension;
                $url        = '/posts/' . $fileName;
                $request->image->storeAs('posts', $fileName, 'public');
                //Storage::disk('public')->put($url, $request->file('image'));

                $objPost->file = $url;
            }

            try {
                if($objPost->update()) {
                    $objPost->tags()->sync($request->cmbTags);
                    $objReturn->setResult(true, Messages::POSTS_EDIT_TITLE, Messages::POSTS_EDIT_MESSAGE);
                } else {
                    $objReturn->setResult(false, Errors::POSTS_EDIT_02_TITLE, Errors::POSTS_EDIT_02_MESSAGE);
                }
            } catch(Exception $exception) {
                $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
            }
        }
        else {
            $objReturn->setResult(false, Errors::POSTS_EDIT_01_TITLE, Errors::POSTS_EDIT_01_MESSAGE);
        }

        return $objReturn->getRedirectPath();
    }

    public function delete($id) {
        $objReturn  = new ActionReturn('panel/publicaciones', 'panel/publicaciones');
        $objPost = Post::where(['id' => $id, 'deleted' => false])->first();

        if(!is_null($objPost)) {
            $objPost->deleted = 1;
            $objPost->save();

            $objReturn->setResult(true, Messages::POSTS_DELETE_TITLE, Messages::POSTS_DELETE_MESSAGE);
        } else {
            $objReturn->setResult(false, Errors::POSTS_DELETE_01_TITLE, Errors::POSTS_DELETE_01_MESSAGE);
        }

        return $objReturn->getRedirectPath();
    }
}
