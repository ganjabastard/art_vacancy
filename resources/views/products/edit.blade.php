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
                    <strong>Редактирование кредитного продукта</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    {{ Form::open(['url' => 'product/'.$product->id, 'method' => 'PUT', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate', 'autocomplete' => 'off']) }}
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#all" data-toggle="tab">Кредитный продукт</a>
            </li>
            <li>
                <a href="#promocodes" data-toggle="tab">Промокоды ({{ $product->promocode->count() }})</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="all">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">

                        <div class="form-group">
                            {{ Form::label('display_name', 'Название', ['class' => 'control-label col-sm-2']) }}
                            <div class="col-sm-10">
                                {{  Form::text('name', $product->name, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => ''])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', 'Описание', ['class' => 'control-label col-sm-2']) }}
                            <div class="col-sm-10">
                                {{  Form::textarea('description', $product->description, ['class' => 'form-control', "placeholder" => '', 'rows' => 5])}}
                            </div>
                        </div>
                        <div class="row">
                            {{ Form::label('param_sum', 'Сумма', ['class' => 'control-label col-sm-4']) }}
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            {{  Form::number('param[sum][min]', $product->params['sum']['min'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'минимальная', 'min' => 1, 'max' => 999999])}}
                                            <span class="input-group-addon">грн</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            {{  Form::number('param[sum][max]', $product->params['sum']['max'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'максимальная', 'min' => 1, 'max' => 999999])}}
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
                                            {{  Form::number('param[period][min]', $product->params['period']['min'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'минимальный', 'min' => 1, 'max' => 999])}}
                                            <span class="input-group-addon">дней</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            {{  Form::number('param[period][max]', $product->params['period']['max'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'максимальный', 'min' => 1, 'max' => 999])}}
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
                                            {{  Form::number('param[postphone]', $product->params['postphone'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999])}}
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
                                            {{  Form::number('param[grace]', $product->params['grace'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999999])}}
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
                                            {{  Form::number('param[auto]', $product->params['auto'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999999])}}
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
                                            {{  Form::number('param[rate][interest]', $product->params['rate']['interest'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999999])}}
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
                                            {{  Form::number('param[rate][def]', $product->params['rate']['def'], ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'min' => 0, 'max' => 999999])}}
                                            <span class="input-group-addon">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('available', 'Доступен', ['class' => 'control-label col-sm-4']) }}
                            <div class="col-sm-2">
                                {{ Form::checkbox('available', 'yes', $product->available, ['class' => 'iswitch iswitch-info']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('default', 'Доступен по-умолчанию', ['class' => 'control-label col-sm-4']) }}
                            <div class="col-sm-2">
                                {{ Form::checkbox('default', 'yes', $product->default, ['class' => 'iswitch iswitch-blue']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('repeatable', 'Доступен только для повторников', ['class' => 'control-label col-sm-4']) }}
                            <div class="col-sm-2">
                                {{ Form::checkbox('repeatable', 'yes', $product->repeatable, ['class' => 'iswitch iswitch-turquoise']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="promocodes">
                <table class="table table-hover members-table middle-align">
                    <thead>
                    <tr>
                        <th>Промокод</th>
                        <th>Партнерская компания</th>
                        <th>Описнаие</th>
                        <th width="170px">Дата активации</th>
                        <th width="170px">Дата окончания</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($product->promocode as $code)

                        <tr>
                            <td>
                                {{ Form::text('code['.$code->id.'][code]', $code->code, ['class' => 'form-control']) }}
                            </td>
                            <td>
                                {{ Form::text('code['.$code->id.'][company]', $code->company, ['class' => 'form-control']) }}
                            </td>
                            <td>
                                {{ Form::text('code['.$code->id.'][description]', $code->description, ['class' => 'form-control']) }}
                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <a href="#"><i class="linecons-calendar"></i></a>
                                    </div>
                                    {{  Form::text('code['.$code->id.'][start]', $code->start, ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'data-format' => 'yyyy-mm-dd'])}}
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <a href="#"><i class="linecons-calendar"></i></a>
                                    </div>
                                    {{  Form::text('code['.$code->id.'][end]', $code->end, ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'data-format' => 'yyyy-mm-dd'])}}
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                {{ Form::text('code[new][code]', null, ['class' => 'form-control']) }}
                            </td>
                            <td>
                                {{ Form::text('code[new][company]', null, ['class' => 'form-control']) }}
                            </td>
                            <td>
                                {{ Form::text('code[new][description]', null, ['class' => 'form-control']) }}
                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <a href="#"><i class="linecons-calendar"></i></a>
                                    </div>
                                    {{  Form::text('code[new][start]', Carbon::now()->toDateString(), ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'data-format' => 'yyyy-mm-dd'])}}
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <a href="#"><i class="linecons-calendar"></i></a>
                                    </div>
                                    {{  Form::text('code[new][end]', Carbon::now()->toDateString(), ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => '', 'data-format' => 'yyyy-mm-dd'])}}
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <a href="{{ url('product') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
                        <button type="submit" class="btn btn-success"><span class="fa-save"></span> <b>Сохранить</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ Form::close() }}

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
    <script src="{{ url('assets/js/datepicker/bootstrap-datepicker.js') }}"></script>
@endsection