<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
	public function index()
	{
		$title = "";

		if (request('category')) {
			$category = Category::firstWhere('slug', request('category'));
			$title = " in $category->name";
		}

		if (request('user')) {
			$user = User::firstWhere('username', request('user'));
			$title = " by $user->name";
		}

		return view('posts', [
			"title" => "All Posts $title",
			'active' => 'blog',
			"posts" => Post::latest()
				->filters(request(['search', 'category', 'user']))
				->paginate(6)
				->withQueryString()
		]);
	}

	public function show(Post $post)
	{
		return view('post', [
			"title" => "Judul Post",
			'active' => 'blog',
			"post" => $post
		]);
	}



	public function test(Request $request)
	{
		return Post::latest()->get();
	}
}
