@extends('layouts.app')
@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Профиль</h1>
            <p class="description">Редактирование данных пользователя</p>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('users') }}">Пользователи</a>
                </li>
                <li class="active">
                    <strong>Профиль</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    {{ Form::open(['url' => 'clients/' . $client->id, 'method' => 'PUT', 'class' => 'validate', "novalidate" => 'novalidate']) }}
    {{ Form::hidden('id', $client->id) }}
        <div class="panel panel-headerless">
            <div class="panel-body">

                <div class="member-form-add-header">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 pull-right-sm">
                            <div class="action-buttons">
                                <button type="submit" class="btn btn-block btn-secondary"><span class="fa-save"></span> Сохранить</button>
                                <button type="reset" class="btn btn-block btn-gray"><span class="fa-refresh"></span> Сбоосить</button>
                            </div>

                        </div>
                        <div class="col-md-10 col-sm-8">

                            <div class="user-img">
                                <img src="{{ url('assets/images/user-4.png') }}" class="img-circle" alt="user-pic" />
                            </div>
                            <div class="user-name">
                                <a href="#">{{ $client->name }}</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="member-form-inputs">
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('firstName', 'Имя', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <a href="#"><i class="fa-child"></i></a>
                                </div>
                                {{  Form::text('firstName', $client->firstName, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Имя'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('middleName', 'Фамилия', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <a href="#"><i class="fa-child"></i></a>
                                </div>
                                {{  Form::text('middleName', $client->middleName, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Имя'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('lastName', 'Отчество', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <a href="#"><i class="fa-child"></i></a>
                                </div>
                                {{  Form::text('lastName', $client->lastName, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Имя'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('email', 'Email', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <a href="#"><i class="fa-envelope-o"></i></a>
                                </div>
                                {{  Form::text('email', $client->email, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Email'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('phone', 'Телефон', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <a href="#"><i class="fa-mobile-phone"></i></a>
                                </div>
                                {{  Form::text('phone', $client->phone, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Телефон', "data-mask" => "phone"]) }}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('code', 'ИНН', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            {{  Form::text('code', $client->code, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'ИНН'])}}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('birth_date', 'Дата рождения', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <a href="#"><i class="linecons-calendar"></i></a>
                                </div>
                                {{  Form::text('birth_date', $client->birth_date, ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Дата рождения', 'data-format' => 'yyyy-mm-dd'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('sex', 'Дата рождения', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="radio">
                                <label>
                                    {{ Form::radio('sex', 1, ($client->sex == 1 ? 1 : null)) }}
                                    Мужской
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    {{ Form::radio('sex', 0, ($client->sex == 0 ? 1 : null)) }}
                                    Женский
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('status', 'Активность', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            {{ Form::checkbox('status', 1, $client->status, ['class' => 'iswitch iswitch-secondary']) }}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('password', 'Пароль', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            {{  Form::text('password', null, ['class' => 'form-control', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Пароль'])}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/js/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/multiselect/css/multi-select.css') }}">
@endsection

@section('scripts')
    <script src="{{ url('assets/js/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('assets/js/select2/select2.min.js') }}"></script>
    <script src="{{ url('assets/js/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ url('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/js/inputmask/jquery.inputmask.bundle.js') }}"></script>
@endsection

