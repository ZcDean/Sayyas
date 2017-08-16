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

    <div class="module">
        <div class="module-head">
            <h3>添加项目进度</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label" for="saleman">业务员</label>
                    <div class="controls">
                        <input type="text" id="saleman"  class="span8" readonly value="李建" >
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="report_time">报备日期</label>
                    <div class="controls">
                        <input type="date" id="report_time"  class="span8" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="contact">联系人</label>
                    <div class="controls">
                        <input type="text" id="contact"  class="span8" placeholder="联系人姓名" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="contact_number">联系电话</label>
                    <div class="controls">
                        <input type="tel" id="contact_number"  class="span8" placeholder="联系人电话" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="project">项目</label>
                    <div class="controls">
                        <select tabindex="1"  id="project" class="span8" required>
                            <option value="">请选择要更新的项目</option>
                            <option value="Category 1">First Row</option>
                            <option value="Category 2">Second Row</option>
                            <option value="Category 3">Third Row</option>
                            <option value="Category 4">Fourth Row</option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="content">详细内容</label>
                    <div class="controls">
                        <textarea class="span8" id="content" rows="5"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">确认添加</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



</div><!--/.content-->
            </div>
        </div>
    </div>
</div>

</body>