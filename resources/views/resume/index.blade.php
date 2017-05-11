@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Список резюму</h1>
            <p class="description">Список всех резюму.</p>
        </div>
        <div class="breadcrumb-env">
            <a href="http://vacancy.local/resume/create" class="btn btn-success"><span class="fa-plus"></span> Добавить резюму</a>
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
                    <th data-priority="1">Имя</th>
                    <th data-priority="1">Вакансия</th>
                    <th data-priority="1">Возраста</th>
                    <th data-priority="1">Опыт</th>
                    <th data-priority="1">Статус</th>
                    <th data-priority="1">Настройка</th>
                </tr>
                </thead>
                <tbody>
                @forelse($resumes as $resume)
                    <tr>
                        <td class="user-name">
                            <a href="#" class="name">{!! $resume->title !!}</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="email"><a href="{{ url('vacancy/' . $resume->vacancy_id . "/edit") }}">{!! $vacancy->vacancy_id !!}</a></span>
                        </td>
                        <td class="user-id">
                            {!! $vacancy->birthday !!}
                        </td>
                        <td>
                            {{ $vacancy->experience }}
                        </td>
                        <td class="">
                           @php
                                switch($vacancy->status) {
                                    case 1: $status = 'Молодой'; break;
                                    case 2: $status = 'Мало знает'; break;
                                    case 3: $status = 'Надо подумать'; break;
                                    case 4: $status = 'Отличный человек'; break;
                                }
                           @endphp
                            {{ $status }}
                        </td>
                        <td>
                            <a href="{!! url('resume/' . $resume->id . '/edit') !!}" class="btn btn-sm btn-success">
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
                {{ $resumes->links() }}
            </div>
        </div>

    </div>
@endsection