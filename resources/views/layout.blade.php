<!DOCTYPE html>
<html>
<head>
    <title>Hotel System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Hotel</a>
        <a href="/my-bookings" class="btn btn-light">My Bookings</a>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>