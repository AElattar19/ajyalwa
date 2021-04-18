@extends('admin.layout')

@section('content')

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('admin.home.index') }}">الرئيسية</a></li>
          
          </ul>
        </div>
      </div>
         <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">عدد المستخدمين</strong>
                  <div class="count-number">{{$usersCount}}</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-map-marker"></i></div>
                <div class="name"><strong class="text-uppercase">عدد  المدن</strong>
                  <div class="count-number">{{$citiesCount}}</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-envelope"></i></div>
                <div class="name"><strong class="text-uppercase">عدد الرسائل</strong>
                  <div class="count-number">{{$contactUsCount}}</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">عدد التراخيص الموافق عليها</strong>
                  <div class="count-number">{{$licensesCount}}</div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </section>

@stop
