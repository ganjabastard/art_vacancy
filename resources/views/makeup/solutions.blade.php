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
                            <a type="button" href="{{ url('solutions') }}" class="btn btn-primary btn-sm">Розділений</a>
                            <a type="button" href="{{ url('services') }}" class="btn btn-white btn-sm">Детально</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div class="col-md-5">
        <div class="row2">
            <!-- Basic Setup -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Basic Setup</h3>

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

                    <script type="text/javascript">
                        $(document).ready(function($)
                        {
                            $("#example-1").dataTable({
                                aLengthMenu: [
                                    [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
                                ]
                            });
                        });
                    </script>

                    <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th class="no-sorting"></th>
                            <th>#</th>
                            <th>Створено</th>
                            <th>Ім’я</th>
                            <th>Сума</th>
                            <th>Очікування</th>
                            <th class="no-sorting"></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="no-sorting"></th>
                            <th>#</th>
                            <th>Створено</th>
                            <th>Ім’я</th>
                            <th>Сума</th>
                            <th>Очікування</th>
                            <th class="no-sorting"></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td>2008/10/26</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td>2011/03/09</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/12/16</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                            <td>2008/09/26</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2011/05/03</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>2009/08/19</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/07/07</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2012/04/09</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>2010/01/04</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>
                            <td>2012/06/01</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>
                            <td>2013/02/01</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2011/03/21</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>21</td>
                            <td>2009/02/27</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2010/07/14</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>
                            <td>2011/06/27</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cbr-replaced cbr-checked">
                                    <div class="cbr-input">
                                        <input type="checkbox" class="cbr cbr-done">
                                    </div>
                                    <div class="cbr-state">
                                        <span></span>
                                    </div>
                                </div>
                            </td>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>
                                <span><a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">Edit</a></span>
                                <span><a href="#" class="btn btn-info btn-sm btn-icon icon-left">Profile</a></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7">
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
