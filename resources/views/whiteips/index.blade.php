@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Белый список IP адерсов</h1>
            <p class="description">Список IP ардесов которым разрешен вход в админ панель.</p>
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('whiteips/create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить IP</a>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#all" data-toggle="tab">Список IP адресов</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="all">

                    <table class="table table-hover members-table middle-align">
                        <thead>
                        <tr>
                            <th>IP</th>
                            <th>Активность</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($ips as $ip)
                            <tr>
                                <td>{{ long2ip($ip->ip) }}</td>
                                <td>
                                    @if($ip->active == 1)
                                        <span class="badge badge-success badge-roundless upper">Включен</span>
                                    @else
                                        <span class="badge badge-red badge-roundless upper">Выключен</span>
                                    @endif
                                </td>
                                <td class="action-links">
                                    <a href="{!! url('whiteips/' . $ip->id . "/edit") !!}" class="edit">
                                        <i class="linecons-pencil"></i>
                                        Редактировать
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">По данному запросу записей не найдено.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
