@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Роли</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('roles/create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить роль</a>
        </div>
    </div>
@endsection
@section('content')
<div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#all" data-toggle="tab">Все роли</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="all">

                    <table class="table table-hover members-table middle-align">
                        <thead>
                        <tr>
                            <th>Роль</th>
                            <th class="hidden-xs hidden-sm">Описание</th>
                            <th>Ключ</th>
                            <th>Настройка</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($roles as $role)
                            <tr>
                                <td class="user-name">
                                    <a href="#" class="name">{!! $role->display_name !!}</a>
                                </td>
                                <td class="hidden-xs hidden-sm">
                                    <span class="email">{!! $role->description !!}</span>
                                </td>
                                <td class="user-id">
                                    {!! $role->name !!}
                                </td>
                                <td>
                                    <a href="{!! url('roles/' . $role->id . "/edit") !!}" class="btn btn-sm btn-success">
                                        <i class="linecons-pencil"></i>
                                        Редактировать
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
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
                                {{ $roles->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection