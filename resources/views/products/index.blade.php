@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Кредитные продукты</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('product/create') }}" class="btn btn-success"><span class="fa-plus"></span> Создать кредитный продукт</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#all" data-toggle="tab">Кредитные продукты</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="all">

                    <table class="table table-hover members-table middle-align">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th class="hidden-xs hidden-sm">Описание</th>
                            <th>Активен</th>
                            <th>По-умолчанию</th>
                            <th>Для повторников</th>
                            <th>Промокодов</th>
                            <th>Настройка</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td class="user-name">
                                    <a href="#" class="name">{!! $product->name !!}</a>
                                </td>
                                <td class="hidden-xs hidden-sm">
                                    <span class="email">{!! $product->description !!}</span>
                                </td>
                                <td>
                                    @if($product->available)
                                        <span class="label label-success">Да</span>
                                    @else
                                        <span class="label label-danger">Нет</span>
                                    @endif
                                </td>
                                <td>
                                    @if($product->default)
                                        <span class="label label-success">Да</span>
                                    @else
                                        <span class="label label-danger">Нет</span>
                                    @endif
                                </td>
                                <td>
                                    @if($product->repeatable)
                                        <span class="label label-success">Да</span>
                                    @else
                                        <span class="label label-danger">Нет</span>
                                    @endif
                                </td>
                                <td>
                                    {{ $product->promocode->count() }}
                                </td>
                                <td>
                                    <a href="{!! url('product/' . $product->id . "/edit") !!}" class="btn btn-sm btn-success">
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
                            <ul class="pagination pagination-sm no-margin">
                                {{ $products->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection