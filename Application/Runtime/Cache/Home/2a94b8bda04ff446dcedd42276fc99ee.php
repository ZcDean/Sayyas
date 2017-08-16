<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>项目首页</title>
    <link type="text/css" href="/sayyas/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="/sayyas/Public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="/sayyas/Public/css/theme.css" rel="stylesheet">
    <link type="text/css" href="/sayyas/Public/images/icons/css/font-awesome.css" rel="stylesheet">
    <script src="/sayyas/Public/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="/sayyas/Public/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="/sayyas/Public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand"><strong>李健</strong> ,欢迎您!</a>
                </div>
                <div class="span9">
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="http://localhost/img.jpg" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /navbar-inner -->
</div>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
    <ul class="widget widget-menu unstyled">
        <li><a href="/sayyas/index.php/Home/Index/index" class="<?php echo ($index); ?>"><i class="menu-icon icon-dashboard "></i>首页</a></li>
        <li><a href="/sayyas/index.php/Home/Project/plist" class="<?php echo ($project); ?>"><i class="menu-icon icon-list "></i> 项目列表 </a></li>
        <li><a href="/sayyas/index.php/Home/Project/modify" class="<?php echo ($modify); ?>"><i class="menu-icon icon-plus"></i> 添加进度 </a></li>
        <!--<li><a href=""><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">-->
            <!--11</b> </a></li>-->
    </ul>
    <ul class="widget widget-menu unstyled">
        <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
        </i>个人信息</a>
            <ul id="togglePages" class="collapse unstyled">
                <li><a href=""><i class="icon-edit"></i>修改信息 </a></li>
                <li><a href=""><i class="icon-edit"></i>修改头像 </a></li>
                <li><a href=""><i class="icon-edit"></i>修改密码</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="menu-icon icon-signout"></i>退出登录 </a></li>
    </ul>
</div>
            </div>
            <div class="span9">
                

<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid">
            <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                <p class="text-muted">
                    Growth</p>
            </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>15</b>
            <p class="text-muted">
                New Users</p>
        </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
            <p class="text-muted">
                Profit</p>
        </a>
        </div>
        <div class="btn-box-row row-fluid">
            <div class="span8">
                <div class="row-fluid">
                    <div class="span12">
                        <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                        </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                    </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                    </a>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                        </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                    </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                        Rate</b> </a>
                    </div>
                </div>
            </div>
            <ul class="widget widget-usage unstyled span4">
                <li>
                    <p>
                        <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                    </p>
                    <div class="progress tight">
                        <div class="bar" style="width: 78%;">
                        </div>
                    </div>
                </li>
                <li>
                    <p>
                        <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                    </p>
                    <div class="progress tight">
                        <div class="bar bar-success" style="width: 56%;">
                        </div>
                    </div>
                </li>
                <li>
                    <p>
                        <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                    </p>
                    <div class="progress tight">
                        <div class="bar bar-warning" style="width: 44%;">
                        </div>
                    </div>
                </li>
                <li>
                    <p>
                        <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                    </p>
                    <div class="progress tight">
                        <div class="bar bar-danger" style="width: 67%;">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/#btn-controls-->
    <div class="module">
        <div class="module-head">
            <h3>
                Profit Chart</h3>
        </div>
        <div class="module-body">
            <div class="chart inline-legend grid">
                <div id="placeholder2" class="graph" style="height: 500px">
                </div>
            </div>
        </div>
    </div>
    <!--/.module-->
    <div class="module hide">
        <div class="module-head">
            <h3>
                Adjust Budget Range</h3>
        </div>
        <div class="module-body">
            <div class="form-inline clearfix">
                <a href="#" class="btn pull-right">Update</a>
                <label for="amount">
                    Price range:</label>
                &nbsp;
                <input type="text" id="amount" class="input-" />
            </div>
            <hr />
            <div class="slider-range">
            </div>
        </div>
    </div>
    <div class="module">
        <div class="module-head">
            <h3>
                DataTables</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">
                <thead>
                <tr>
                    <th>
                        Rendering engine
                    </th>
                    <th>
                        Browser
                    </th>
                    <th>
                        Platform(s)
                    </th>
                    <th>
                        Engine version
                    </th>
                    <th>
                        CSS grade
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd gradeX">
                    <td>
                        Trident
                    </td>
                    <td>
                        Internet Explorer 4.0
                    </td>
                    <td>
                        Win 95+
                    </td>
                    <td class="center">
                        4
                    </td>
                    <td class="center">
                        X
                    </td>
                </tr>
                <tr class="even gradeC">
                    <td>
                        Trident
                    </td>
                    <td>
                        Internet Explorer 5.0
                    </td>
                    <td>
                        Win 95+
                    </td>
                    <td class="center">
                        5
                    </td>
                    <td class="center">
                        C
                    </td>
                </tr>
                <tr class="odd gradeA">
                    <td>
                        Trident
                    </td>
                    <td>
                        Internet Explorer 5.5
                    </td>
                    <td>
                        Win 95+
                    </td>
                    <td class="center">
                        5.5
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="even gradeA">
                    <td>
                        Trident
                    </td>
                    <td>
                        Internet Explorer 6
                    </td>
                    <td>
                        Win 98+
                    </td>
                    <td class="center">
                        6
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="odd gradeA">
                    <td>
                        Trident
                    </td>
                    <td>
                        Internet Explorer 7
                    </td>
                    <td>
                        Win XP SP2+
                    </td>
                    <td class="center">
                        7
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="even gradeA">
                    <td>
                        Trident
                    </td>
                    <td>
                        AOL browser (AOL desktop)
                    </td>
                    <td>
                        Win XP
                    </td>
                    <td class="center">
                        6
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Firefox 1.0
                    </td>
                    <td>
                        Win 98+ / OSX.2+
                    </td>
                    <td class="center">
                        1.7
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Firefox 1.5
                    </td>
                    <td>
                        Win 98+ / OSX.2+
                    </td>
                    <td class="center">
                        1.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Firefox 2.0
                    </td>
                    <td>
                        Win 98+ / OSX.2+
                    </td>
                    <td class="center">
                        1.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Firefox 3.0
                    </td>
                    <td>
                        Win 2k+ / OSX.3+
                    </td>
                    <td class="center">
                        1.9
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Camino 1.0
                    </td>
                    <td>
                        OSX.2+
                    </td>
                    <td class="center">
                        1.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Camino 1.5
                    </td>
                    <td>
                        OSX.3+
                    </td>
                    <td class="center">
                        1.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Netscape 7.2
                    </td>
                    <td>
                        Win 95+ / Mac OS 8.6-9.2
                    </td>
                    <td class="center">
                        1.7
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Netscape Browser 8
                    </td>
                    <td>
                        Win 98SE+
                    </td>
                    <td class="center">
                        1.7
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Netscape Navigator 9
                    </td>
                    <td>
                        Win 98+ / OSX.2+
                    </td>
                    <td class="center">
                        1.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.0
                    </td>
                    <td>
                        Win 95+ / OSX.1+
                    </td>
                    <td class="center">
                        1
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.1
                    </td>
                    <td>
                        Win 95+ / OSX.1+
                    </td>
                    <td class="center">
                        1.1
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.2
                    </td>
                    <td>
                        Win 95+ / OSX.1+
                    </td>
                    <td class="center">
                        1.2
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.3
                    </td>
                    <td>
                        Win 95+ / OSX.1+
                    </td>
                    <td class="center">
                        1.3
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.4
                    </td>
                    <td>
                        Win 95+ / OSX.1+
                    </td>
                    <td class="center">
                        1.4
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.5
                    </td>
                    <td>
                        Win 95+ / OSX.1+
                    </td>
                    <td class="center">
                        1.5
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.6
                    </td>
                    <td>
                        Win 95+ / OSX.1+
                    </td>
                    <td class="center">
                        1.6
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.7
                    </td>
                    <td>
                        Win 98+ / OSX.1+
                    </td>
                    <td class="center">
                        1.7
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Mozilla 1.8
                    </td>
                    <td>
                        Win 98+ / OSX.1+
                    </td>
                    <td class="center">
                        1.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Seamonkey 1.1
                    </td>
                    <td>
                        Win 98+ / OSX.2+
                    </td>
                    <td class="center">
                        1.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Gecko
                    </td>
                    <td>
                        Epiphany 2.20
                    </td>
                    <td>
                        Gnome
                    </td>
                    <td class="center">
                        1.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Webkit
                    </td>
                    <td>
                        Safari 1.2
                    </td>
                    <td>
                        OSX.3
                    </td>
                    <td class="center">
                        125.5
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Webkit
                    </td>
                    <td>
                        Safari 1.3
                    </td>
                    <td>
                        OSX.3
                    </td>
                    <td class="center">
                        312.8
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Webkit
                    </td>
                    <td>
                        Safari 2.0
                    </td>
                    <td>
                        OSX.4+
                    </td>
                    <td class="center">
                        419.3
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Webkit
                    </td>
                    <td>
                        Safari 3.0
                    </td>
                    <td>
                        OSX.4+
                    </td>
                    <td class="center">
                        522.1
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Webkit
                    </td>
                    <td>
                        OmniWeb 5.5
                    </td>
                    <td>
                        OSX.4+
                    </td>
                    <td class="center">
                        420
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Webkit
                    </td>
                    <td>
                        iPod Touch / iPhone
                    </td>
                    <td>
                        iPod
                    </td>
                    <td class="center">
                        420.1
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Webkit
                    </td>
                    <td>
                        S60
                    </td>
                    <td>
                        S60
                    </td>
                    <td class="center">
                        413
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Opera 7.0
                    </td>
                    <td>
                        Win 95+ / OSX.1+
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Opera 7.5
                    </td>
                    <td>
                        Win 95+ / OSX.2+
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Opera 8.0
                    </td>
                    <td>
                        Win 95+ / OSX.2+
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Opera 8.5
                    </td>
                    <td>
                        Win 95+ / OSX.2+
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Opera 9.0
                    </td>
                    <td>
                        Win 95+ / OSX.3+
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Opera 9.2
                    </td>
                    <td>
                        Win 88+ / OSX.3+
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Opera 9.5
                    </td>
                    <td>
                        Win 88+ / OSX.3+
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Opera for Wii
                    </td>
                    <td>
                        Wii
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Nokia N800
                    </td>
                    <td>
                        N800
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Presto
                    </td>
                    <td>
                        Nintendo DS browser
                    </td>
                    <td>
                        Nintendo DS
                    </td>
                    <td class="center">
                        8.5
                    </td>
                    <td class="center">
                        C/A<sup>1</sup>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>
                        KHTML
                    </td>
                    <td>
                        Konqureror 3.1
                    </td>
                    <td>
                        KDE 3.1
                    </td>
                    <td class="center">
                        3.1
                    </td>
                    <td class="center">
                        C
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        KHTML
                    </td>
                    <td>
                        Konqureror 3.3
                    </td>
                    <td>
                        KDE 3.3
                    </td>
                    <td class="center">
                        3.3
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        KHTML
                    </td>
                    <td>
                        Konqureror 3.5
                    </td>
                    <td>
                        KDE 3.5
                    </td>
                    <td class="center">
                        3.5
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>
                        Tasman
                    </td>
                    <td>
                        Internet Explorer 4.5
                    </td>
                    <td>
                        Mac OS 8-9
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        X
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>
                        Tasman
                    </td>
                    <td>
                        Internet Explorer 5.1
                    </td>
                    <td>
                        Mac OS 7.6-9
                    </td>
                    <td class="center">
                        1
                    </td>
                    <td class="center">
                        C
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>
                        Tasman
                    </td>
                    <td>
                        Internet Explorer 5.2
                    </td>
                    <td>
                        Mac OS 8-X
                    </td>
                    <td class="center">
                        1
                    </td>
                    <td class="center">
                        C
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Misc
                    </td>
                    <td>
                        NetFront 3.1
                    </td>
                    <td>
                        Embedded devices
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        C
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>
                        Misc
                    </td>
                    <td>
                        NetFront 3.4
                    </td>
                    <td>
                        Embedded devices
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        A
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>
                        Misc
                    </td>
                    <td>
                        Dillo 0.8
                    </td>
                    <td>
                        Embedded devices
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        X
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>
                        Misc
                    </td>
                    <td>
                        Links
                    </td>
                    <td>
                        Text only
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        X
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>
                        Misc
                    </td>
                    <td>
                        Lynx
                    </td>
                    <td>
                        Text only
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        X
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>
                        Misc
                    </td>
                    <td>
                        IE Mobile
                    </td>
                    <td>
                        Windows Mobile 6
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        C
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>
                        Misc
                    </td>
                    <td>
                        PSP browser
                    </td>
                    <td>
                        PSP
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        C
                    </td>
                </tr>
                <tr class="gradeU">
                    <td>
                        Other browsers
                    </td>
                    <td>
                        All others
                    </td>
                    <td>
                        -
                    </td>
                    <td class="center">
                        -
                    </td>
                    <td class="center">
                        U
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>
                        Rendering engine
                    </th>
                    <th>
                        Browser
                    </th>
                    <th>
                        Platform(s)
                    </th>
                    <th>
                        Engine version
                    </th>
                    <th>
                        CSS grade
                    </th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--/.module-->
</div>
<script src="/sayyas/Public/scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="/sayyas/Public/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="/sayyas/Public/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="/sayyas/Public/scripts/common.js" type="text/javascript"></script>
            </div>
        </div>
    </div>
</div>

</body>