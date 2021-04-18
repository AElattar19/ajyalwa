<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>جمعية أجيال الوطن</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('')}}/assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('')}}/assets/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>

  <body>
    <div class="page login-page"style="background-image: url('{{url('')}}/assets/img/footer-bg.jpg'); no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">


  


          <div class="form-inner">
            <div class="logo text-uppercase"><span> أجيال الوطن  </span><strong class="text-primary"> جمعية  </strong></div>
            <p>نسعى الى بناء وتنمية قدرات الأطفال وتطويرهم في الجوانب الشخصية والسلوكية والاجتماعية والمهارية بما يحقق التنمية المستدامة ، والعمل على نشر الوعي المجتمعي بحقوقهم وتدريب وتمكين المربيين والمهتمين بالأدوات والمعارف الحديثة وتقديم الإستشارات المتخصصة لتكوين جيلٍ معتزٍ بهويته الاصيلة منتميٍ لوطنه منتجٍ لذاته</p>




              @if(session()->has('error'))
                    <div class="col-12">
                        <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                            <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                <div class="alert-title">{{trans('error')}}</div>
                                {{ session('error') }}
                            </div>
                        </div>
                    </div>
                @elseif(session()->has('success'))
                    <div class="col-12">
                        <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                            <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                <div class="alert-title">{{trans('success')}}</div>
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif



            <form action="{{ route('admin.auth.attempt') }}"  method="post" class="text-left form-validate">
{{ csrf_field() }}
              <div class="form-group-material">
                <input id="login-username" type="text" name="email"  placeholder ="البريد الألكترونى" required data-msg="Please enter your username" class="input-material">
             <!--    <label for="login-username" class="label-material">البريد الألكترونى</label> -->
              </div>

              <div class="form-group-material">
                <input id="login-password" type="password" name="password"placeholder ="كلمة المرور" required data-msg="Please enter your password" class="input-material">
              <!--   <label for="login-password" class="label-material">كلمة المرور</label> -->
              </div>

              <div class="form-group text-center">
               
                <button  type="submit" class="btn btn-primary">دخول</button>
                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
              </div>

            </form>

          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{url('')}}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="{{url('')}}/assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{url('')}}/assets/vendor/chart.js/Chart.min.js"></script>
    <script src="{{url('')}}/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{url('')}}/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="{{url('')}}/js/front.js"></script>
  </body>
</html>