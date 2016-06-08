@section('header')
<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<title>{{ isset($title) ? $title : '' }}</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="apple-touch-icon.png" rel="apple-touch-icon" type="image/png" />
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="favicon.ico" rel="icon" type="image/x-icon"  />
	<link rel="shortcut icon" href="/images/common/favicon.ico" />
	<style type="text/css">
	@font-face {
		font-family: ikamodoki;
		src: url('{{ asset('font/ikamodoki1_0.ttf') }}');
	}
	</style>
	<link rel="stylesheet" href="{{ asset('css/common.css') }}">
	@yield('addCss')
</head>
<body>
@endsection