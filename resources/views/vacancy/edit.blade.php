@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Редактирование вакансии</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('vacancy') }}">Список вакансий</a>
                </li>
                <li class="active">
                    <strong>Редактирование вакансии</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Редактирование вакансии
            </div>
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'vacancy/' . $vacancy->id, 'method' => 'PUT', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
            <br>
            <div class="form-group">
                {{ Form::label('title', 'Полное название вакансии', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::text('title', $vacancy->title, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Полное название вакансии'])}}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('description',  'Описание', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::textarea('description', $vacancy->description, ['class' => 'form-control', "placeholder" => 'Описание роли'])}}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('status', 'Статус', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    <select name="status" id="" class="form-control">
                        <option value="1" @if($vacancy->status == 1) selected @endif>Открыта</option>
                        <option value="2" @if($vacancy->status == 2) selected @endif>Ожидает</option>
                        <option value="3" @if($vacancy->status == 3) selected @endif>В работе</option>
                        <option value="3" @if($vacancy->status == 3) selected @endif>Закрыта</option>
                        <option value="0" @if($vacancy->status == 0) selected @endif>Отменена</option>
                    </select>
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('experience', 'Опыт', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::number('experience', $vacancy->experience, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Опыт'])}}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('active', 'Активен', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::checkbox('active', 1, (isset($vacancy->active) && $vacancy->active == 1 ? 1 : 0), ['class' => 'iswitch iswitch-secondary','data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Активен'])}}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="col-xs-12">
                <div class="form-group">
                    <a href="{{ url('vacancy') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
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