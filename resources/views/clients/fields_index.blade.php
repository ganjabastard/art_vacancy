@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Поля клиента</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('client_fields/types/create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить поле</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table class="table table-border table-hover members-table middle-align">
                    <thead>
                    <tr>
                        <th>Название поля</th>
                        <th>Группа</th>
                        <th>Тип</th>
                        <th>Активность</th>
                        <th>Настройка</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($fields as $field)
                        <tr>
                            <td class="user-name">
                                @translate($field->translate_id)
                            </td>
                            <td>@translate($field->group->translate_id)</td>
                            <td>
                                @if($field->type_id == 1) Текст @endif
                                @if($field->type_id == 2) Дата @endif
                                @if($field->type_id == 3) Число @endif
                                @if($field->type_id == 4) Выбор (select) @endif
                            </td>
                            <td class="">
                                @if($field->active == 1)
                                    <span class="badge badge-success badge-roundless upper">Активен</span>
                                @else
                                    <span class="badge badge-red badge-roundless upper">Заблокирован</span>
                                @endif
                            </td>
                            <td class="action-links">
                                <a href="{!! url('client_fields/types/' . $field->id . '/edit') !!}" class="edit">
                                    <i class="linecons-pencil"></i>
                                    Редактировать
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6"><p class="text-center">По данному запросу результатов не найдено.</p></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right text-center-sm">
                        {{ $fields->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

