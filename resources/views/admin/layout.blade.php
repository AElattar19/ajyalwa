<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
<?php
use App\Constants\LicenseStatus;
?>

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>جمعية أجيال الوطن</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

  <link rel="stylesheet" href="{{ url('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('')}}/img/favicon.ico">

    <link rel="stylesheet" href="{{ url('assets/css/admin.app.css') }}">
    
  



  </head>
  <body>





    @yield('sidebar', View::make('admin.sidebar'))
    <!--aside closed-->

  



    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>أجيال الوطن </span><strong class="text-primary"> جمعية</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">


                <!-- Log out-->
                <li class="nav-item"><a href="{{ route('admin.auth.logout') }}" class="nav-link logout"> <span class="d-none d-sm-inline-block"><h3>خروج</h3></span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>


  @yield('content')



            <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-right">
              <p>حقوق النشر &copy;  جمعية أجيال الوطن 2020</p>
            </div>

          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
<script src="{{ url('assets/js/admin.app.js') }}"></script>

<script>
    $(document).ready(function () {
      $('#myTable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Arabic.json"
        },
        "pagingType": "full_numbers"
    } );
        $("input[id='active']").click(function () {
            var url = '{{ route("admin.model.active") }}';
            var defaultRadioValue = $(this).val();
            $(this).val(0);
            if (defaultRadioValue == 0) {
                $(this).val(1);
            }

            var dataModel = $(this).attr('data-model');
            var dataId = $(this).attr('data-id');

            $.ajax({
                url: "{{route('admin.model.active')}}",
                type: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    'active': $(this).val(),
                    'modelName': dataModel,
                    'modelId': dataId
                },

                success: function (data) {
                    var alertMessage = 'تم الحظر بنجاح';

                    if (data.active == 1) {
                        alertMessage = 'تم التفعيل بنجاح';
                    }
                    toastr.success(alertMessage, 'الرسالة', {
                        positionClass: "toast-bottom-right",
                        closeButton: true
                    })
                },
                error: function () {
                }
            });
        });

    }); //end document .ready

</script>

@yield('scripts')

  </body>
</html>