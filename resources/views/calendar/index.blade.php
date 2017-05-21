@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Календарь собеседований</h1>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li class="active">
                    <strong>Календарь собеседований</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<script type="text/javascript">
    // Calendar Initialization
    jQuery(document).ready(function()
    {
        // Calendar Initialization
        $('#calendar').fullCalendar({
            header: {
                left: 'title',
                center: '',
                right: 'month,agendaWeek,agendaDay prev,next'
            },
            buttonIcons: {
                prev: 'prev fa-angle-left',
                next: 'next fa-angle-right',
            },
            defaultDate: '{{ \Carbon\Carbon::now()->format('Y-m-d') }}',
            editable: false,
            eventLimit: true,
            events: [
                @foreach($interview as $i)
                {
                    id: '{{ $i->id }}',
                    title: '{{ $i->vacancy->title }}',
                    start: '{{ \Carbon\Carbon::parse($i->date)->format('Y-m-d H:i:s') }}',
                    url: '{{ url('interview/' . $i->id . '/edit') }}',
                    end: '{{ \Carbon\Carbon::parse($i->date)->addHour()->format('Y-m-d H:i:s') }}'
                },
                @endforeach
            ],
            droppable: true,
            drop: function(date) {
                var $event = $(this).find('a'),
                    eventObject = {
                        title: $event.find('.badge').text(),
                        start: date,
                        className: $event.data('event-class')
                    };
                $('#calendar').fullCalendar('renderEvent', eventObject, true);
                // Remove event from list
                $(this).remove();
            }
        });
    });
</script>

<section class="calendar-env">
    <div class="col-sm-12 calendar-right">
        <div class="calendar-main">
            <div id="calendar"></div>
        </div>
    </div>
</section>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/js/fullcalendar/fullcalendar.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
@endsection
