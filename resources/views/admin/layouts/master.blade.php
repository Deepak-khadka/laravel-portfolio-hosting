<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', config('app.name'))</title>

    @include('admin.layouts.partials.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('admin.layouts.partials.navbar')

    @include('admin.layouts.partials.menu')

    @yield('content')

    @include('admin.layouts.partials.footer')

</div>

@include('admin.layouts.partials.script')
</body>
</html>
