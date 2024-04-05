<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css")}}">


</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ navigation menu ] start -->
    @include('admin.layouts.side-menu')

	<!-- [ Header ] start -->
    @include('admin.layouts.topbar')


    {{-- main content --}}

    @yield('main-content')

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/pcoded.js')}}"></script>

</body>
</html>
