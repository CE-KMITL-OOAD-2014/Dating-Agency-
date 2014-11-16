<html>
<title>Dating-Agency</title>
<head>
    {{ HTML:: style('bootstrap-3.2.0-dist/css/bootstrap.css')}}
    {{ HTML:: script('bootstrap-3.2.0-dist/js/jquery-1.11.1.min.js')}}
    {{ HTML:: script('bootstrap-3.2.0-dist/js/bootstrap.min.js')}}
</head>
<body>

    <div class="row-clearfix">
        <div class="col-md-2 well">
            <ul class="nav nav-pills nav-stacked">
               <br><br>
               <li class="active"><a href="/showprofile"><i class="fa fa-home fa-fw"></i>Profile</a></li>
               <br>
               <li class="active"><a href="/receive-message"><i class="fa fa-table fa-fw"></i>Receive Message</a></li>
               <br>
               <li class="active"><a href="/receive-virtual"><i class="fa fa-tasks fa-fw"></i>Receive Virtual</a></li>
               <br>
               <li class="active"><a href="/profile"><i class="fa fa-list-alt fa-fw"></i>Other Profile</a></li>
               <br>
               <li class="active"><a href="/show_all_friends"><i class="fa fa-file-o fa-fw"></i>All Friends</a></li>
               <br>
               <li class="active"><a href="/show_all_likes"><i class="fa fa-bar-chart-o fa-fw"></i>All Like</a></li>
               <br>
               <li class="active"><a href="/showguideline"><i class="fa fa-home fa-fw"></i>Helps</a></li>
               <br>
               <li class="active"><a href="/logout"><i class="fa fa-bar-chart-o fa-fw"></i>Logout</a></li>
               <br><br>
           </ul>
       </div>
        <div class="container">
            <div class="col-md-10 ">
            @yield('content')
        </div>
    </div>
</body>

</html>
