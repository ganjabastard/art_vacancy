@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Вакансии</h1>
            <p class="description">Список всех вакансий.</p>
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('/vacancy/create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить вакасию</a>
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
                    <th data-priority="1">Название</th>
                    <th data-priority="1">Автор</th>
                    <th data-priority="1">Дата</th>
                    <th data-priority="1">Опыт</th>
                    <th data-priority="1">Статус</th>
                    <th data-priority="1">Настройка</th>
                </tr>
                </thead>
                <tbody>
                @forelse($vacancys as $vacancy)
                    <tr>
                        <td class="user-name">
                            <a href="#" class="name">{!! $vacancy->title !!}</a>
                        </td>
                        <td class="hidden-xs hidden-sm">
                            <span class="email"><a href="{{ url('users/' . $vacancy->user_id . "/edit") }}">{!! $vacancy->user->name !!}</a></span>
                        </td>
                        <td class="user-id">
                            {!! $vacancy->updated_at !!}
                        </td>
                        <td>
                            {{ $vacancy->experience }}
                        </td>
                        <td class="">
                           @php
                                switch($vacancy->status) {
                                    case 1: $status = 'Открыта'; break;
                                    case 2: $status = 'Ожидает'; break;
                                    case 3: $status = 'В работе'; break;
                                    case 4: $status = 'Закрыта'; break;
                                    case 0: $status = 'Окончена'; break;
                                    default: $status = ''; break;
                                }
                           @endphp
                            {{ $status }}
                        </td>
                        <td>
                            <a href="{!! url('vacancy/' . $vacancy->id . '/edit') !!}" class="btn btn-sm btn-success">
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
                {{ $vacancys->links() }}
            </div>
        </div>
        </div>
    </div>
@endsection