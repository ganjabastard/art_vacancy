@extends('layouts.app')
@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Добавление пользвователя</h1>
            <p class="description">Добавление нового пользователя</p>
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
                    <strong>Добавление пользователя</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    {{ Form::open(['url' => 'users', 'method' => 'POST', 'class' => 'validate', "novalidate" => 'novalidate']) }}
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

                        </div>
                    </div>
                </div>

                <div class="member-form-inputs">
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('name', 'Имя', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <a href="#"><i class="fa-child"></i></a>
                                </div>
                            {{  Form::text('name', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Имя'])}}
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
                                {{  Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Email'])}}
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
                                {{  Form::text('phone', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Телефон', 'data-mask' => 'phone'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('birthdate', 'Дата рождения', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <a href="#"><i class="linecons-calendar"></i></a>
                                </div>
                                {{  Form::text('birthdate', null, ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Дата рождения'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('role', 'Роль', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            {{ Form::select('role', $roles, null, ['class' => 'select2']) }}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('active', 'Активность', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                            {{ Form::checkbox('active', 1, 1, ['class' => 'iswitch iswitch-secondary']) }}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            {{ Form::label('password', 'Пароль', ['class' => 'control-label']) }}
                        </div>
                        <div class="col-sm-9">
                                {{  Form::text('password', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Пароль'])}}
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
