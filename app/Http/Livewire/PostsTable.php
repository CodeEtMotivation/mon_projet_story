<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\Post;
use Livewire\Component;

class PostsTable extends Component
{
    public string $search= "";

    public function render()
    {
        return view('livewire.posts-table',[
            'posts' => Post::all(),
            'userLikes' => Like::orderBy('id', 'desc')->take(5)->get()
        ]);
    }
}
