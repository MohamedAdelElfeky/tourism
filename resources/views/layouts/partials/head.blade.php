<base href="" />
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="" />
<link rel="canonical" href="" />
<meta property="og:url" content="/" />
<meta property="og:site_name" content="/" />
<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Vendor Stylesheets(used for this page only)-->
{{-- <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> --}}
{{-- <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> --}}
<!--end::Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
{{-- <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" /> --}}
{{-- <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" /> --}}
<!--end::Global Stylesheets Bundle-->
{{-- @if (auth()->user()->language == 'en') --}}
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<!--LTR-->
{{-- <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}
{{-- <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}
{{-- <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
type="text/css" /> --}}
<!--end::Global Stylesheets Bundle-->
{{-- @else --}}
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<!--RTL-->
<link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet"
    type="text/css" />
<!--end::Global Stylesheets Bundle-->
{{-- @endif --}}
@yield('css')
