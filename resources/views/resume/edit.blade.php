@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Редактирование резюме</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('resume') }}">Список резюме</a>
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
                Редактирование резюме
            </div>
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'resume/' . $resume->id, 'method' => 'PUT', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
            <br>
            <div class="form-group">
                {{ Form::label('name', 'Имя', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::text('name', $resume->name, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Имя'])}}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('vacancy_id', 'Вакансия', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{ Form::select('vacancy_id', $vacancy, $resume->vacancy_id, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения']) }}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('description',  'Описание', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::textarea('description', $resume->description, ['class' => 'form-control', "placeholder" => 'Описание роли'])}}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('education', 'Образование', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    <select name="education" id="" class="form-control">
                        <option value="1" @if($resume->education == 1) selected @endif>Среднее</option>
                        <option value="2" @if($resume->education == 2) selected @endif>Высшие - специалист</option>
                        <option value="3" @if($resume->education == 3) selected @endif>Высшие - бакалавр</option>
                        <option value="4" @if($resume->education == 4) selected @endif>Высшие - магист</option>
                        <option value="0" @if($resume->education == 0) selected @endif>Безобразования</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('experience', 'Опыт работы в годах', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::number('experience', $resume->experience, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Опыт работы в годах'])}}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('university', 'Университет', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::text('university', $resume->university, ['class' => 'form-control', "placeholder" => 'Университет'])}}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('status', 'Статус', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    <select name="status" id="" class="form-control">
                        <option value="1" @if($resume->status == 1) selected @endif>Молодой</option>
                        <option value="2" @if($resume->status == 2) selected @endif>Мало знает</option>
                        <option value="3" @if($resume->status == 3) selected @endif>Надо подумать</option>
                        <option value="4" @if($resume->status == 4) selected @endif>Отличный человек</option>
                    </select>
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="form-group">
                {{ Form::label('birthday', 'Опыт работы в годах', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{  Form::text('birthday', \Carbon\Carbon::parse($resume->birthday)->format('Y-m-d'), ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Дата рождения', 'data-format' => 'yyyy-mm-dd'])}}
                </div>
            </div>
            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="col-xs-12">
                <div class="form-group">
                    <a href="{{ url('resume') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
                    <button type="reset" class="btn btn-gray"><span class="fa-refresh"></span> Сбросить</button>
                    <button type="submit" class="btn btn-success"><span class="fa-save"></span> Сохранить</button>
                    <a href="#"  onclick="jQuery('#modal-1').modal('show', {backdrop: 'fade'});" class="btn btn-danger"><span class="fa-bell"></span> Назначить собеседование</a>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>


    <!-- Modal 1 (Basic)-->
    <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(['url' => 'interview/create', 'method' => 'POST', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Назначить собеседования</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('birthday', 'Дата собеседования', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            {{  Form::text('birthday', \Carbon\Carbon::parse('tomorrow')->format('Y-m-d'), ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Дата собеседования', 'data-format' => 'yyyy-mm-dd'])}}
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control timepicker" data-template="dropdown" data-show-seconds="false" data-default-time="{{ Carbon\Carbon::now()->format('H:m') }}" data-show-meridian="false" data-minute-step="10" data-second-step="5">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-info">Сохранить</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ url('assets/js/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('assets/js/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/js/inputmask/jquery.inputmask.bundle.js') }}"></script>
@endsection