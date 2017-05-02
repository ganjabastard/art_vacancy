@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Пользователи</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('users/create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить пользователя</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li @if($request->role == '') class="active" @endif>
                    <a href="{{ url('users') }}">Все пользователи</a>
                </li>
                @foreach($roles as $role)
                    <li @if($request->role == $role->id) class="active" @endif>
                        <a href="{{ url('users?role=' . $role->id) }}">{{ $role->display_name }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="row">
                        <div class="col-xs-6">
                            {{ Form::open(['url' => 'users', 'method' => 'GET']) }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="field-1">Имя, email</label>
                                <div class="col-sm-6">
                                    {{ Form::text('name', $request->name, ['class' => 'form-control', 'autocomplete' => false, 'placeholder' => "Имя, email"]) }}
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><span class="fa-search"></span> Поиск</button>
                                    </div>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>

                    <table class="table table-hover members-table middle-align">
                        <thead>
                        <tr>
                            <th class="hidden-xs hidden-sm"></th>
                            <th>Имя и роль</th>
                            <th class="hidden-xs hidden-sm">E-Mail</th>
                            <th>ID</th>
                            <th>Активность</th>
                            <th>Настройка</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td class="user-image hidden-xs hidden-sm">
                                    <a href="#">
                                        <img src="assets/images/user-1.png" class="img-circle" alt="user-pic" />
                                    </a>
                                </td>
                                <td class="user-name">
                                    <a href="#" class="name">{!! $user->name !!}</a>
                                    <span>{{ $user->Role()->display_name }}</span>
                                </td>
                                <td class="hidden-xs hidden-sm">
                                    <span class="email">{!! $user->email !!}</span>
                                </td>
                                <td class="user-id">
                                    {!! $user->id !!}
                                </td>
                                <td class="">
                                    @if($user->active == 1)
                                        <span class="badge badge-success badge-roundless upper">Активен</span>
                                    @else
                                        <span class="badge badge-red badge-roundless upper">Заблокирован</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{!! url('users/' . $user->id . '/edit') !!}" class="btn btn-sm btn-success">
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
                                <td colspan="6"><p class="text-center">По данному запросу результатов не найдено.</p></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6 text-right text-center-sm">
                            {{ $users->appends(['name' => $request->name, 'role' => $request->role])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection