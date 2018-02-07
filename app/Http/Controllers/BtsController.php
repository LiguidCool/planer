<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bts;

// use App\Transformers\BtsTransformer;

class BtsController extends Controller
{
    public function index(Request $request)
    {
        $items = Bts::with(['details'])
            ->forPage(
                $request->page,
                5
            )
            ->get()
        ;
        return $items;
    }
}
