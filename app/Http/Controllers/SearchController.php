<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Experience;
use Illuminate\Http\Request;

class SearchController extends Controller
{
        /////////////  الطلبات الأساسية/////////////
    ////////////////// Search By Name, Category //////////////////
    public function search(Request $request){
        $search = $request->input('search');
        $posts = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('Category', 'LIKE', "%{$search}%")
            ->get();
        return $posts;
    }
    public function detels(Request $request) {
        $detels = User::where('id', $request -> id)->get();
        return response()->json([
            'detels' => $detels,
        ], 200);
    }
}
