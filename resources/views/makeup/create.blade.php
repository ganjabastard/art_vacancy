@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Нова заявка на кредит</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('application') }}">Заявки</a>
                </li>
                <li class="active">
                    <strong>Нова заявка на кредит</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Нова заявка на кредит
            </div>
            {{--<small class="text-small pull-right" style="padding-top:5px;">--}}
            {{--<code>data-validate="rule1,rule2,...,ruleN"</code>--}}
            {{--</small>--}}
        </div>

        <div class="panel-body">
            <div class="col-xs-6">
            {{ Form::open(['url' => 'roles', 'method' => 'POST', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
                <div class="form-group">
                    {{ Form::label('display_name', 'Сума позики', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('display_name', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Сума позики'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('display_name', 'Термін', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('display_name', null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Термін'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('name', 'Кредитний продукт', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        <select name="" id=""  class="form-control">
                            <option value="">Кредитний продукт №1</option>
                            <option value="">Кредитний продукт №2</option>
                            <option value="">Кредитний продукт №3</option>
                            <option value="">Кредитний продукт №4</option>
                            <option value="">Кредитний продукт №5</option>
                        </select>
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
            <div class="col-sm-6">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Тіло позики</th>
                        <th>Відсотки</th>
                        <th>Процентна ставка</th>
                        <th>Комісія</th>
                        <th>Всього</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Arlind</td>
                        <td>Nushi</td>
                        <td>0,99%</td>
                        <td>0.00 грн.</td>
                        <td>1059.40 грн.</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Arlind</td>
                        <td>Nushi</td>
                        <td>0,99%</td>
                        <td>0.00 грн.</td>
                        <td>1059.40 грн.</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Arlind</td>
                        <td>Nushi</td>
                        <td>0,99%</td>
                        <td>0.00 грн.</td>
                        <td>1059.40 грн.</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ url('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
@endsection