<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TypeRouletteController extends Controller
{
	//
	public function index()
    {
		$names = array(
			'blaster.jpg',
			'charger.jpg',
			'roller.jpg',
			'shooter.jpg',
			'slosher.jpg',
			'splatling.jpg',
			'fude.jpg',
		);
		shuffle($names);
		return view('type', [
			'title' => 'ブキタイプルーレット',
			'names' => $names,
		]);
    }
}
