<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" type="text/css" href="css/css.css" >
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet">
	 <link href="css/demo.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/awesome.min.css">

	 <style>
	 	.block {
  background: url("images/bg.jpg");

  background-repeat: no-repeat;
  height: 10px;
  width: 100%;
  color: $white;
  
}
.lol{

}
.top{
  margin-top: 72px;
}
.table .bold th{
  font-weight: bold;
}
	 </style>
	 
</head>
<body class="">
	<div class="wrapper">
		<div class="sidebar top" data-color="azure" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

		<div class="logo">
			<a href="index.php" class="simple-text logo-normal" data-image="img/sidebar-1.jpg">
          		<span>
                      <img src="images/logo.png" alt="" height="60">
                 </span>
        	</a>

        </div>
        	<div class="sidebar-wrapper">
        		<ul class="nav"> 
        			<li class="nav-item active">
        				<a class="nav-link" href="#">
              				<i class="material-icons">home</i>
              				<p>Dashboard</p>
            			</a>
        			</li>
        			<li class="nav-item ">
           				 <a class="nav-link" href="./user.html">
              				<i class="material-icons">person</i>
           				   	<p>User Profile</p>
           				 </a>
        			 </li>
        		</ul>
        	</div>
    	
			
		</div>
 
		<div class="main-panel">
			<!-- Navbar -->
		<nav class="navbar navbar-expand-lg fixed-top">
        	<div class="container-fluid">
          <div class="navbar-wrapper">
          	<i class="material-icons">home</i>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-info btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Christopher responded to your email</a>
                  <a class="dropdown-item" href="#">You have 4 new tasks</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Christopher <img src="images/img.jpg" alt="user" class="rounded-circle" width="32">
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- ens nav -->
      	<div class="content">
      		<div class="container-fluid">
      			<div class="row">
      				<div class="col-lg-3 col-md-6 col-sm-6">
              			<div class="card card-stats" style="background-color: #F0F8FF">
                			<div class="card-header card-header-primary card-header-icon">
                  				<div class="card-icon">
                   					<i class="material-icons">grid_on</i>
                  				</div>
                  				<h4 class="card-title" style="font-weight: bold; opacity: .5">Back Logs</h4>
                  				<h3 class="card-title">
                    			<small style="opacity: .8">10</small>
                  				</h3>
                			</div>
                			<div class="card-footer">
                  				<div class="stats">
                    				<a class=""><span class="badge badge-success">-12% </span> </a>
                    				<a href="javascript:;"  style="color: gray">From previous period</a>
                  				</div>
                			</div>
              			</div>
            		</div>
            		<div class="col-lg-3 col-md-6 col-sm-6">
              			<div class="card card-stats" style="background-color: #F0F8FF">
                			<div class="card-header card-header-success card-header-icon">
                  				<div class="card-icon">
                    				<i class="material-icons">layers</i>
                  				</div>
                  				<h4 class="card-title" style="font-weight: bold; opacity: .5">Revenue</h4>
                  				<h3 class="card-title"><small>1</small></h3>
                			</div>
                			<div class="card-footer">
                  				<div class="stats">
                  					<a class=""><span class="badge badge-success">-32% </span> </a>
                   					<a href="" style="color: gray">From previous period </a>
                  				</div>
                			</div>
              			</div>
            		</div>
            		<div class="col-lg-3 col-md-6 col-sm-6">
              			<div class="card card-stats" style="background-color: #F0F8FF">
                			<div class="card-header card-header-danger card-header-icon">
                  				<div class="card-icon">
                    				<i class="material-icons">assignment</i>
                  				</div>
                  				<h4 class="card-title" style="font-weight: bold; opacity: .5">Pending</h4>
                  				<h3 class="card-title"><small>1</small></h3>
                			</div>
                			<div class="card-footer">
                  				<div class="stats">
                  					<a class=""><span class="badge badge-success">-32% </span> </a>
                   					<a href="" style="color: gray">From previous period </a>
                  				</div>
                			</div>
              			</div>
            		</div>
            		<div class="col-lg-3 col-md-6 col-sm-6">
              			<div class="card card-stats" style="background-color: #F0F8FF">
                			<div class="card-header card-header-info card-header-icon">
                  				<div class="card-icon">
                    				<i class="material-icons">check_box</i>
                  				</div>
                  				<h4 class="card-title" style="font-weight: bold; opacity: .5">Completed</h4>
                  				<h3 class="card-title"><small>1</small></h3>
                			</div>
                			<div class="card-footer">
                  				<div class="stats">
                  					<a class=""><span class="badge badge-success">-32% </span> </a>
                   					<a href="" style="color: gray">From previous period </a>
                  				</div>
                			</div>
              			</div>
            		</div>
            		  <div class="col-md-12">
              			<div class="card card-chart">
                			<div class="card-header card-header-primary">
                  				<div class="ct-chart input-group" id="websiteViewsChart">
                            <div class="col-md-3">
                              <h4 style="font-weight: bold;">BACK LOGS</h4>
                            </div>
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                              <button type="button" class="float-right btn btn-success btn-round" data-toggle="modal" data-target="#exampleModal">Add Task</button>
                            </div>
                          </div>
                			</div>
                			<div class="card-body">
                  				<div class="table">
                  					<table id="example" class="table table-striped">
                  						<thead>
                  							<tr class="bold">
                  								<th>ID(#)</th>
                  								<th>Task Name</th>
                  								<th>Task Created</th>
                  								<th>Due Date</th>
                  								<th>Completion</th>
                  								<th>Priority</th>
                  							</tr>
                  						</thead>
                  						<tbody>
                  							<tr>
                  								<td>#</td>
                  								<td>#</td>
                  								<td>#</td>
                  								<td>#</td>
                  								<td>#</td>
                  								<td>#</td>
                  							</tr>
                                <tr>
                                  <td>#</td>
                                  <td>#</td>
                                  <td>#</td>
                                  <td>#</td>
                                  <td>#</td>
                                  <td>#</td>
                                </tr>
                                <tr>
                                  <td>#</td>
                                  <td>#</td>
                                  <td>#</td>
                                  <td>#</td>
                                  <td>#</td>
                                  <td>#</td>
                                </tr>
                  						</tbody>
                  					</table>
                  				</div>
                			</div>
                			<div class="card-footer">
                 		 		<div class="stats">
                    				<i class="material-icons">access_time</i> records Updated ( 2 days ago )
                  				</div>
                			</div>
              			</div>
            		</div>
           
          		</div>
      			</div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <div class="modal-body">
                       ...
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                  </div>
              </div>
            </div>
      		</div>
      	</div>
		</div>
	</div>
	<!-- jQuery core -->
	<script src="js/core/jquery.min.js"></script>
  <script src="js/core/jquery-3.5.1"></script>
	<script src="js/core/popper.min.js"></script>
	<script src="js/core/bootstrap-material-design.min.js"></script>
	<!-- plugins -->
	<script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<script src="js/plugins/moment.min.js"></script>
	<script src="js/plugins/sweetalert2.js"></script>
	<script src="js/plugins/jquery.validate.min.js"></script>
	<script src="js/plugins/jquery.bootstrap-wizard.js"></script>
	<script src="js/plugins/bootstrap-selectpicker.js"></script>
	<script src="js/plugins/bootstrap-datetimepicker.min.js"></script>
	<script src="js/plugins/jquery.dataTables.min.js"></script>
  <script src="js/plugins/dataTables.bootstrap4.min"></script>
	<script src="js/plugins/bootstrap-tagsinput.js"></script>
	<script src="js/plugins/jasny-bootstrap.min.js"></script>
	<script src="js/plugins/fullcalendar.min.js"></script>
	<script src="js/plugins/jquery-jvectormap.js"></script>
	<script src="js/plugins/nouislider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
	<script src="cdn/core.js"></script>
	<script src="js/plugins/arrive.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="cdn/js.js"></script>
	<script src="js/plugins/chartist.min.js"></script>
	<script src="js/plugins/bootstrap-notify.js"></script>
	<script src="js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
	<script src="core/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
    $(document).ready(function() {
    $('#example').DataTable();
	} );
  </script>

</body>
</html>