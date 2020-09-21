<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function index()
    {
        $lists = DB::table('lists')->get();

        return $lists->map(function ($list) {
            return [
                'id' => $list->id,
                'content' => $list->content
            ];
        });
    }
}
