<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Project Manager</title>

  <!-- ========== Css Files ========== -->
  <link href="{{URL::asset('css/root.css')}}" rel="stylesheet">


  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="/" class="logo">Manager</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Search">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <!-- Start Top Menu -->
    <ul class="topmenu">
      <li><a href="#">Files</a></li>
      <li><a href="#">Authors</a></li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">My Files <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Videos</a></li>
          <li><a href="#">Pictures</a></li>
          <li><a href="#">Blog Posts</a></li>
        </ul>
      </li>
    </ul>
    <!-- End Top Menu -->

    <!-- Start Sidepanel Show-Hide Button -->
    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
    <!-- End Sidepanel Show-Hide Button -->

    <!-- Start Top Right -->
    <ul class="top-right">

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle hdbutton">Create New <span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list">
          <li><a href="#"><i class="fa falist fa-paper-plane-o"></i>Product or Item</a></li>
          <li><a href="#"><i class="fa falist fa-font"></i>Blog Post</a></li>
          <li><a href="#"><i class="fa falist fa-file-image-o"></i>Image Gallery</a></li>
          <li><a href="#"><i class="fa falist fa-file-video-o"></i>Video Gallery</a></li>
        </ul>
    </li>

    <li class="link">
      <a href="#" class="notifications">6</a>
    </li>

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="{{ Auth::user()->img_url }}" alt="img"><b>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li role="presentation" class="dropdown-header">Profile</li>
          <li><a href="#"><i class="fa falist fa-inbox"></i>Inbox<span class="badge label-danger">4</span></a></li>
          <li><a href="#"><i class="fa falist fa-file-o"></i>Filess</a></li>
          <li><a href="#"><i class="fa falist fa-wrench"></i>Settings</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="fa falist fa-lock"></i> Lockscreen</a></li>
          <li><a href="{{ url('/auth/logout') }}"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MAIN</li>
  <li><a href="/"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard<span class="label label-default">2</span></a></li>
  <li><a href="developer.blade"><span class="icon color5"><i class="fa fa-legal"></i></span>Developer<span class="label label-default"></span></a></li>
  <li><a href="project%20manager"><span class="icon color5"><i class="fa fa-area-chart"></i></span>Project Manager<span class="label label-default"></span></a></li>
  <li><a href="qa%20engineer"><span class="icon color5"><i class="fa fa-steam-square"></i></span>QA Engineer<span class="label label-default"></span></a></li>
  <li><a href="project%20Accountant"><span class="icon color5"><i class="fa fa-group"></i></span>Accountant<span class="label label-default"></span></a></li>

</ul>


</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->

  <!-- End Page Header -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-widget">
  <!-- START First row -->
<div class="row">
  <!-- Start Project Stats -->
  <div class="col-md-12 col-lg-6" style="width:100%">
    <div class="panel panel-widget">
      <div class="panel-title" >
        Projects Stats <span class="label label-warning" >62</span>
        <ul class="panel-tools">
          <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
          <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
        </ul>

      </div>

      <div class="panel-search">
        <form>
          <input type="text" class="form-control" placeholder="Search...">
          <i class="fa fa-search icon"></i>
        </form>
      </div>


      <div class="panel-body table-responsive">

        <table class="table table-hover">
          <thead>
          <tr>
            <td>ID</td>
            <td>Project</td>
            <td>Status</td>
            <td class="text-right">Progress</td>

          </tr>
          </thead>
          <tbody>
          <tr>
            <td>965</td>
            <td>Kode Dashboard Template</td>
            <td><span class="label label-default">Developing</span></td>
            <td class="text-right"><span class="demo-project-stats"></span></td>
          </tr>
          <tr>
            <td>620</td>
            <td>EBI iOS Application</td>
            <td><span class="label label-warning">Design</span></td>
            <td class="text-right"><span class="demo-project-stats"></span></td>
          </tr>
          <tr>
            <td>621</td>
            <td>Kode Landing Page</td>
            <td><span class="label label-info">Testing</span></td>
            <td class="text-right"><span class="demo-project-stats"></span></td>
          </tr>
          <tr>
            <td>621</td>
            <td>John Coffe Shop Logo</td>
            <td><span class="label label-danger">Canceled</span></td>
            <td class="text-right"><span class="demo-project-stats"></span></td>
          </tr>
          <tr>
            <td>621</td>
            <td>BKM Website Design</td>
            <td><span class="label label-primary">Reply waiting</span></td>
            <td class="text-right"><span class="demo-project-stats"></span></td>
          </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
  <!-- End Project Stats -->


</div>

  <!-- Start Second Row -->
  <div class="row">

    <!-- Start Order Status -->
    <div class="col-md-12 col-lg-6" style="width:100%">
      <div class="panel panel-widget">
        <div class="panel-title">
          ONGOING PROJECTS <span class="label label-warning">196</span>
          <ul class="panel-tools">
            <li><a class="icon search-tool"><i class="fa fa-search"></i></a></li>
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="table table-hover table-striped">
            <thead>
            <tr>
              <td class="text-center"><i class="fa fa-trash"></i></td>
              <td>Project ID</td>
              <td>Project</td>
              <td>Consultant</td>
              <td>Due Date</td>
              <td>Payment</td>
              <td>Progress</td>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox1" type="checkbox"><label for="checkbox1"></label></div></td>
              <td># <b>9652</b></td>
              <td>Kode Gaming Laptop</td>
              <td>John Doe</td>
              <td>12/10/2015</td>
              <td>Credit Card</td>
              <td><div class="easypie margin-b-50" data-percent="82"><span>82%</span></div></td>
            </tr>
            <tr>
              <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox2" type="checkbox"><label for="checkbox2"></label></div></td>
              <td># <b>1963</b></td>
              <td>New Season Jacket</td>
              <td>Jane Doe</td>
              <td>12/10/2015</td>
              <td>Paypal</td>
              <td><div class="easypie margin-b-50" data-percent="30"><span>30%</span></div></td>
            </tr>
            <tr>
              <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox3" type="checkbox"><label for="checkbox3"></label></div></td>
              <td># <b>9652</b></td>
              <td>IO Mouse</td>
              <td>Jonathan Doe</td>
              <td>12/10/2015</td>
              <td>Credit Card</td>
              <td><div class="easypie margin-b-50 margin-b-40" data-percent="62"><span>62%</span></div></td>
            </tr>
            <tr>
              <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox4" type="checkbox"><label for="checkbox4"></label></div></td>
              <td># <b>9651</b></td>
              <td>Doe Bike</td>
              <td>Jonathan Doe</td>
              <td>12/10/2015</td>
              <td>Credit Card</td>
              <td><div class="easypie margin-b-50" data-percent="15"><span>15%</span></div></td>
            </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- End Order Stats -->


  </div>
  <!-- End First Row -->


  <!-- Start Second Row -->

  <div class="row">
    <!-- Start Inbox -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget">
        <div class="panel-title">
          Inbox <span class="label label-danger">9</span>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

          <ul class="mailbox-inbox">

            <li>
              <a href="#" class="item clearfix">
                <img src="img/profileimg.png" alt="img" class="img">
                <span class="from">Jonathan Doe</span>
                Hello, m8 how is goin ?
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="img/profileimg2.png" alt="img" class="img">
                <span class="from">Egemem Ka</span>
                Problems look mighty small...
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="img/profileimg3.png" alt="img" class="img">
                <span class="from">James Throwing</span>
                New job offer ?
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="img/profileimg4.png" alt="img" class="img">
                <span class="from">Timmy Jefsin</span>
                Tonight Party
                <span class="date">22 May</span>
              </a>
            </li>


          </ul>

        </div>
      </div>
    </div>
    <!-- End Inbox -->
    <!-- Start span -->
    <div class="col-md-12 col-lg-3" style="width: 12.5%">

    </div>

    <!-- End span -->

    <!-- Start Teammates -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-info panel-widget">
        <div class="panel-title">
          Teammates
        </div>
        <div class="panel-body">
          <ul class="basic-list image-list">
            <li><img src="img/profileimg.png" alt="img" class="img"><b>Jonathan Doe</b><span class="desc">Designer</span></li>
            <li><img src="img/profileimg2.png" alt="img" class="img"><b>Egemem Ka</b><span class="desc">Front-End Developer</span></li>
            <li><img src="img/profileimg3.png" alt="img" class="img"><b>Timmy Jefsin</b><span class="desc">Back-End Developer</span></li>
            <li><img src="img/profileimg4.png" alt="img" class="img"><b>James K. Throwing</b><span class="desc">Marketing</span></li>
            <li><img src="img/profileimg5.png" alt="img" class="img"><b>John Doe</b><span class="desc">iOS Developer</span></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Teammates -->


    <!-- Start span -->
    <div class="col-md-12 col-lg-3" style="width: 12.5%">

    </div>
    <!-- End span -->

    <!-- Start Profile Widget -->
    <div class="col-md-12 col-lg-3">
      <div class="widget profile-widget" style="height:380px;">
        <img src="img/profileimg.png" class="profile-image" alt="img">
        <h1>Jonathan Doe</h1>
        <p><i class="fa fa-map-marker"></i> London</p>
        <a href="#" class="btn btn-sm">Follow</a>
        <ul class="stats widget-inline-list clearfix">
          <li class="col-4"><span>2.109</span>Followers</li>
          <li class="col-4"><span>596</span>Photos</li>
          <li class="col-4"><span>902</span>Like</li>
        </ul>
      </div>
    </div>
    <!-- End Profile Widget -->

  </div>


  <!-- End Second Row -->



</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- Start Footer -->
<div class="row footer">

</div>
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEPANEL -->
<div role="tabpanel" class="sidepanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">TODAY</a></li>
    <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">TASKS</a></li>
    <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">CHAT</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <!-- Start Today -->
    <div role="tabpanel" class="tab-pane active" id="today">

      <div class="sidepanel-m-title">
        Today
        <span class="left-icon"><a href="#"><i class="fa fa-refresh"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-file-o"></i></a></span>
      </div>

      <div class="gn-title">NEW</div>

      <ul class="list-w-title">
        <li>
          <a href="#">
            <span class="label label-danger">ORDER</span>
            <span class="date">9 hours ago</span>
            <h4>New Jacket 2.0</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-success">COMMENT</span>
            <span class="date">14 hours ago</span>
            <h4>Bill Jackson</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-info">MEETING</span>
            <span class="date">at 2:30 PM</span>
            <h4>Developer Team</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-warning">EVENT</span>
            <span class="date">3 days left</span>
            <h4>Birthday Party</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
      </ul>

    </div>
    <!-- End Today -->

    <!-- Start Tasks -->
    <div role="tabpanel" class="tab-pane" id="tasks">

      <div class="sidepanel-m-title">
        To-do List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">TODAY</div>

      <ul class="todo-list">
        <li class="checkbox checkbox-primary">
          <input id="checkboxside1" type="checkbox"><label for="checkboxside1">Add new products</label>
        </li>
        
        <li class="checkbox checkbox-primary">
          <input id="checkboxside2" type="checkbox"><label for="checkboxside2"><b>May 12, 6:30 pm</b> Meeting with Team</label>
        </li>
        
        <li class="checkbox checkbox-warning">
          <input id="checkboxside3" type="checkbox"><label for="checkboxside3">Design Facebook page</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside4" type="checkbox"><label for="checkboxside4">Send Invoice to customers</label>
        </li>
        
        <li class="checkbox checkbox-danger">
          <input id="checkboxside5" type="checkbox"><label for="checkboxside5">Meeting with developer team</label>
        </li>
      </ul>

      <div class="gn-title">TOMORROW</div>
      <ul class="todo-list">
        <li class="checkbox checkbox-warning">
          <input id="checkboxside6" type="checkbox"><label for="checkboxside6">Redesign our company blog</label>
        </li>
        
        <li class="checkbox checkbox-success">
          <input id="checkboxside7" type="checkbox"><label for="checkboxside7">Finish client work</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside8" type="checkbox"><label for="checkboxside8">Call Johnny from Developer Team</label>
        </li>

      </ul>
    </div>    
    <!-- End Tasks -->

    <!-- Start Chat -->
    <div role="tabpanel" class="tab-pane" id="chat">

      <div class="sidepanel-m-title">
        Friend List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">ONLINE MEMBERS (3)</div>
      <ul class="group">
        <li class="member"><a href="#"><img src="img/profileimg.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status online"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg2.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status busy"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg3.png" alt="img"><b>Fred Stonefield</b>New York</a><span class="status away"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg4.png" alt="img"><b>Chris M. Johnson</b>California</a><span class="status online"></span></li>
      </ul>

      <div class="gn-title">OFFLINE MEMBERS (8)</div>
     <ul class="group">
        <li class="member"><a href="#"><img src="img/profileimg5.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status offline"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg6.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status offline"></span></li>
      </ul>

      <form class="search">
        <input type="text" class="form-control" placeholder="Search a Friend...">
      </form>
    </div>
    <!-- End Chat -->

  </div>

</div>
<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/plugins.js')}}"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/bootstrap-select/bootstrap-select.js')}}"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{URL::asset('js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js')}}"></script>
<!-- bootstrap file -->
<script type="text/javascript" src="{{URL::asset('js/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/summernote/summernote.min.js')}}"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{URL::asset('js/flot-chart/flot-chart.js')}}"></script>
<!-- time.js -->
<script type="text/javascript" src="{{URL::asset('js/flot-chart/flot-chart-time.js')}}"></script>
<!-- stack.js -->
<script type="text/javascript" src="{{URL::asset('js/flot-chart/flot-chart-stack.js')}}"></script>
<!-- pie.js -->
<script type="text/javascript" src="{{URL::asset('js/flot-chart/flot-chart-pie.js')}}"></script>
<!-- demo codes -->
<script type="text/javascript" src="{{URL::asset('js/flot-chart/flot-chart-plugin.js')}}"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{URL::asset('js/chartist/chartist.js')}}"></script>
<!-- demo codes -->
<script type="text/javascript" src="{{URL::asset('js/chartist/chartist-plugin.js')}}"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{URL::asset('js/easypiechart/easypiechart.js')}}"></script>
<!-- demo codes -->
<script type="text/javascript" src="{{URL::asset('js/easypiechart/easypiechart-plugin.js')}}"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{URL::asset('')}}js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="{{URL::asset('')}}js/sparkline/sparkline-plugin.js"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="{{URL::asset('js/rickshaw/d3.v3.js')}}"></script>
<!-- main file -->
<script src="{{URL::asset('js/rickshaw/rickshaw.js')}}"></script>
<!-- demo codes -->
<script src="{{URL::asset('js/rickshaw/rickshaw-plugin.js')}}"></script>


<!-- ================================================
Data Tables
================================================ -->
<script src="{{URL::asset('js/datatables/datatables.min.js')}}"></script>


  <script>
    $(document).ready(function() {
      $('#example0').DataTable();
    } );
  </script>



  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable({
        "columnDefs": [
          { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
          var api = this.api();
          var rows = api.rows( {page:'current'} ).nodes();
          var last=null;

          api.column(2, {page:'current'} ).data().each( function ( group, i ) {
            if ( last !== group ) {
              $(rows).eq( i ).before(
                      '<tr class="group"><td colspan="5">'+group+'</td></tr>'
              );

              last = group;
            }
          } );
        }
      } );

      // Order by the grouping
      $('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
          table.order( [ 2, 'desc' ] ).draw();
        }
        else {
          table.order( [ 2, 'asc' ] ).draw();
        }
      } );
    } );
  </script>



  <!-- ================================================
  Sweet Alert
  ================================================ -->
<script src="{{URL::asset('js/sweet-alert/sweet-alert.min.js')}}"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="{{URL::asset('js/kode-alert/main.js')}}"></script>

<!-- ================================================
Gmaps
================================================ -->
<!-- google maps api -->
<script src="{{URL::asset('http://maps.google.com/maps/api/js?sensor=true')}}"></script>
<!-- main file -->
<script src="{{URL::asset('js/gmaps/gmaps.js')}}"></script>
<!-- demo codes -->
<script src="{{URL::asset('js/gmaps/gmaps-plugin.js')}}"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/moment/moment.min.js')}}"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/full-calendar/fullcalendar.js')}}"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="{{URL::asset('js/date-range-picker/daterangepicker.js')}}"></script>

<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->
<script>

// set up our data series with 50 random data points

var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(20);

for (var i = 0; i < 110; i++) {
  random.addData(seriesData);
}

// instantiate our graph!

var graph = new Rickshaw.Graph( {
  element: document.getElementById("todaysales"),
  renderer: 'bar',
  series: [
    {
      color: "#33577B",
      data: seriesData[0],
      name: 'Photodune'
    }, {
      color: "#77BBFF",
      data: seriesData[1],
      name: 'Themeforest'
    }, {
      color: "#C1E0FF",
      data: seriesData[2],
      name: 'Codecanyon'
    }
  ]
} );

graph.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
  formatter: function(series, x, y) {
    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
    return content;
  }
} );

</script>

<!-- Today Activity -->
<script>
// set up our data series with 50 random data points

var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(20);

for (var i = 0; i < 50; i++) {
  random.addData(seriesData);
}

// instantiate our graph!

var graph = new Rickshaw.Graph( {
  element: document.getElementById("todayactivity"),
  renderer: 'area',
  series: [
    {
      color: "#9A80B9",
      data: seriesData[0],
      name: 'London'
    }, {
      color: "#CDC0DC",
      data: seriesData[1],
      name: 'Tokyo'
    }
  ]
} );

graph.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
  formatter: function(series, x, y) {
    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
    return content;
  }
} );
</script>






</body>
</html>