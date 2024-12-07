@extends('layouts.app')

@section('content')
    <h1>Full Calendar</h1>

    <!-- Kontener FullCalendar -->
    <div id="calendar"></div>

    <!-- Wstawianie skryptów -->
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script> <!-- Moment.js dla FullCalendar -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.js"></script> <!-- FullCalendar -->

        <script>
            $(document).ready(function () {
                // Inicjalizacja FullCalendar
                $('#calendar').fullCalendar({

                });
            });
        </script>
    @endpush
@endsection
