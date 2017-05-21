@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Редактирование собеседования</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('interview') }}">Список собесежований</a>
                </li>
                <li class="active">
                    <strong>Редактирование резюме</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Редактирование собеседования
            </div>
        </div>

        <div class="panel-body">
            <div class="col-xs-12">
                {{ Form::open(['url' => 'interview/' . $interview->id, 'method' => 'PUT', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
                {{ Form::hidden('vacancy_id', $interview->vacancy_id) }}
                {{ Form::hidden('resume_id', $interview->resume_id) }}
                <br>
                <div class="form-group">
                    <p class="col-sm-2 control-label">Резюме</p>
                    <div class="col-sm-10">
                        <a href="{{ url('resume/' . $interview->resume_id .'/edit') }}">{{ $interview->resume->name }}</a>
                    </div>
                </div>
                <div class="form-group">
                    <p class="col-sm-2 control-label">Вакансия</p>
                    <div class="col-sm-10">
                        <a href="{{ url('vacancy/' . $interview->vacancy_id . '/edit') }}">{{ $interview->vacancy->title }}</a>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('date', 'Дата собеседования', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-5">
                        {{  Form::text('date', \Carbon\Carbon::parse($interview->date)->format('Y-m-d'), ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Дата собеседования', 'data-format' => 'yyyy-mm-dd'])}}
                    </div>
                    <div class="col-sm-5">
                        <input name="time" type="text" class="form-control timepicker" data-template="dropdown" data-show-seconds="false" data-default-time="{{ Carbon\Carbon::parse($interview->date)->format('H:i') }}" data-show-meridian="false" data-minute-step="10" data-second-step="5">
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('status', 'Статус', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        <select name="status" id="" class="form-control">
                            <option value="1" @if($interview->status == 1) selected @endif>Найденные</option>
                            <option value="2" @if($interview->status == 2) selected @endif>Тел. интервью</option>
                            <option value="3" @if($interview->status == 3) selected @endif>Тестовое задание</option>
                            <option value="4" @if($interview->status == 4) selected @endif>Собеседование</option>
                            <option value="5" @if($interview->status == 5) selected @endif>Собеседование в руководителем</option>
                            <option value="6" @if($interview->status == 6) selected @endif>Наш сотрудник</option>
                            <option value="0" @if($interview->status == 0) selected @endif>Отказ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('description',  'Описание', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::textarea('description', $interview->description, ['class' => 'form-control', "placeholder" => 'Описание роли'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <a href="{{ url('interview') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
                        <button type="reset" class="btn btn-gray"><span class="fa-refresh"></span> Сбросить</button>
                        <button type="submit" class="btn btn-success"><span class="fa-save"></span> Сохранить</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>


@endsection

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/fonts/elusive/css/elusive.css') }}">
@endsection

@section('scripts')
    <script src="{{ url('assets/js/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('assets/js/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/js/inputmask/jquery.inputmask.bundle.js') }}"></script>
@endsection