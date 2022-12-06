<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daily Quiz | Qearner - Learn More Earn More - Admin Panel </title>
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
        </script>        <style>
            #sortable-row li { margin-bottom:4px; padding:10px; background-color:#ededed;cursor:move;} 
            #sortable-row li.ui-state-highlight { height: 1.0em; background-color:#F0F0F0;border:#ccc 2px dotted;}
        </style>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                                <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title text-center" style="border: 0;">
                    <img src="images/logo.png" alt="logo" width="230" class="md">
                    <img src="images/logo-half.png" alt="logo" width="56" class="sm">
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
                    <br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Daily Quiz <small>Create New Quiz</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">                                   

                                    <div class='row'>
                                                                                                                            <div class='col-md-3'>
                                                <select id='filter_language_id' class='form-control' required>
                                                    <option value=''>Select Language</option>
                                                                                                            <option value='22'>15</option>
                                                                                                            <option value='21'>Português</option>
                                                                                                            <option value='20'>Yy</option>
                                                                                                            <option value='19'>indonesia</option>
                                                                                                            <option value='18'>id</option>
                                                                                                            <option value='17'>Bengali</option>
                                                                                                            <option value='15'>arab</option>
                                                                                                            <option value='13'>Hindi </option>
                                                                                                            <option value='12'>Urdu</option>
                                                                                                            <option value='9'>English</option>
                                                                                                    </select>
                                            </div>
                                                                                <div class='col-md-3'>
                                                                                        <select id='filter_category' class='form-control' required>
                                                <option value=''>Select Main Category</option>
                                                                                                    <option value='5'>Sports</option>
                                                                                                    <option value='6'>Science</option>
                                                                                                    <option value='7'>Music</option>
                                                                                                    <option value='8'>News</option>
                                                                                                    <option value='19'>Criptomonedas</option>
                                                                                                    <option value='22'>لاہور * وزیراعلیٰ پنجاب چودھری پرویز الٰہی کی زیر صدارت اعلی سطح کا اجلاس  وزیراعلیٰ چودھری پرویز الٰہی کونشتر ہسپتال ملتان کی چھت پر لاشیں پھینکنے کے واقعہ کے بارے میں ابتدائی انکوائری رپورٹ پیش کی گئی  وزیراعلیٰ چودھری پرویز الٰہی کاانکوائری رپورٹ </option>
                                                                                                    <option value='23'>پاکستان تحریک انصاف کے چیئرمین عمران خان نے کہا ہے کہ وہ حکومت کو چند روز کا وقت دے رہے ہیں جس کے بعد وہ لانگ مارچ کا اعلان کریں اور لانگ مارچ اکتوبر ہی میں ہوگا۔</option>
                                                                                                    <option value='24'>حکمران اتحاد کے امیدواروں کی شکست کے بعد پی ڈی ایم کے انتخابی اتحاد کا مستقبل کیا ہوگا اور حکومتی اتحاد کو برقرار رکھنا شہباز شریف کے لیے کتنا بڑا چیلنج ہوگا۔</option>
                                                                                                    <option value='25'>آئی سی سی ٹی20 ورلڈ کپ کے وارم اپ میچ میں انگلینڈ نے پاکستان کو چھ وکٹوں سے شکست دی۔</option>
                                                                                                    <option value='26'>لیگ اسپنر عثمان قادر کی جگہ فخر زمان 15 رکنی قومی ٹی ٹونٹی ورلڈکپ اسکواڈ میں شامل کر لیا ہے مزید پڑھیں: https://urdu.geo.tv/latest/303021- #GeoNews #PCB #cricket</option>
                                                                                                    <option value='27'>Sports</option>
                                                                                                    <option value='28'>pongo</option>
                                                                                                    <option value='29'>erdgt</option>
                                                                                                    <option value='30'>ewrwerwerewwe</option>
                                                                                                    <option value='31'>drtdrt</option>
                                                                                                    <option value='32'>Fjdj</option>
                                                                                                    <option value='34'>Hindi</option>
                                                                                                    <option value='35'>Gerneal Science</option>
                                                                                                    <option value='36'>DEPORTES</option>
                                                                                                    <option value='41'>makanan</option>
                                                                                                    <option value='42'>edg</option>
                                                                                                    <option value='43'>Math</option>
                                                                                            </select>
                                        </div>
                                        <div class='col-md-3'>
                                            <select id='filter_subcategory' class='form-control' required>
                                                <option value=''>Select Sub Category</option>
                                            </select>
                                        </div>
                                        <div class='col-md-3'>
                                            <button class='btn btn-primary btn-block' id='filter_btn'>Filter Questions</button>
                                        </div>
                                    </div>
                                    <div class='col-md-12'>
                                        <hr>
                                    </div>
                                    <h2>Create New Quiz</h2>
                                    <div class='col-md-12'>
                                        <hr>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <h4><strong>Select Questions for Daily Quiz</strong></h4>
                                            <table aria-describedby="mydesc" class='table-striped' id='questions'
                                                   data-toggle="table"
                                                   data-url="get-list.php?table=question"
                                                   data-click-to-select="true"
                                                   data-side-pagination="server"
                                                   data-pagination="true"
                                                   data-page-list="[5, 10, 20, 50, 100, 200]"
                                                   data-search="true" data-show-columns="true"
                                                   data-show-refresh="true" data-trim-on-search="false"
                                                   data-sort-name="id" data-sort-order="desc"
                                                   data-mobile-responsive="true"
                                                   data-toolbar="#toolbar" data-show-export="false"
                                                   data-maintain-selected="true"
                                                   data-export-types='["txt","excel"]'
                                                   data-export-options='{
                                                   "fileName": "questions-list-20-11-22",
                                                   "ignoreColumn": ["state"]	
                                                   }'
                                                   data-query-params="queryParams_1"
                                                   >
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-field="state" data-checkbox="true"></th>
                                                        <th scope="col" data-field="id" data-sortable="true">ID</th>
                                                        <th scope="col" data-field="category" data-sortable="true" data-visible='false'>Category</th>
                                                        <th scope="col" data-field="subcategory" data-sortable="true" data-visible='false'>Sub Category</th>
                                                        <th scope="col" data-field="question" data-sortable="true">Question</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="col-md-1">
                                            <label class="control-label" for="add_question">Add</label>
                                            <a href="#" id="add_question" class="btn btn-success form-control"><i class="fa fa-chevron-circle-right"></i></a>
                                        </div>
                                        <div class='col-md-5'>
                                            <h4><strong>Selected Questions</strong></h4>
                                            
                                            <form id="daily_quiz_form" method="POST" action="db_operations.php" data-parsley-validate class="form-horizontal form-label-left">
                                                <input type="hidden" id="update_daily_quiz_order" name="update_daily_quiz_order" required value='1'/>

                                                <div class="form-group">
                                                                                                            <label class="control-label " for="language">Language</label><br>
                                                        <div class='row'>
                                                            <div class="col-md-12">
                                                                <select id="language_id" name="language_id" required class="form-control">
                                                                                                                                            <option value='22'>15</option>
                                                                                                                                            <option value='21'>Português</option>
                                                                                                                                            <option value='20'>Yy</option>
                                                                                                                                            <option value='19'>indonesia</option>
                                                                                                                                            <option value='18'>id</option>
                                                                                                                                            <option value='17'>Bengali</option>
                                                                                                                                            <option value='15'>arab</option>
                                                                                                                                            <option value='13'>Hindi </option>
                                                                                                                                            <option value='12'>Urdu</option>
                                                                                                                                            <option value='9'>English</option>
                                                                                                                                    </select>
                                                            </div>
                                                        </div>
                                                                                                        <label class="control-label" for="add_question">Title</label>

                                                    <input type="date" id="daily_quiz_date" name="daily_quiz_date" value="2022-11-20" class='form-control'/>

                                                    <div id='questions_block' class="form-group" style="overflow-y:scroll;height:500px;">
                                                        <input type = "hidden" name="question_ids" id="question_ids" required readonly/> 
                                                        <ol id="sortable-row">
                                                        </ol>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <button type="submit" id="submit_btn" class="btn btn-success">Save</button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div style ="display:none;" id="result"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>                <!-- /footer content -->
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script>
            $(document).ready(function () {
                var language_id = $('#language_id').val();
                load_sortable_ui('2022-11-20', language_id);
            });

            $('#daily_quiz_date, #language_id').on('change', function (e) {
                e.preventDefault();
                date = $('#daily_quiz_date').val();
                var language_id = $('#language_id').val();
                load_sortable_ui(date, language_id);
            });

            function load_sortable_ui(date, language_id) {
                var selected_date = date;

                $.ajax({
                    type: 'POST',
                    url: "db_operations.php",
                    data: 'get_selected_date=1&selected_date=' + selected_date + '&language_id=' + language_id,
                    beforeSend: function () {
                        $('#questions_block').block({message: '<img src="images/loading.gif"/><h4>Please wait  Loading.. .</h4>'});
                    },
                    success: function (response) {
                        var obj = JSON.parse(response);

                        $('#sortable-row').html(obj.questions_list);
                        if (obj.language_id != '') {
                            $('#language_id').val(obj.language_id);
                        }
                        $('#questions_block').unblock();
                    }
                });
            }
        </script>
        <script>
            $('#daily_quiz_form').on('submit', function (e) {

                e.preventDefault();
                var selectedLanguage = new Array();
                $('ol#sortable-row li').each(function () {
                    selectedLanguage.push($(this).attr("id"));
                });
                $("#question_ids").val(selectedLanguage);
                var formData = new FormData(this);

                if ($("#question_ids").val() == '') {
                    alert('Please Select some questions and proceed ');
                    return false;
                }
                if ($("#daily_quiz_form").validate().form()) {
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
                            $('#result').show().delay(5000).fadeOut();
                            $('#submit_btn').html('Save');
                        }
                    });
                }
            });
        </script>
        <script>
            $(function () {
                $("#sortable-row").sortable({
                    placeholder: "ui-state-highlight"
                });
            });
            var $table = $('#questions');
            $('#add_question').on('click', function (e) {
                e.preventDefault();
                var questions = $table.bootstrapTable('getSelections');
                li = '';
                $.each(questions, function (i, v) {
                    li = $("<li id='" + questions[i].id + "'' class='ui-state-default'/>").text(questions[i].id + ". " + questions[i].question).append("<a class='btn btn-danger btn-xs remove-row pull-right'>x</a>");
                    var pasteItem = checkList("sortable-row", li);
                    if (pasteItem) {
                        $("#sortable-row").append(li);
                        $("#sortable-row").sortable('refresh');
                    }
                });
                $('#no_questions').remove();
            });
            function checkList(listName, newItem) {
                var dupl = false;
                $("#" + listName + " > li").each(function () {
                    if ($(this)[0] !== newItem[0]) {
                        if ($(this).html() == newItem.html()) {
                            dupl = true;
                        }
                    }
                });
                return !dupl;
            }
            $(document).on('click', '.remove-row', function (e) {
                e.preventDefault();
                $(this).closest('li').remove();
                $("#sortable-row").sortable('refresh');
            });
        </script>
        <script>
            $('#filter_btn').on('click', function (e) {
                $('#questions').bootstrapTable('refresh');
            });
            var $table = $('#questions');
            $('#toolbar').find('select').change(function () {
                $table.bootstrapTable('refreshOptions', {
                    exportDataType: $(this).val()
                });
            });
            function queryParams_1(p) {
                return {
                    "language": $('#filter_language_id').val(),
                    "category": $('#filter_category').val(),
                    "subcategory": $('#filter_subcategory').val(),
                    limit: p.limit,
                    sort: p.sort,
                    order: p.order,
                    offset: p.offset,
                    search: p.search
                };
            }
        </script>
        <script>
            $('#filter_category').on('change', function (e) {
                var category_id = $('#filter_category').val();
                $.ajax({
                    type: 'POST',
                    url: "db_operations.php",
                    data: 'get_subcategories_of_category=1&category_id=' + category_id,
                    beforeSend: function () {
                        $('#filter_subcategory').html('<option>Please wait..</option>');
                    },
                    success: function (result) {
                        $('#filter_subcategory').html(result);
                    }
                });
            });
        </script>
                    <script>
                $('#filter_language_id').on('change', function (e) {
                    var language_id = $('#filter_language_id').val();
                    $.ajax({
                        type: 'POST',
                        url: "db_operations.php",
                        data: 'get_categories_of_language=1&language_id=' + language_id,
                        beforeSend: function () {
                            $('#filter_category').html('<option>Please wait..</option>');
                        },
                        success: function (result) {
                            $('#filter_category').html(result);
                            $('#filter_subcategory').html('<option>Select Sub Category</option>');
                        }
                    });
                });
            </script>
        
    </body>
</html>
