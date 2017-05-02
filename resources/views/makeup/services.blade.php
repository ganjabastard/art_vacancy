@extends('layouts.app')

@section('pagetitle')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Заявки</h1>
            {{--<p class="description">Members management page separated with tabs.</p>--}}
        </div>
        <div class="breadcrumb-env">
            <a href="{{ url('application_create') }}" class="btn btn-success"><span class="fa-plus"></span> Добавить завяку</a>
        </div>
    </div>
@endsection


@section('content')
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa-bars"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <div class="navbar-form navbar-left">
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option value="">Усi</option>
                                <option value="">10</option>
                                <option value="">25</option>
                                <option value="">50</option>
                                <option value="">100</option>
                            </select>
                        </div>
                    </div>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Пошук">
                </div>
                <button type="submit" class="btn btn-white">Пошук</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <div class="navbar-form navbar-left">
                        <div class="btn-group">
                            <a type="button" href="{{ url('application') }}" class="btn btn-white btn-sm">Список</a>
                            <a type="button" href="{{ url('solutions') }}" class="btn btn-white btn-sm">Розділений</a>
                            <a type="button" href="{{ url('services') }}" class="btn btn-primary btn-sm">Детально</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>


    <div class="col-md-6">
        <div class="row2">
            <!-- Basic Setup -->
            <div class="panel panel-color panel-black">
                <div class="panel-heading">
                    <h3 class="panel-title">Profile</h3>

                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <section class="profile-env">
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- User Info Sidebar -->
                                <div class="user-info-sidebar">

                                    <a href="#" class="user-img">
                                        <img src="assets/images/user-4.png" alt="user-img" class="img-cirlce img-responsive img-thumbnail" />
                                    </a>

                                    <a href="#" class="user-name">
                                        Art Ramadani
                                        <span class="user-status is-online"></span>
                                    </a>

                                    <span class="user-title">
                                        CEO at <strong>Google</strong>
                                    </span>



                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- User Info Sidebar -->
                                <div class="user-info-sidebar">
                                    <ul class="list-unstyled user-info-list">
                                        <li>
                                            <i class="fa-home"></i>
                                            Prishtina, Kosovo
                                        </li>
                                        <li>
                                            <i class="fa-briefcase"></i>
                                            <a href="#">Laborator</a>
                                        </li>
                                        <li>
                                            <i class="fa-graduation-cap"></i>
                                            University of Bologna
                                        </li>
                                    </ul>

                                    <hr />

                                    <ul class="list-unstyled user-friends-count">
                                        <li>
                                            <span>643</span>
                                            followers
                                        </li>
                                        <li>
                                            <span>108</span>
                                            following
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="invoice-details">

                                    <div class="invoice-client-info">
                                        <strong>Client</strong>

                                        <ul class="list-unstyled">
                                            <li>John Doe </li>
                                            <li>Mr Nilson Otto </li>
                                            <li>FoodMaster Ltd</li>
                                        </ul>

                                        <ul class="list-unstyled">
                                            <li>1982 OOP </li>
                                            <li>Madrid, Spain </li>
                                            <li>+1 (151) 225-4183</li>
                                        </ul>
                                    </div>

                                    <div class="invoice-payment-info">
                                        <strong>Payment Details</strong>

                                        <ul class="list-unstyled">
                                            <li>V.A.T Reg #: <strong>542554(DEMO)78</strong></li>
                                            <li>Account Name: <strong>FoodMaster Ltd</strong> </li>
                                            <li>SWIFT code: <strong>45454DEMO545DEMO</strong></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="panel panel-color panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Action</h3>

                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <button class="btn btn-success">Прийняты</button>
                    <button class="btn btn-red">Вiдхилити</button>
                    <button class="btn btn-pink">Шахрай</button>
                    <button class="btn btn-orange">Немаэ контакту</button>
                    <button class="btn btn-black">Додаты до чорного списку</button>
                    <button class="btn btn-white">Дедалi позики</button>
                </div>
            </div>
            <div class="panel panel-color panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Позика</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="tabs-vertical-env tabs-vertical-bordered"><!-- add class "right-aligned" for the right aligned tabs -->

                            <ul class="nav tabs-vertical">
                                <li class="active"><a href="#data" data-toggle="tab" aria-expanded="true">Загальні дані</a></li>
                                <li class=""><a href="#skoring" data-toggle="tab" aria-expanded="false">Скоринг</a></li>
                                <li class=""><a href="#client" data-toggle="tab" aria-expanded="false">Клієнт</a></li>
                                <li class=""><a href="#credit" data-toggle="tab" aria-expanded="false">Кредитна історія</a></li>
                                <li class=""><a href="#credit" data-toggle="tab" aria-expanded="false">График</a></li>
                                <li class=""><a href="#buro" data-toggle="tab" aria-expanded="false">Кредитне бюро</a></li>
                                <li class=""><a href="#history" data-toggle="tab" aria-expanded="false">Історія змін</a></li>
                                <li class=""><a href="#comments" data-toggle="tab" aria-expanded="false">Коментарі (0)</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="data">
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Деталі позики</strong>
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Історія позики</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Кредитне бюро</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="tab-pane" id="skoring">
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Результати скорингу</strong>
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="tab-pane" id="client">
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Особисті дані</strong>
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Паспортні дані</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Адреса проживання</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Додаткова інформація</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Банківський рахунок</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="tab-pane" id="credit">
                                    <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">

                                        <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th data-priority="1">Last Trade</th>
                                                <th data-priority="3">Trade Time</th>
                                                <th data-priority="1">Change</th>
                                                <th data-priority="3">Prev Close</th>
                                                <th data-priority="3">Open</th>
                                                <th data-priority="6">Bid</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            <!-- Repeat -->
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            <!-- Repeat -->
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            <!-- Repeat -->
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            <!-- Repeat -->
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                            </tr>
                                            <tr>
                                                <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                <td>378.94</td>
                                                <td>12:22PM</td>
                                                <td>5.74 (1.54%)</td>
                                                <td>373.20</td>
                                                <td>381.02</td>
                                                <td>378.92 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                <td>191.55</td>
                                                <td>12:23PM</td>
                                                <td>3.16 (1.68%)</td>
                                                <td>188.39</td>
                                                <td>194.99</td>
                                                <td>191.52 x 300</td>
                                            </tr>
                                            <tr>
                                                <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                <td>31.15</td>
                                                <td>12:44PM</td>
                                                <td>1.41 (4.72%)</td>
                                                <td>29.74</td>
                                                <td>30.67</td>
                                                <td>31.14 x 6500</td>
                                            </tr>
                                            <tr>
                                                <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                <td>25.50</td>
                                                <td>12:27PM</td>
                                                <td>0.66 (2.67%)</td>
                                                <td>24.84</td>
                                                <td>25.37</td>
                                                <td>25.50 x 71100</td>
                                            </tr>
                                            <tr>
                                                <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                <td>18.65</td>
                                                <td>12:45PM</td>
                                                <td>0.97 (5.49%)</td>
                                                <td>17.68</td>
                                                <td>18.23</td>
                                                <td>18.65 x 10300</td>
                                            </tr>
                                            <tr>
                                                <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                <td>15.81</td>
                                                <td>12:25PM</td>
                                                <td>0.11 (0.67%)</td>
                                                <td>15.70</td>
                                                <td>15.94</td>
                                                <td>15.79 x 6100</td>
                                            </tr>
                                            </tbody>
                                        </table>

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
                                </div>
                                <div class="tab-pane" id="buro">
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Резюме</strong>
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Кредити</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Адреси</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                    <blockquote class="blockquote blockquote-black">
                                        <p>
                                            <strong>Контакти</strong>
                                        </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-xs-6">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td>Arlind</td>
                                                        <td>Nushi</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Art</td>
                                                        <td>Ramadani</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Filan</td>
                                                        <td>Fisteku</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="tab-pane" id="history">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Arlind</td>
                                            <td>Nushi</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Art</td>
                                            <td>Ramadani</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Filan</td>
                                            <td>Fisteku</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="comments">
                                    <div class="profile-env">
                                        <!-- User Post form and Timeline -->
                                        <form method="post" action="" class="profile-post-form">
                                            <textarea class="form-control input-unstyled input-lg autogrow" placeholder="What's on your mind?"></textarea>
                                            <br>
                                            <button type="submit" class="btn btn-single btn-xs btn-success post-story-button">Post</button>
                                        </form>

                                        <!-- User timeline stories -->
                                        <section class="user-timeline-stories">

                                            <!-- Timeline Story Type: Status -->
                                            <article class="timeline-story">
                                                <i class="fa-paper-plane-empty block-icon"></i>
                                                <!-- User info -->
                                                <header>
                                                    <a href="#" class="user-img">
                                                        <img src="assets/images/user-4.png" alt="user-img" class="img-responsive img-circle" />
                                                    </a>
                                                    <div class="user-details">
                                                        <a href="#">Art Ramadani</a> posted a status <a href="#">update</a>.
                                                        <time>12 hours ago</time>
                                                    </div>
                                                </header>
                                                <div class="story-content">
                                                    <!-- Story Content Wrapped inside Paragraph -->
                                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>

                                                </div>
                                            </article>

                                            <!-- Timeline Story Type: Status -->
                                            <article class="timeline-story">
                                                <i class="fa-paper-plane-empty block-icon"></i>
                                                <!-- User info -->
                                                <header>
                                                    <a href="#" class="user-img">
                                                        <img src="assets/images/user-4.png" alt="user-img" class="img-responsive img-circle" />
                                                    </a>
                                                    <div class="user-details">
                                                        <a href="#">Art Ramadani</a> posted a status <a href="#">update</a>.
                                                        <time>12 hours ago</time>
                                                    </div>
                                                </header>
                                                <div class="story-content">
                                                    <!-- Story Content Wrapped inside Paragraph -->
                                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>

                                                </div>
                                            </article>
                                            <!-- Timeline Story Type: Status -->
                                            <article class="timeline-story">
                                                <i class="fa-paper-plane-empty block-icon"></i>
                                                <!-- User info -->
                                                <header>
                                                    <a href="#" class="user-img">
                                                        <img src="assets/images/user-4.png" alt="user-img" class="img-responsive img-circle" />
                                                    </a>
                                                    <div class="user-details">
                                                        <a href="#">Art Ramadani</a> posted a status <a href="#">update</a>.
                                                        <time>12 hours ago</time>
                                                    </div>
                                                </header>
                                                <div class="story-content">
                                                    <!-- Story Content Wrapped inside Paragraph -->
                                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>

                                                </div>
                                            </article>
                                        </section>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <ul class="cbp_tmtimeline">
            <li>
                <time class="cbp_tmtime" datetime="2014-12-06T18:30"><span class="hidden">06/12/2014</span> <span class="large">Now</span></time>

                <div class="cbp_tmicon timeline-bg-gray">
                    <i class="fa-user"></i>
                </div>

                <div class="cbp_tmlabel empty">
                    <span>No Activity</span>
                </div>
            </li>

            <li>
                <time class="cbp_tmtime" datetime="2014-12-06T03:45"><span>03:45 AM</span> <span>Today</span></time>

                <div class="cbp_tmicon timeline-bg-success">
                    <i class="fa-paper-plane-o"></i>
                </div>

                <div class="cbp_tmlabel">
                    <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </li>

            <li>
                <time class="cbp_tmtime" datetime="2014-12-05T13:22"><span>01:22 PM</span> <span>Yesterday</span></time>

                <div class="cbp_tmicon timeline-bg-primary">
                    <i class="fa-calendar"></i>
                </div>

                <div class="cbp_tmlabel">
                    <h2><a href="#">Job Meeting</a></h2>
                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                </div>
            </li>

            <li>
                <time class="cbp_tmtime" datetime="2014-11-23T13:41"><span>01:41 PM</span> <span>Two weeks ago</span></time>

                <div class="cbp_tmicon timeline-bg-warning">
                    <i class="fa-camera-retro"></i>
                </div>

                <div class="cbp_tmlabel">
                    <h2><a href="#">Eroll Maxhuni</a> <span>uploaded</span> 12 <span>new photos to album</span> <a href="#">Summer Trip</a></h2>

                    <blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>

                    <div class="row">
                        <div class="col-xs-5">
                            <a href="#">
                                <img src="assets/images/image-1.jpg" class="img-responsive img-rounded full-width" />
                            </a>
                        </div>

                        <div class="col-xs-3">
                            <a href="#">
                                <img src="assets/images/image-4.jpg" class="img-responsive img-rounded full-width" />
                            </a>
                        </div>

                        <div class="col-xs-4">

                            <a href="#">
                                <img src="assets/images/image-5.jpg" class="img-responsive img-rounded full-width margin-bottom" />
                            </a>

                            <div class="vspacer v2"></div>

                            <a href="#">
                                <img src="assets/images/image-3.jpg" class="img-responsive img-rounded full-width" />
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

@endsection


@section('styles')
    <link rel="stylesheet" href="{{ url('assets/js/datatables/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fonts/elusive/css/elusive.css') }}">
@endsection

@section('scripts')
    <script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('assets/js/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('assets/js/datatables/yadcf/jquery.dataTables.yadcf.js') }}"></script>
    <script src="{{ url('assets/js/datatables/tabletools/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ url('assets/js/rwd-table/js/rwd-table.min.js') }}"></script>
@endsection
