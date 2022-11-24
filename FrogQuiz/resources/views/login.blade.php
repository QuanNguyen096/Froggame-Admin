
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login | Qearner - Learn More Earn More</title>
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
    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
             <!-- <div class="alert alert-warning text-center" style="margin: 40px 10% 0;">
                Note: If you cannot login here, please close the codecanyon frame by clicking on x Remove Frame button from top right corner on the page or
                <a href="https://qearner.thewrteam.in" class="text-danger" target="_blank"> &gt;&gt; Click here &lt;&lt; </a>
            </div> -->
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form method ="post" action="{{ route('login_action') }}">
                            @csrf
                            <h1 class="text-center">LOGIN</h1>
                            <div>
                                <input type="text" value="admin"  id="username" name='username' class="form-control" placeholder="Username" vaule="{{ old('username') }}" />
                            </div>
                            <div>
                                <input type="password" value="admin" id="password" name='password' class="form-control" placeholder="Password" vaule="{{ old('password') }}" />
                            </div>
                            <div class="row mt-20">
                                <input type ="submit" id="login_button" class="btn btn-default text-center" value="Log in">
                            </div>
                            <div class="clearfix"></div>
                            <div style ="display:none;" id="result">
                            </div>
                            <div class="separator">
                                <div class="clearfix"></div>
                                <br>
                                <img src="images/logo.png" alt="QUIZ" width='300'>
                                <p class="text-center"><br>© 2022 TranThoilong_NguyenMinhQuan_NguyenHoaiPhong</p>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <!-- Including Jquery so All js Can run -->



        
                
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <!-- Validadtion js -->
        <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script>
            $("#login_form").validate({
                rules: {
                    username: "required",
                    password: "required",
                },
                messages: {
                    username: {
                        required: "Please Enter username"
                    },
                    password: {
                        required: "Please Enter password",

                    },
                }
            });
            $(document).on('submit', '#login_form', function (e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    type: "POST",
                    data: $(this).serialize(),
                    beforeSend: function () {
                        $('#login_button').html('Please Wait...');
                    },
                    // data: dataString,
                    success: function (result) {
                        if (result == 1) {
                            window.location.href = "home.php";
                        } else
                        {
                            $('#result').html(result);
                            $('#result').show();
                            $('#login_button').html('Log in');
                        }
                    }
                });
            });
        </script> -->

        
            
    </body>
</html>
