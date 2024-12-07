<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna z Kalendarzem</title>

    <!-- Import Bootstrap CSS z CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Import FullCalendar CSS z CDN -->
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet">

    <style>
        /* Prosty styl dla kalendarza */
        #calendar {
            max-width: 900px;
            margin: 40px auto;
        }
    </style>
</head>
<body>
<!-- Nawigacja -->
@include('layouts.nav.primaty_top_nav')
<!-- Treść strony -->
<div class="container mt-5">
  @yield('content')
</div>

<!-- Import Bootstrap JS z CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Import FullCalendar JS z CDN -->
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction/main.js"></script>
@stack('scripts')

</body>
</html>
