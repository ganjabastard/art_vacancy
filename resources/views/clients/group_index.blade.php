@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Группы полей клиента</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('client_fields/groups/create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить группу</a>
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
                        <th>Название роли</th>
                        <th>Активность</th>
                        <th>Настройка</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($groups as $group)
                        <tr>
                            <td class="user-name">
                                @translate($group->translate_id)
                            </td>
                            <td class="">
                                @if($group->active == 1)
                                    <span class="badge badge-success badge-roundless upper">Активен</span>
                                @else
                                    <span class="badge badge-red badge-roundless upper">Заблокирован</span>
                                @endif
                            </td>
                            <td class="action-links">
                                <a href="{!! url('client_fields/groups/' . $group->id . '/edit') !!}" class="edit">
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
                        {{ $groups->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

