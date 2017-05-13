<ul id="main-menu" class="main-menu">
    <li class="">
        <a href="{{ url('vacancy') }}">
            <i class="fa-bell-o"></i>
            <span class="title">Вакансии</span>
        </a>
    </li>
    <li>
        <a href="{{ url('resume') }}">
            <i class="fa-male"></i>
            <span class="title">Резюме</span>
        </a>
    </li>
    <li>
        <a href="{{ url('interview') }}">
            <i class="fa-bell"></i>
            <span class="title">Собеседование</span>
        </a>
    </li>
    <li>
        <a href="">
            <i class="fa-archive"></i>
            <span class="title">Архив</span>
        </a>
    </li>
    <li>
        <a href="{!! url('users') !!}">
            <i class="fa-users"></i>
            <span class="title">Пользователи</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa-cog"></i>
            <span class="title">Настройки</span>
        </a>
        <ul>
            <li>
                <a href="{!! url('roles') !!}">
                    <i class="fa-male"></i>
                    <span class="title">Роли</span>
                </a>
            </li>
            <li>
                <a href="{!! url('permissions') !!}">
                    <i class="fa-unlock"></i>
                    <span class="title">Права доступа</span>
                </a>
            </li>
            <li>
                <a href="{!! url('whiteips') !!}">
                    <i class="fa-unlock"></i>
                    <span class="title">Белый список ip адресов</span>
                </a>
            </li>
            </li>
        </ul>
    </li>
</ul>