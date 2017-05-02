@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Добавление роли</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('roles') }}">Роли</a>
                </li>
                <li class="active">
                    <strong>Добавление роли</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Добавление роли
            </div>
            {{--<small class="text-small pull-right" style="padding-top:5px;">--}}
                {{--<code>data-validate="rule1,rule2,...,ruleN"</code>--}}
            {{--</small>--}}
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'roles', 'method' => 'POST', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
                <div class="form-group">
                    {{ Form::label('display_name', 'Полное название роли', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('display_name', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Полное название роли'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('name', 'Название роли (ключ)', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('name', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Название роли (ключ)'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('description', 'Описание роли', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::textarea('description', null, ['class' => 'form-control', "placeholder" => 'Описание роли'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('permission', 'Права доступа', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">

                        @forelse($permissions as $permission)
                            <div class="checkbox">
                                <label>
                                    {{ Form::checkbox('permissions[]', $permission->id) }}
                                    {{ $permission->display_name }}
                                </label>
                            </div>
                        @empty
                            <p>Нет прав доступа</p>
                        @endforelse
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <a href="{{ url('roles') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
                        <button type="reset" class="btn btn-gray"><span class="fa-refresh"></span> Сбросить</button>
                        <button type="submit" class="btn btn-success"><span class="fa-save"></span> Сохранить</button>
                    </div>
                </div>

            {{ Form::close() }}

        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ url('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
@endsection