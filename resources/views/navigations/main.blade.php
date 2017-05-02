<ul id="main-menu" class="main-menu">
    <li class="">
        <a href="{{ url('application') }}">
            <i class="fa-bell-o"></i>
            <span class="title">Заявки</span>
        </a>
    </li>
    <li>
        <a href="{{ url('solutions') }}">
            <i class="fa-info-circle"></i>
            <span class="title">Решения</span>
        </a>
        <ul>
            <li>
                <a href="ui-panels.html">
                    <span class="title">На расмотрении</span>
                </a>
            </li>
            <li>
                <a href="ui-buttons.html">
                    <span class="title"><span class="fa-exclamation-circle"></span> Мошенники</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ url('services') }}">
            <i class="fa-bank"></i>
            <span class="title">Обслуживание</span>
        </a>
        <ul>
            <li>
                <a href="forms-native.html">
                    <span class="title">Список</span>
                </a>
            </li>
            <li>
                <a href="forms-advanced.html">
                    <span class="title">Просрочка</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="">
            <i class="fa-archive"></i>
            <span class="title">Архив</span>
        </a>
    </li>
    <li>
        <a href="{{ url('reports') }}">
            <i class="fa-bar-chart"></i>
            <span class="title">Отчеты</span>
        </a>
        <ul>
            <li>
                <a href="{!! url('user_logs') !!}">
                    <i class="fa-info-circle"></i>
                    <span class="title">Протокол работы пользователей</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ url('clients') }}">
            <i class="fa-male"></i>
            <span class="title">Клиенты</span>
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
                <a href="#">
                    <i class="fa-lock"></i>
                    <span class="title">Ограничения</span>
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
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-check-square"></i>
                    <span class="title">Поля клиентов</span>
                </a>
                <ul>

                    <li>
                        <a href="{!! url('client_fields/groups') !!}">
                            <i class="fa-cubes"></i>
                            <span class="title">Группы полей</span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! url('client_fields/types') !!}">
                            <i class="fa-cubes"></i>
                            <span class="title">Настройка полей</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="">
                    <i class="fa-child"></i>
                    <span class="title">Коллекторские агентсва</span>
                </a>
            </li>
            <li>
                <a href="{{ url('product') }}">
                    <i class="fa-briefcase"></i>
                    <span class="title">Кредитные продукты</span>
                </a>
            </li>
        </ul>
    </li>
</ul>