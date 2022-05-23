<!DOCTYPE HTML>
<html>
	<head>
		<title>SUTUTSLRC</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('static/css/main.css') }}"/>
		<link rel="icon" href="{{ asset('static/images/sututslrc.png') }}">
	</head>
	<body class="landing is-preload">

        <div>
            {{$slot}}


		<!-- Scripts -->
			<script src="{{ asset('static/js/jquery.min.js') }}"></script>
			<script src="{{ asset('static/js/jquery.dropotron.min.js') }}"></script>
			<script src="{{ asset('static/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('static/js/browser.min.js') }}"></script>
			<script src="{{ asset('static/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('static/js/util.js') }}"></script>
			<script src="{{ asset('static/js/main.js') }}"></script>
        </div>
	</body>
</html>
