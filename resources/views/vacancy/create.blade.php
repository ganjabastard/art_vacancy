@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Добавление вакансии</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('roles') }}">Список вакансий</a>
                </li>
                <li class="active">
                    <strong>Добавление вакансии</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Добавление вакансии
            </div>
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'vacancy', 'method' => 'POST', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
            <br>
                <div class="form-group">
                    {{ Form::label('title', 'Полное название вакансии', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('title', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Полное название вакансии'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('description',  'Описание', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::textarea('description', null, ['class' => 'form-control', "placeholder" => 'Описание роли'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('status', 'Статус', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        <select name="status" id="" class="form-control">
                            <option value="1">Новая</option>
                            <option value="2">Горячая</option>
                            <option value="3">Постоянно</option>
                            <option value="0">Окончена</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('experience', 'Опыт', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::number('experience', 0, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Опыт'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('age_start', 'Возраст', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-5">
                        {{  Form::number('age_start', 0, ['class' => 'form-control', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Возраст от'])}}
                    </div>
                    <div class="col-sm-5">
                        {{  Form::number('age_end', 0, ['class' => 'form-control', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Возраст до'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('active', 'Активен', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::checkbox('active', 1, 1, ['class' => 'iswitch iswitch-secondary',  "placeholder" => 'Активен'])}}
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