@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Кредитные продукты</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('product') }}">Кредитные продукты</a>
                </li>
                <li class="active">
                    <strong>Добавление кредитного продукта</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Добавление кредитного продукта
            </div>
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'product', 'method' => 'POST', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate', 'autocomplete' => 'off']) }}
            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <div class="form-group">
                        {{ Form::label('display_name', 'Название', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                            {{  Form::text('name', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => ''])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Описание', ['class' => 'control-label col-sm-2']) }}
                        <div class="col-sm-10">
                            {{  Form::textarea('description', null, ['class' => 'form-control', "placeholder" => '', 'rows' => 5])}}
                        </div>
                    </div>
                    <div class="row">
                        {{ Form::label('param_sum', 'Сумма', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[sum][min]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'минимальная', 'min' => 1, 'max' => 999999])}}
                                        <span class="input-group-addon">грн</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[sum][max]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'максимальная', 'min' => 1, 'max' => 999999])}}
                                        <span class="input-group-addon">грн</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{ Form::label('param_period', 'Период', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[period][min]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'минимальный', 'min' => 1, 'max' => 999])}}
                                        <span class="input-group-addon">дней</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[period][max]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'максимальный', 'min' => 1, 'max' => 999])}}
                                        <span class="input-group-addon">дней</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{ Form::label('param_postphone', 'Период отсрочки', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[postphone]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999])}}
                                        <span class="input-group-addon">дней</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{ Form::label('param_def', 'Льготный период', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[grace]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999999])}}
                                        <span class="input-group-addon">дней</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{ Form::label('param_def', 'Сумма авто списания', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[auto]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999999])}}
                                        <span class="input-group-addon">грн</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{ Form::label('param_interest', 'Процентная ставка', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[rate][interest]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999999])}}
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{ Form::label('param_def', 'Процентная ставка для просроченных заемов', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        {{  Form::number('param[rate][def]', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999999])}}
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('available', 'Доступен', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-2">
                            {{ Form::checkbox('available', 'yes', null, ['class' => 'iswitch iswitch-info']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('default', 'Доступен по-умолчанию', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-2">
                            {{ Form::checkbox('default', 'yes', null, ['class' => 'iswitch iswitch-blue']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('repeatable', 'Доступен только для повторников', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-2">
                            {{ Form::checkbox('repeatable', 'yes', null, ['class' => 'iswitch iswitch-turquoise']) }}
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
            <div class="col-xs-12">
                <div class="form-group">
                    <a href="{{ url('product') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
                    <button type="submit" class="btn btn-success"><span class="fa-save"></span> <b>Сохранить</b></button>
                </div>
            </div>

            {{ Form::close() }}

        </div>

    </div>
@endsection

@section('styles')
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }

        div {
            border: 0px solid silver;
        }

        label {
            border: 0px solid red;
        }
    </style>
@endsection

@section('scripts')
    <script src="{{ url('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
@endsection