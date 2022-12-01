<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thông tin người dùng | Frog Quiz - Admin Panel </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- FavIcon -->
        <link rel="icon"  type="image/png"  href="images/logo-half.png" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- NProgress -->
        <link href="css/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="css/animate.min.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="css/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="css/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/daterangepicker.min.css" />
        <!-- Light Box CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" integrity="sha256-tBxlolRHP9uMsEFKVk+hk//ekOlXOixLKvye5W2WR5c=" crossorigin="anonymous" />
        <!-- Custom Theme Style -->
        <link href="css/custom.min.css" rel="stylesheet">
        <!-- Custom Style -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

        <!--  dropzone css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css" />
        <!-- Latest compiled and minified CSS - http://bootstrap-table.wenzhixin.net.cn/getting-started/ -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

        <script src="js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/extensions/reorder-rows/bootstrap-table-reorder-rows.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/extensions/reorder-rows/bootstrap-table-reorder-rows.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/TableDnD/1.0.3/jquery.tablednd.js"></script>

        <script src="https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/extensions/export/bootstrap-table-export.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/extensions/mobile/bootstrap-table-mobile.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.4/tinymce.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" integrity="sha256-2kJr1Z0C1y5z0jnhr/mCu46J3R6Uud+qCQHA39i1eYo=" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js" integrity="sha256-CgrKEb54KXipsoTitWV+7z/CVYrQ0ZagFB3JOvq2yjo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />
        <script>
            function conf(msg) {
                if (typeof (msg) === 'undefined')
                    msg = 'proceed';
                if (confirm('Are you sure?\nWant to ' + msg + '?')) {
                } else
                    return false;
            }
        </script>    </head>
        
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                                <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title text-center" style="border: 0;">
                    <img src="images/logo.png" alt="logo" width="230" class="md">
                    <!-- <img src="images/logo-half.png" alt="logo" width="56" class="sm"> -->
                </div>
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
               
                <!-- /menu profile quick info -->
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">

                        <ul class="nav side-menu">
                            <li><a href ="{{ route('home')}}"><em class="fas fa-home"></em> Dashboard</a></li>
                            <li><a href ="{{ route('users')}}"><em class="fas fa-users"></em> Người dùng</a></li>
                            <li>
                                <a><em class="fas fa-th"></em> Bảng xếp hạng<span class="fas fa-caret-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('global-leaderboard') }}">Tất cả</a></li>
                                    <li><a href="{{ route('monthly-leaderboard') }}">Tháng</a></li>
                                    <li><a href="{{ route('daily-leaderboard') }}">Ngày</a></li>                                       
                                </ul>
                            </li>                                   
                            <li>
                                <a href="{{ route('category') }}"><em class="fas fa-gift"></em> Lĩnh vực </a>
                                <!-- <ul class="nav child_menu">
                                    <li><a href="main-category.php">Main Category</a></li>
                                    <li><a href="sub-category.php">Sub Category</a></li>
                                    <li><a href="category-order.php">Category Order</a></li>
                                </ul> -->
                            </li>
                            <li>
                                <a><em class="fas fa-trophy"></em> Câu đố<span class="fas fa-caret-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ route('add-questions') }}">Tạo câu đố</a></li>
                                    <li><a href="{{ route('view-questions') }}">Xem câu đố</a></li>
                                   
                                </ul>
                            </li>
                           
                            <li><a href="{{ route('question-packs') }}"><em class="fas fa-question"></em> Gói câu đố</a></li>
                            <!-- <li>
                                <a><i class="fas fa-gift"></i> Contests<span class="fas fa-caret-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="contest.php"><i class="fas fa-gift"></i> Manage Contest</a></li>
                                    <li><a href="contest-questions.php"><i class="fas fa-question-circle"></i> Manage Questions</a></li>
                                    <li><a href="contest-questions-import.php"><i class="fas fa-upload"></i> Import Questions</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a href="activity-tracker.php"><i class="far fa-chart-bar"></i> Activity Tracker</a></li> -->
					        <li><a href="{{ route('payment-requests') }}"><i class="fas fa-rupee-sign"></i> Yêu cầu thanh toán</a></li>
                            <li><a href="{{ route('question-reports') }}"><em class="far fa-question-circle"></em> Báo cáo câu hỏi</a></li>
                            <li><a href="{{ route('send-notifications') }}"><em class="fas fa-bullhorn"></em> Gửi thông báo</a></li>
                            <!-- <li><a href="import-questions.php"><em class="fas fa-upload"></em> Import Questions</a></li> -->
                            <!-- <li><a href="user-accounts-rights.php"><em class="fas fa-user"></em> User Accounts and Rights</a></li> -->
                                <!-- <li>
                                    <a><em class="fas fa-cog"></em> Settings<span class="fas fa-caret-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="payment-settings.php">Payment Settings</a></li>
                                        <li><a href="custom-coins.php">Custom Coin </a></li>
                                        <li><a href="system-configurations.php">System Configurations</a></li>
                                        <li><a href="notification-settings.php">Notification Settings</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="instructions.php">Instructions</a></li>
                                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                        <li><a href="terms-conditions.php">Terms Conditions</a></li>     
                                        <li><a href="system-update.php">Update System</a></li>  
                                        <li><a href="upload-firebase-json.php">Upload Firebase Json</a></li>                                        
                                    </ul>
                                </li> -->
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><em class="fa fa-bars"></em></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Admin                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{ route('re-password') }}"><em class="fa fa-key pull-right"></em> Đổi mật khẩu</a></li>
                                <li><a href="{{ route('logout') }}"><em class="fas fa-sign-out-alt pull-right"></em> Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->                <!-- page content -->
                <div class="right_col" role="main">
                    <!-- top tiles -->
                    <br />
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Thông tin người dùng </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div id="toolbar">
                                        <!-- <select id='export_select' class="form-control" >
                                            <option value="basic">Export This Page</option>

                                            <option value="selected">Export Selected</option>
                                        </select> -->
                                    </div>
                                    <!-- <table  aria-describedby="mydesc" class='table-striped' id='users_list'
                                            data-toggle="table"
                                            data-url="get-list.php?table=users"
                                            data-click-to-select="true"
                                            data-side-pagination="server"
                                            data-pagination="true"
                                            data-page-list="[5, 10, 20, 50, 100, 200]"
                                            data-search="true" data-show-columns="true"
                                            data-show-refresh="true" data-trim-on-search="false"
                                            data-sort-name="id" data-sort-order="desc"
                                            data-mobile-responsive="true"
                                            data-toolbar="#toolbar" data-show-export="true"
                                            data-maintain-selected="true"
                                            data-export-types='["txt","excel"]'
                                            data-export-options='{
                                            "fileName": "users-list-20-11-22",
                                            "ignoreColumn": ["state"]
                                            }'
                                            data-query-params="queryParams_1"
                                            >
                                        <thead>
                                            <tr>
                                                <th scope="col" data-field="state" data-checkbox="true"></th>
                                                <th scope="col" data-field="id" data-sortable="true">ID</th>
                                                <th scope="col" data-field="profile" data-sortable="false">Ảnh</th>
                                                <th scope="col" data-field="name" data-sortable="true">Tên</th>
                                                <th scope="col" data-field="email" data-sortable="true">Email</th>
                                                <th scope="col" data-field="mobile" data-sortable="true">SDT</th>
                                                <th scope="col" data-field="type" data-sortable="false">Giới tính</th>
                                                <th scope="col" data-field="coins" data-sortable="true" >Coins</th>
                                                <th scope="col" data-field="refer_code" data-sortable="true" data-visible="false">Refer Code</th>
                                                <th scope="col" data-field="friends_code" data-sortable="true" data-visible="false">Friends Code</th>
                                                <th scope="col" data-field="fcm_id" data-sortable="true" data-visible="false">FCM ID</th>

                                                <th scope="col" data-field="status" data-sortable="false">Trạng thái</th>
                                                <th scope="col" data-field="date_registered" data-sortable="true">Ngày tạo</th>
                                                <th scope="col" data-field="operate" data-events="actionEvents">Operate</th>
                                            </tr>
                                        </thead>
                                    </table> -->
                                    <table class="content-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Ảnh</th>
                                                <th>Tên</th>
                                                <th>Email</th>
                                                <th>SDT</th>
                                                <th>Giới tính</th>
                                                <th>Điểm</th>
                                                <th>Trạng thái</th>
                                                <th>Ngày tạo</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($list_user as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->image}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->gender}}</td>
                                                <td>{{$user->score}}</td>
                                                <td>{{$user->status}}</td>
                                                <td>{{$user->created_at}}</td>
                                                <td>
                                                    <button type="submit" value="{{$user->id}}" class="btn btn-primary editbtn btn-sm">Khóa</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <div class="modal fade" id='editUserModal' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Update User Status</h4>
                        </div>
                        <div class="modal-body">
                            <form id="update_form"  method="POST" action ="db_operations.php" data-parsley-validate class="form-horizontal form-label-left">
                                <input type='hidden' name="user_id" id="user_id" value=''/>
                                <input type='hidden' name="update_user" id="update_user" value='1'/>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="status" class="btn-group" >
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="status" value="0">  Deactive
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="status" value="1"> Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" id="submit_btn" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div  class="col-md-offset-3 col-md-8" style ="display:none;" id="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



             <!-- coins modal -->

             <div class="modal fade" id='coinsmodal' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">How much coins you want to give </h4>
                        </div>
                        <div class="modal-body">
                            <form id="coin_form"  method="POST" action ="db_operations.php" data-parsley-validate class="form-horizontal form-label-left">
                                <input type='hidden' name="user_id_coin" id="user_id_coin" value=''/>
                                <input type='hidden' name="update_user1" id="update_user1" value='1'/>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Coins</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="coins" class="btn-group" >
                                         <!-- <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default"> -->
                                                <input type="number" name="coins">
                                             <!-- </label>  -->

                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" id="submit_btn1" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div  class="col-md-offset-3 col-md-8" style ="display:none;" id="result1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Copyright © <script type="text/javascript">document.write(new Date().getFullYear() - 1);</script>-<script type="text/javascript">document.write(new Date().getFullYear());</script> Made By <a href="https://wrteam.in" target='_blank' rel="noopener noreferrer">WRTeam</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
            <!-- Bootstrap -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

            <!-- NProgress -->
            <script src="js/nprogress.js"></script>
            <!-- bootstrap-progressbar -->
            <script src="js/bootstrap-progressbar.min.js"></script>
            <!-- iCheck -->
            <script src="js/icheck.min.js"></script>
            <!-- Including LightBox Plugin Delete if not using -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js" integrity="sha256-CtKylYan+AJuoH8jrMht1+1PMhMqrKnB8K5g012WN5I=" crossorigin="anonymous"></script>
            <!-- Including Foundation Plugin Delete if not using -->
            <script src="js/foundation.min.js"></script>
            <!-- Skycons -->
            <!-- DateJS -->
            <script src="js/date.js"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/moment.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/daterangepicker.min.js"></script>
            <!-- Custom Theme Scripts -->
            <script src="js/custom.min.js"></script>
            <!-- Dropzone css -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
            <!-- Sweet Alert 2  -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>            <!-- /footer content -->
        </div>

        <!-- jQuery -->
        <script>
            var $table = $('#users_list');
            $('#toolbar').find('select').change(function () {
                $table.bootstrapTable('refreshOptions', {
                    exportDataType: $(this).val()
                });
            });
        </script>
        <script>
            function queryParams_1(p) {
                return {
                    "status": $('#filter_status').val(),
                    limit: p.limit,
                    sort: p.sort,
                    order: p.order,
                    offset: p.offset,
                    search: p.search
                };
            }
        </script>
        <script>
            $('#report_form').on('submit', function (e) {
                e.preventDefault();
                $('#users_list').bootstrapTable('refresh');
            });
        </script>
        <script>
            window.actionEvents = {
                'click .edit-users': function (e, value, row, index) {
                    // alert('You click remove icon, row: ' + JSON.stringify(row));
                    $("input[name=status][value=1]").prop('checked', true);
                    if ($(row.status).text() == 'Deactive')
                        $("input[name=status][value=0]").prop('checked', true);
                    $('#user_id').val(row.id);
                },
                'click .admin-coin': function (e, value, row, index) {


            $('#user_id_coin').val(row.id);
            }
            };
        </script>






        <script>
            $('#update_form').validate({
                rules: {
                    status: "required",
                }
            });
        </script>
        <script>
            $('#update_form').on('submit', function (e) {
                e.preventDefault();
             
                var formData = new FormData(this);
                if ($("#update_form").validate().form()) {
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        beforeSend: function () {
                            $('#submit_btn').html('Please wait..');
                        },
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            $('#result').html(result);
                            $('#result').show().delay(3000).fadeOut();
                            $('#submit_btn').html('Submit');
                            $('#users_list').bootstrapTable('refresh');
                            setTimeout(function () {
                                $('#editUserModal').modal('hide');
                                $('#coinsmodal').modal('hide');
                            }, 4000);
                        }
                    });
                }
            });
        </script>


        <script>
            $('#coin_form').on('submit', function (e) {
                e.preventDefault();
             
                var formData = new FormData(this);
               
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        beforeSend: function () {
                            $('#submit_btn1').html('Please wait..');
                        },
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            $('#result1').html(result);
                            $('#result1').show().delay(3000).fadeOut();
                            $('#submit_btn1').html('Submit');
                            $('#users_list').bootstrapTable('refresh');
                            setTimeout(function () {
                                $('#coinsmodal').modal('hide');
                            }, 4000);   
                            
                        }
                    });
                
            });
        </script>
    <script>
        function showErrorToast(message) {
    $.toast({
        text: message,
        showHideTransition: 'slide',
        icon: 'error',
        loaderBg: '#f2a654',
        position: 'top-right'
    });
}

function showSuccessToast(message) {
    $.toast({
        text: message,
        showHideTransition: 'slide',
        icon: 'success',
        loaderBg: '#f96868',
        position: 'top-right'
    });
}
        </script>

    </body>
</html>