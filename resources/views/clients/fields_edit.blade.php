@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Редактирование поля</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('client_fields/types') }}">Список полей клиента</a>
                </li>
                <li class="active">
                    <strong>Редактирование поля</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Редактирование поля
            </div>
        </div>

        <div class="panel-body">
            {{ Form::open(['url' => 'client_fields/types/' . $field->id , 'method' => 'PUT', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
                <div class="form-group">
                    {{ Form::label('name', 'Название поля', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{  Form::text('name', Helper::getLang($field->translate_id), ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Название поля'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('active', 'Активность', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        {{ Form::checkbox('active', 1, ($field->active == 1 ? 1 : 0), ['class' => 'iswitch iswitch-secondary']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('group', 'Группа', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        <select name="group_id" id="group" placeholder="Группа" class="form-control col-sm-10">
                            @foreach($groups as $group)
                                <option value="{{ $group->id }}" @if($group->id == $field->group_id) selected @endif>@translate($group->translate_id)</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('type_id', 'Тип', ['class' => 'control-label col-sm-2']) }}
                    <div class="col-sm-10">
                        <div class="radio">
                            <label>
                                {{ Form::radio('type_id', 1, ($field->type_id == 1 ? 1 : 0)) }}
                                Текст
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                {{ Form::radio('type_id', 2, ($field->type_id == 2 ? 1 : 0)) }}
                                Дата
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                {{ Form::radio('type_id', 3, ($field->type_id == 3 ? 1 : 0)) }}
                                Число
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                {{ Form::radio('type_id', 4, ($field->type_id == 4 ? 1 : 0)) }}
                                Выбор (select)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group" data-type="4">
                    {{ Form::label('values', 'Значения', ['class' => 'control-label col-sm-2']) }}
                    <div class="notes-env col-sm-10">
                        <div class="notes-header">
                            <a class="btn btn-secondary btn-icon btn-icon-standalone" id="add-note">
                                <i class="fa-pencil"></i>
                                <span>Добавить значение</span>
                            </a>
                        </div>
                        <div class="notes-list">
                            <ul class="list-of-notes">
                                @if($field->field->count() > 0)
                                    @foreach ($field->field as $f)
                                        <li class="current"> <!-- class "current" will set as current note on Write Pad -->
                                                <span>
                                                    <input type="text" name="values[]" class="form-control" value="@translate($f->translate_id)">
                                                </span>
                                            <button class="note-close">&times;</button>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <a href="{{ url('client_fields/types') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
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
    <script src="{{ url('assets/js/xenon-notes.js') }}"></script>
    <script>
        $(document).ready(function(){
            function toogleValues() {
                console.log('11');
                _val = $("[name=type_id]:checked").val();
                $('[data-type]').hide();
                $('[data-type='+_val+']').show();
            }
            $('[name=type_id]').on('change', function(){
                toogleValues();
            });
            toogleValues();
        })
    </script>
@endsection