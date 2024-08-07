@extends('layouts.appsitefr')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <p>Histoire sur nous</p>
    </section>
    <!-- /Hero Section -->
    <div id="calendar"></div>
    <div id="calendar"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [{
                        //title: 'Événement 1',
                        // start: '2024-08-01'
                    },
                    {
                        // title: 'Événement 2',
                        // start: '2024-08-07',
                        //  end: '2024-08-10'
                    }
                ]
            });

            calendar.render();
        });
    </script>
@endsection
