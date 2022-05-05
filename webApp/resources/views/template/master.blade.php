<html>
<head>
  <title>
    @yield('title')
  </title>

  <link rel="stylesheet" href="{{asset("css/sign.css")}}">
  <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap-grid.min.css")}}">

</head>
<body>
  <div><h1>@yield('heading')</h1></div>
  <div>@yield('content')</div>
</body>
</html>