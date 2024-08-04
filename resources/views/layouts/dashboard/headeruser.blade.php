<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>لوحة التحكم -أونلاين شوبنج</title>
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-337.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/font-awsome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/style2.css') }}">
</head>

<body>
  
@include('layouts.dashboard.sidebaruser')
<div class="content">
@yield('content')
</div>

<script src="{{ asset('/js/jquery-331.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap-337.min.js') }}"></script>
</body>
</html>