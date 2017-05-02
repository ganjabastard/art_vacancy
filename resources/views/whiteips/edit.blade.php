@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Редактирование IP адреса</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('whiteips') }}">Список IP адресов</a>
                </li>
                <li class="active">
                    <strong>Редактирование IP адреса</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Редактирование IP адреса
            </div>
            {{--<small class="text-small pull-right" style="padding-top:5px;">--}}
                {{--<code>data-validate="rule1,rule2,...,ruleN"</code>--}}
            {{--</small>--}}
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'whiteips/' . $ip->id, 'method' => 'PUT', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
            {{ Form::hidden('id', $ip->id) }}
                <div class="form-group">
                    {{ Form::label('ip', 'IP адрес', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('ip', long2ip($ip->ip), ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '127.0.0.1', 'data-mask' => '(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}', 'data-is-regex' => true])}}
                    </div>
                </div>
                <div class="form-group">
                        {{ Form::label('active', 'Активность', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{ Form::checkbox('active', 1, $ip->active, ['class' => 'iswitch iswitch-secondary']) }}
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
    <script src="{{ url('assets/js/inputmask/jquery.inputmask.bundle.js') }}"></script>
@endsection