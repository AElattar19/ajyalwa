@extends('admin.layout')

@section('content')
<?php
use App\Constants\LicenseStatus;
?>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">الرئيسية</a></li>
            <li class="breadcrumb-item active">تفاصيل الشكوي</li>
          </ul>
        </div>
      </div>


        <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>تفاصيل الشكوي</h4>
                </div>
                <div class="card-body">

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">الاسم</label>
                      <div class="col-sm-10">
                        <p>{{@$contact->name}}</p>
                      </div>
                    </div>


                    <div class="line"></div>


                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">البريد الالكترونى</label>
                      <div class="col-sm-10">
                      <p>{{$contact->email}}</p>
                      </div>
                    </div>



                    <div class="line"></div>


                          <div class="form-group row">
                      <label class="col-sm-2 form-control-label">موضوع الرسالة</label>
                      <div class="col-sm-10">
                      <p>{{$contact->subject}}</p>
                      </div>
                    </div>




                    <div class="line"></div>

                                      <div class="form-group row">
                      <label class="col-sm-2 form-control-label">الرسالة</label>
                      <div class="col-sm-10">
                      <p>{{$contact->message}}</p>
                      </div>
                    </div>

                
                </div>
              </div>
            </div>


@stop
