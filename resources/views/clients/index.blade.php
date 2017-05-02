@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Пользователи</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li class="active">
                    <strong>Клиенты</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#">Все пользователи</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="row">
                        <div class="col-xs-6">
                            {{ Form::open(['url' => 'clients', 'method' => 'GET']) }}
                            <div class="form-group">
                                <div class="col-sm-6">
                                    {{ Form::text('name', $request->name, ['class' => 'form-control', 'autocomplete' => false, 'placeholder' => "Имя, email, телефон"]) }}
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><span class="fa-search"></span> Поиск</button>
                                    </div>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <div class="row">
                    <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="false" style="overflow-x:hidden!important;">
                    <table class="table table-hover members-table middle-align">
                        <thead>
                        <tr>
                            <th data-priority="1" class="hidden-xs hidden-sm"> </th>
                            <th data-priority="1">ФИО</th>
                            <th data-priority="1" class="hidden-xs hidden-sm">E-Mail</th>
                            <th data-priority="1">Телефон</th>
                            <th data-priority="0">Активность</th>
                            <th data-priority="1">Настройка</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($clients as $client)
                            <tr>
                                <td class="user-image hidden-xs hidden-sm">
                                    <a href="#">
                                        <img src="assets/images/user-1.png" class="img-circle" alt="user-pic" />
                                    </a>
                                </td>
                                <td class="user-name">
                                    <a href="#" class="name">{!! $client->fullName !!}</a>
                                </td>
                                <td class="hidden-xs hidden-sm">
                                    <span class="email">{!! $client->email !!}</span>
                                </td>
                                <td class="user-id">
                                    {!! $client->phone !!}
                                </td>
                                <td class="">
                                    @if($client->status == 1)
                                        <span class="badge badge-success badge-roundless upper">Активен</span>
                                    @else
                                        <span class="badge badge-red badge-roundless upper">Заблокирован</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{!! url('clients/' . $client->id . '/edit') !!}" class="btn btn-sm btn-success">
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
                            {{ $clients->appends(['name' => $request->name])->links() }}
                        </div>
                    </div>
                </div>
                    </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // This JavaScript Will Replace Checkboxes in dropdown toggles
        jQuery(document).ready(function($)
        {
            setTimeout(function()
            {
                $(".checkbox-row input").addClass('cbr');
                cbr_replace();
            }, 0);
        });
    </script>

@endsection

@section('scripts')
    <script src="{{ url('assets/js/rwd-table/js/rwd-table.min.js') }}"></script>
@endsection