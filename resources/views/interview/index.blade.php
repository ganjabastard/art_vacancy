@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Список собеседований</h1>
            <p class="description">Список всех предстоящих собеседовний.</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="false" style="overflow-x:hidden!important;">
                <table class="table table-hover members-table middle-align">
                    <thead>
                    <tr>
                        <th data-priority="1">#</th>
                        <th data-priority="1">Вакансия</th>
                        <th data-priority="1">Имя</th>
                        <th data-priority="1">Автор</th>
                        <th data-priority="1">Дата</th>
                        <th data-priority="1">Статус</th>
                        <th data-priority="1">Настройка</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($interviews as $interview)
                        <tr>
                            <td class="user-name">
                                {!! $interview->id !!}
                            </td>
                            <td class="hidden-xs hidden-sm">
                                <a href="{{ url('vacancy/' . $interview->vacancy_id . "/edit") }}">{!! $interview->vacancy->title !!}</a>
                            </td>
                            <td>
                                <a href="{{ url('resume/' . $interview->resume_id . '/edit') }}">{{ $interview->resume->name }}</a>
                            </td>
                            <td>
                                {{ $interview->user->name }}
                            </td>
                            <td>
                                {{ $interview->date }}
                            </td>
                            <td class="">
                                @php
                                    switch($interview->status) {
                                        case 1: $status = 'Новая'; break;
                                        case 2: $status = 'Перенесли'; break;
                                        case 3: $status = 'Отказался'; break;
                                        case 4: $status = 'Не пришол'; break;
                                        case 5: $status = 'Возможно подходит'; break;
                                        case 6: $status = 'Успешно'; break;
                                        case 0: $status = 'Провалено'; break;
                                        default: $status = '';break;
                                    }
                                @endphp
                                {{ $status }}
                            </td>
                            <td>
                                <a href="{!! url('interview/' . $interview->id . '/edit') !!}" class="btn btn-sm btn-success">
                                    <i class="linecons-pencil"></i>
                                    Редактировать
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7"><p class="text-center">По данному запросу результатов не найдено.</p></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 text-right text-center-sm">
                    {{ $interviews->links() }}
                </div>
            </div>

        </div>
@endsection