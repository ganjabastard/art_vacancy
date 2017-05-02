@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Добавление группы полей клиента</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('client_fields/groups') }}">Список групп полей клиента</a>
                </li>
                <li class="active">
                    <strong>Добавление прав доступа</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Добавление группы полей клиента
            </div>
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'client_fields/groups', 'method' => 'POST', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
                <div class="form-group">
                    {{ Form::label('name', 'Название группы', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('name', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Название группы'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('active', 'Активность', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{ Form::checkbox('active', 1, 1, ['class' => 'iswitch iswitch-secondary']) }}
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <a href="{{ url('client_fields/groups') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
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