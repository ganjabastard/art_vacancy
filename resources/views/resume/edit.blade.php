@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Редактирование резюме</h1>
            {{--<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>--}}
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1" >
                <li>
                    <a href="{{ url('dashboard') }}"><i class="fa-home"></i>Главная</a>
                </li>
                <li>
                    <a href="{{ url('resume') }}">Список резюме</a>
                </li>
                <li class="active">
                    <strong>Редактирование резюме</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Редактирование резюме
            </div>
        </div>

        <div class="panel-body">
            <div class="col-xs-6">
                {{ Form::open(['url' => 'resume/' . $resume->id, 'method' => 'PUT', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
                {{ Form::hidden('id', $resume->id) }}
                <br>
                <div class="form-group">
                    {{ Form::label('name', 'Имя', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::text('name', $resume->name, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Имя'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('email', 'Email', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::text('email', $resume->email, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Email'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('phone', 'Телефон', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::text('phone', $resume->email, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Телефон'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('description',  'Описание', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::textarea('description', $resume->description, ['class' => 'form-control', "placeholder" => 'Описание роли'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('education', 'Образование', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        <select name="education" id="" class="form-control">
                            <option value="1" @if($resume->education == 1) selected @endif>Среднее</option>
                            <option value="2" @if($resume->education == 2) selected @endif>Высшие - специалист</option>
                            <option value="3" @if($resume->education == 3) selected @endif>Высшие - бакалавр</option>
                            <option value="4" @if($resume->education == 4) selected @endif>Высшие - магист</option>
                            <option value="0" @if($resume->education == 0) selected @endif>Безобразования</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('experience', 'Опыт работы в годах', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::number('experience', $resume->experience, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Опыт работы в годах'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('university', 'Университет', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::text('university', $resume->university, ['class' => 'form-control', "placeholder" => 'Университет'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('source', 'Источник', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::text('source', $resume->source, ['class' => 'form-control', "placeholder" => 'Источник'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('link', 'Сылка на резюме', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::text('link', $resume->link, ['class' => 'form-control', "placeholder" => 'Сылка на резюме'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('position', 'Должность', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::text('position', $resume->position, ['class' => 'form-control', "placeholder" => 'Должность'])}}
                    </div>
                </div>

                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('status', 'Статус', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        <select name="status" id="" class="form-control">
                            <option value="1" @if($resume->status == 1) selected @endif>Молодой</option>
                            <option value="2" @if($resume->status == 2) selected @endif>Мало знает</option>
                            <option value="3" @if($resume->status == 3) selected @endif>Надо подумать</option>
                            <option value="4" @if($resume->status == 4) selected @endif>Отличный человек</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="form-group">
                    {{ Form::label('birthday', 'Опыт работы в годах', ['class' => 'control-label col-sm-3']) }}
                    <div class="col-sm-9">
                        {{  Form::text('birthday', \Carbon\Carbon::parse($resume->birthday)->format('Y-m-d'), ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Дата рождения', 'data-format' => 'yyyy-mm-dd'])}}
                    </div>
                </div>
                <div class="form-group-separator __web-inspector-hide-shortcut__"></div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <a href="{{ url('resume') }}" class="btn btn-white"><span class="fa-arrow-left"></span> Назад</a>
                        <button type="reset" class="btn btn-gray"><span class="fa-refresh"></span> Сбросить</button>
                        <button type="submit" class="btn btn-success"><span class="fa-save"></span> Сохранить</button>
                        <a href="#"  onclick="jQuery('#modal-1').modal('show', {backdrop: 'fade'});" class="btn btn-danger"><span class="fa-bell"></span> Назначить собеседование</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
            <div class="col-sm-3 profile-env">
                <p>Комментарии</p>
                    {{ Form::open(['url' => 'resume/comment/' . $resume->id, 'method' => 'POST', 'class' => ' profile-post-form validate form-horizontal', "novalidate" => 'novalidate']) }}
                    {{ Form::hidden('id', $resume->id) }}
                    {{ Form::textarea('comment', null,['rows' => 3, 'class' => 'form-control input-unstyled input-lg autogrow', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения',]) }}
                    <i class="el-edit block-icon"></i>
                    <ul class="list-unstyled list-inline form-action-buttons">
                    </ul>
                    <br>
                    <button type="submit" class="btn btn-single btn-xs btn-success post-story-button">Комментировать</button>
                    {{ Form::close() }}

                <section class="user-timeline-stories">
                    @forelse($comments as $comment)
                        <article class="timeline-story">
                            <i class="fa-paper-plane-empty block-icon"></i>
                            <header>
                                <a href="{{ url('user/' . $comment->user_id . '/edit') }}" class="user-img">
                                    <img src="{{ url('assets/images/user-4.png') }}" alt="user-img" class="img-responsive img-circle" />
                                </a>
                                <div class="user-details">
                                    <a href="{{ url('user/' . $comment->user_id . '/edit') }}">{{ $comment->user->name }}</a>
                                    <time>{{ $comment->updated_at }}</time>
                                </div>
                            </header>
                            <div class="story-content">
                                <p>{{ $comment->comment }}</p>
                            </div>
                        </article>
                    @empty
                    @endforelse
                </section>
            </div>
            <div class="col-sm-3">
                Список вакансий
                <ul>
                    @forelse($interviews as $i)
                        <li>
                            <a href="{{ url('interview/' . $i->id. '/edit') }}">11</a>
                        </li>
                        @empty
                        <li>Небыло назначено собеседований.</li>
                        @endforelse
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal 1 (Basic)-->
    <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(['url' => 'interview/', 'method' => 'POST', 'class' => 'validate form-horizontal', "novalidate" => 'novalidate']) }}
                {{ Form::hidden('resume_id', $resume->id) }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Назначить собеседования</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('birthday', 'Дата собеседования', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-sm-4">
                            {{  Form::text('date', \Carbon\Carbon::parse('tomorrow')->format('Y-m-d'), ['class' => 'form-control datepicker', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Дата собеседования', 'data-format' => 'yyyy-mm-dd'])}}
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="time" class="form-control timepicker" data-template="dropdown" data-show-seconds="false" data-default-time="{{ Carbon\Carbon::now()->format('H:i') }}" data-show-meridian="false" data-minute-step="10" data-second-step="5">
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('birthday', 'Вакансия', ['class' => 'control-label col-sm-4']) }}
                        <div class="col-xs-8">
                            {{  Form::select('vacancy_id', $vacancy, null, ['class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'Поле обязательно для заполнения', "placeholder" => 'Вакансия']) }}
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-info">Сохранить</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/fonts/elusive/css/elusive.css') }}">
    <style>
        .profile-env .profile-post-form:after{display: none;}
    </style>
@endsection

@section('scripts')
    <script src="{{ url('assets/js/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('assets/js/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/js/inputmask/jquery.inputmask.bundle.js') }}"></script>
@endsection