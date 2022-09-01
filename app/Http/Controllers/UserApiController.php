<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function get_bookmarks($user_id)
    {
        $bookmarks = Bookmarks::where('user_id', $user_id)->get();
        return response()->json($bookmarks);
    }
}
