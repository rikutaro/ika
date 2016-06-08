<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

class BukiRouletteController extends Controller
{
	//
	public function index()
    {
		$files = Storage::files('img/buki_low');
		shuffle($files);
		return view('buki', [
			'title' => 'ブキルーレット',
			'names' => $files,
		]);
    }
}
