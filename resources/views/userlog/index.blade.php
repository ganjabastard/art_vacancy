@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Протокол работы пользователей</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li class="active">
                    <strong>Лог</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <h3 class="panel-title">Протокол работы пользователей</h3>
                    <div class="panel-options">

                    </div>
                </div>
                <div class="panel-body panel-border">
                    <div class="row">
                        <div class="col-xs-6">
                            {{ Form::open(['url' => 'user_logs', 'method' => 'GET']) }}
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="field-1">Пользователи</label>
                                    <div class="col-sm-6">
                                        <select name="user" class="form-control" id="" placeholder="Выберите пользователя" data-active="{{ $request->user }}">
                                            <option value="">Все пользователи</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}" @if($user->id == $request->user) selected @endif>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><span class="fa-filter"></span> Фильтровать</button>
                                        </div>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="col-xs-2">Дата</th>
                                    <th class="col-xs-3">Пользователь</th>
                                    <th>Описание</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($logs as $log)
                                        <tr>
                                            <td>{{ $log->updated_at }}</td>
                                            <td><a href="{{ url('users/' . $log->user->id. "/edit") }}">{{ $log->user->name }}</a></td>
                                            <td>{{ $log->description }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3"><p class="text-center">По данному запросу результатов не найдено.</p></td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6 text-right text-center-sm">
                            {{ $logs->appends(['user' => $request->user])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
