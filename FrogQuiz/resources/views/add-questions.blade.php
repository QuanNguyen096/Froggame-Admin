<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tạo câu đố | Admin Panel </title>
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
        </script>    </head>
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
                    <br />
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Tạo câu đố </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row">
                                        <form method="post" action="{{ route('add-questions-action') }}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="novalidate">
                                            @csrf
                                                <div class="form-group">
                                                <label class="control-label col-md-1 col-sm-3 col-xs-12" for="category">Lĩnh vực</label>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <select name='category' id='category' class='form-control' required>
                                                        <option value=''>Chọn lĩnh vực</option>
                                                        @foreach($list_category as $row)
                                                            <option value='{{ $row->id }}'> {{$row->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-1 col-sm-3 col-xs-12" for="question">Câu đố</label>
                                                <div class="col-md-10 col-sm-6 col-xs-12">
                                                    <textarea id="question" name="question" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="control-label col-md-1 col-sm-3 col-xs-12" for="image">Image <small>( if any )</small></label>
                                                <div class="col-md-10 col-sm-6 col-xs-12">
                                                    <input type="file" id="image" name="image" class="form-control" aria-required="true">
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <label class="control-label col-md-1 col-sm-3 col-xs-12" for="answer type">Question Type</label>
                                                <div class="col-md-8 col-sm-6 col-xs-12">                                                     
                                                    <div id="status" class="btn-group">
                                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="question_type" value="1" checked=""> Options 
                                                        </label>
                                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="question_type" value="2"> True / False
                                                        </label>                                                        
                                                    </div>
                                                </div>
                                            </div> -->
                                            
                                            <div class="form-group">
                                                <label for="a" class="control-label col-md-1 col-sm-3 col-xs-12">A</label>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <input id="a" class="form-control" type="text" value="" name="a">
                                                </div>
                                                <label for="b" class="control-label col-md-1 col-sm-3 col-xs-12">B</label>
                                                <div class="col-md-5 col-sm-6 col-xs-12">
                                                    <input id="b" class="form-control" type="text" name="b">
                                                </div>
                                            </div>
                                            <div id="tf">
                                                <div class="form-group" >
                                                    <label for="c" class="control-label col-md-1 col-sm-3 col-xs-12">C</label>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <input id="c" class="form-control" type="text" name="c">
                                                    </div>
                                                    <label for="d" class="control-label col-md-1 col-sm-3 col-xs-12">D</label>
                                                    <div class="col-md-5 col-sm-6 col-xs-12">
                                                        <input id="d" class="form-control" type="text" name="d">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="score" class="control-label col-md-1 col-sm-3 col-xs-12">Điểm</label>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <input class="form-control" type="number" value="1" id="score" name="score" min="1" max="10">
                                                </div>
                                            </div>
                                            {{-- <div class="form-group">
                                                <label class="control-label col-md-1 col-sm-3 col-xs-12" for="note">Ghi chú</label>
                                                <div class="col-md-10 col-sm-6 col-xs-12">
                                                    <textarea name='note' id='note' class='form-control'></textarea>
                                                </div>
                                            </div> --}}

                                            

                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-1">
                                                    <button type="submit" id="submit_btn" class="btn btn-success">Tạo câu đố</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="col-md-12"><hr></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <div class="modal fade" id='editQuestionModal' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Question Details</h4>
                        </div>
                        <div class="modal-body">
                            <form id="update_form"  method="POST" action ="db_operations.php" data-parsley-validate class="form-horizontal form-label-left">
                                <input type='hidden' name="question_id" id="question_id" value=''/>
                                <input type='hidden' name="update_question" id="update_question" value='1'/>
                                <input type='hidden' name="image_url" id="image_url" value=''/>
                                                                    <div class="form-group">
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="category">Language</label>
                                        <div class="col-md-10 col-sm-6 col-xs-12">
                                                                                        <select id="update_language_id" name="language_id" required class="form-control col-md-7 col-xs-12">
                                                <option value="">Select language</option>
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
                                                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="category">Category</label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <select name='category' id='edit_category' class='form-control' required>
                                            <option value=''>Select Main Category</option>
                                                                                            <option value='43'>Math</option>
                                                                                            <option value='42'>edg</option>
                                                                                            <option value='41'>makanan</option>
                                                                                            <option value='36'>DEPORTES</option>
                                                                                            <option value='35'>Gerneal Science</option>
                                                                                            <option value='34'>Hindi</option>
                                                                                            <option value='32'>Fjdj</option>
                                                                                            <option value='31'>drtdrt</option>
                                                                                            <option value='30'>ewrwerwerewwe</option>
                                                                                            <option value='29'>erdgt</option>
                                                                                            <option value='28'>pongo</option>
                                                                                            <option value='27'>Sports</option>
                                                                                            <option value='26'>لیگ اسپنر عثمان قادر کی جگہ فخر زمان 15 رکنی قومی ٹی ٹونٹی ورلڈکپ اسکواڈ میں شامل کر لیا ہے مزید پڑھیں: https://urdu.geo.tv/latest/303021- #GeoNews #PCB #cricket</option>
                                                                                            <option value='25'>آئی سی سی ٹی20 ورلڈ کپ کے وارم اپ میچ میں انگلینڈ نے پاکستان کو چھ وکٹوں سے شکست دی۔</option>
                                                                                            <option value='24'>حکمران اتحاد کے امیدواروں کی شکست کے بعد پی ڈی ایم کے انتخابی اتحاد کا مستقبل کیا ہوگا اور حکومتی اتحاد کو برقرار رکھنا شہباز شریف کے لیے کتنا بڑا چیلنج ہوگا۔</option>
                                                                                            <option value='23'>پاکستان تحریک انصاف کے چیئرمین عمران خان نے کہا ہے کہ وہ حکومت کو چند روز کا وقت دے رہے ہیں جس کے بعد وہ لانگ مارچ کا اعلان کریں اور لانگ مارچ اکتوبر ہی میں ہوگا۔</option>
                                                                                            <option value='22'>لاہور * وزیراعلیٰ پنجاب چودھری پرویز الٰہی کی زیر صدارت اعلی سطح کا اجلاس  وزیراعلیٰ چودھری پرویز الٰہی کونشتر ہسپتال ملتان کی چھت پر لاشیں پھینکنے کے واقعہ کے بارے میں ابتدائی انکوائری رپورٹ پیش کی گئی  وزیراعلیٰ چودھری پرویز الٰہی کاانکوائری رپورٹ </option>
                                                                                            <option value='19'>Criptomonedas</option>
                                                                                            <option value='8'>News</option>
                                                                                            <option value='7'>Music</option>
                                                                                            <option value='6'>Science</option>
                                                                                            <option value='5'>Sports</option>
                                                                                    </select>
                                    </div>
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="subcategory">Sub Category</label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <select name="subcategory" id="edit_subcategory" class="form-control" >
                                            <option value="">Select Sub Category</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 col-sm-3 col-xs-12" for="image">Image for Question <small>( Leave it blank for no change )</small></label>
                                    <div class="col-md-10 col-md-offset-1 col-sm-6 col-xs-12">
                                        <input type="file" id="edit_image" name="image" class="form-control col-md-7 col-xs-12" aria-required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="question">Question</label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <textarea type="text" id="edit_question" name="question" required="required" class="form-control col-md-7 col-xs-12" aria-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="answer type">Question Type</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">                                                     
                                        <div id="status" class="btn-group">
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="edit_question_type" value="1" checked=""> Options 
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="edit_question_type" value="2"> True / False
                                            </label>                                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="a">Options</label>
                                    <div class="col-md-8 col-sm-6 col-xs-12"></div>
                                </div>
                                <div class="form-group">
                                    <label for="a" class="control-label col-md-1 col-sm-3 col-xs-12">A</label>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <input id="edit_a" class="form-control col-md-7 col-xs-12" type="text" name="a">
                                    </div>
                                    <label for="b" class="control-label col-md-1 col-sm-3 col-xs-12">B</label>
                                    <div class="col-md-5 col-sm-6 col-xs-12">
                                        <input id="edit_b" class="form-control col-md-7 col-xs-12" type="text" name="b">
                                    </div>
                                </div>
                                <div id="edit_tf">
                                    <div class="form-group" >
                                        <label for="c" class="control-label col-md-1 col-sm-3 col-xs-12">C</label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="edit_c" class="form-control col-md-7 col-xs-12" type="text" name="c">
                                        </div>
                                        <label for="d" class="control-label col-md-1 col-sm-3 col-xs-12">D</label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input id="edit_d" class="form-control col-md-7 col-xs-12" type="text" name="d">
                                        </div>
                                    </div>
                                                                            <div class="form-group">
                                            <label for="e" class="control-label col-md-1 col-sm-3 col-xs-12">E</label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input id="edit_e" class="form-control col-md-7 col-xs-12" type="text" name="e">
                                            </div>
                                            <label class="control-label col-md-1 col-sm-3 col-xs-12"></label>
                                            <div class="col-md-5 col-sm-6 col-xs-12"></div>
                                        </div>
                                                                    </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="answer">Answer</label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <select name="answer" id="edit_answer" class="form-control" required>
                                            <option value="">Select Right Answer</option>
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option class='edit_ntf' value="c">C</option>
                                            <option class='edit_ntf' value="d">D</option>
                                                                                            <option class='edit_ntf' value='e'>E</option>
                                                                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3 col-xs-12" for="note">Note</label>
                                    <div class="col-md-10 col-sm-6 col-xs-12">
                                        <textarea name="note" id="edit_note" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" id="update_btn" class="btn btn-success">Update Question</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row"><div  class="col-md-offset-3 col-md-8" style ="display:none;" id="update_result"></div></div>
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

        
    </body>
</html>