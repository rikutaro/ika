@extends('common.layout')
@section('addCss')
	<link rel="stylesheet" href="{{ asset('css/type.css') }}">
@endsection
@include('common.header')
@section('content')
	<header>
		<h1 class="ikamodoki">
		ブキ タイプ ルーレット
		</h1>
		<div class="ikamodoki desc">
		ゼン 9 シュ から ランダム に センタク!<br>
		ページ を コウシン すると ジュンバン が いれかわるぞ!
		</div>
	</header>
	<section>
		<div class="roulette_container" >
		<div class="roulette" style="display:none;">
			@foreach ($names as $name)
			<img src="{{ asset('img/type/'. $name) }}" width="250" height="250"/>
			@endforeach
		</div>
		</div>
		<div class="btn_container">
			<p><button class="start ikamodoki">
				スタート！
			</button>
			<button class="stop ikamodoki" style="display:none;">
				ストップ！
			</button></p>
		</div>
		<p>
		{!! link_to(
			'/',
			'ブキ ルーレット -',
			['class' => 'link ikamodoki']
		); !!}
		</p>
	</section>
@endsection
@section('addJs')
	<script src="{{ asset('js/type.js') }}"></script>
	<script src="{{ asset('js/libs/roulette.js') }}"></script>
@endsection
@include('common.footer')