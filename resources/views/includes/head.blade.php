<meta charset="utf-8" />
<title>GSI | @yield('title')</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
<link href="/assets/plugins/ionicons/css/ionicons.css" rel="stylesheet" />
<link href="/assets/css/bundle.css" rel="stylesheet" />
<link href="/assets/css/default/style.min.css" rel="stylesheet" />
<link href="/assets/css/default/style-responsive.min.css" rel="stylesheet" />
<link href="/assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
<link href="/assets/plugins/datatables/css/dataTables.bootstrap4.css" rel="stylesheet" />
<link href="/assets/plugins/datatables/css/buttons/buttons.bootstrap4.css" rel="stylesheet" />
<link href="/assets/plugins/datatables/css/responsive/responsive.bootstrap4.css" rel="stylesheet" />
<link href="/assets/plugins/flag-icon/css/flag-icon.css" rel="stylesheet">
<link href="/css/gsi.css" rel="stylesheet">
<!-- ================== END BASE CSS STYLE ================== -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="/assets/plugins/pace/pace.min.js"></script>
<!-- ================== END BASE JS ================== -->

@stack('css')
