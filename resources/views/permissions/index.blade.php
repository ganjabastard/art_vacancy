@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Права доступа</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('permissions/create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить права доступа</a>
        </div>
    </div>
@endsection
@section('content')
<div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#all" data-toggle="tab">Все права доступа</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="all">

                    <table class="table table-hover members-table middle-align">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th class="hidden-xs hidden-sm">Описание</th>
                            <th>Ключ</th>
                            <th>Настройка</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($permissions as $permission)
                            <tr>
                                <td class="user-name">
                                    <a href="#" class="name">{!! $permission->display_name !!}</a>
                                </td>
                                <td class="hidden-xs hidden-sm">
                                    <span class="email">{!! $permission->description !!}</span>
                                </td>
                                <td class="user-id">
                                    {!! $permission->name !!}
                                </td>
                                <td class="action-links">
                                    <a href="{!! url('permissions/' . $permission->id . "/edit") !!}" class="edit">
                                        <i class="linecons-pencil"></i>
                                        Редактировать
                                    </a>
                                    <a href="#" class="delete">
                                        <i class="linecons-trash"></i>
                                        Удалить
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5"><p class="text-center">По данному запросу результатов не найдено.</p></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6 text-right text-center-sm">
                            <ul class="pagination pagination-sm no-margin">
                                {{ $permissions->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection