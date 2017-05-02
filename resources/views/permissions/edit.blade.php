@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Редактирование права доступа</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('permissions') }}">Список прав доступа</a>
                </li>
                <li class="active">
                    <strong>Редактирование роли</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Редактирование права доступа
            </div>
            {{--<small class="text-small pull-right" style="padding-top:5px;">--}}
                {{--<code>data-validate="rule1,rule2,...,ruleN"</code>--}}
            {{--</small>--}}
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'permissions/' . $permission->id, 'method' => 'PUT', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
            {{ Form::hidden('id', $permission->id) }}
                <div class="form-group">
                    {{ Form::label('display_name', 'Полное название права доступа', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('display_name', $permission->display_name, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Полное название права роли'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('name', 'Название права роли (ключ)', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('name', $permission->name, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Название права роли (ключ)'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('description', 'Описание права роли', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::textarea('description', $permission->description, ['class' => 'form-control', "placeholder" => 'Описание права роли'])}}
                    </div>
                </div>

                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <a href="{{ url('permission') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
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