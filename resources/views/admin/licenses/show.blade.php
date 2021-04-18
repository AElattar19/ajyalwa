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
            <li class="breadcrumb-item active">تفاصيل الترخيص</li>
          </ul>
        </div>
      </div>


        <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>تفاصيل الترخيص</h4>
                </div>
                <div class="card-body">
                  @if(session()->has('success'))
                    <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>×</span>
                          </button>
                          <div class="alert-title"></div>
                           {{ session('success') }}
                           </div>
                     </div>
                 @endif
                  <form class="form-horizontal"action="{{ route('admin.licenses.update', ['license' => $license->id]) }}"method="post">
                                        @csrf
                    @method('PUT')
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">الاسم</label>
                      <div class="col-sm-10">
                        <p>{{@$license->user->name}}</p>
                      </div>
                    </div>


                    <div class="line"></div>


                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">سنة الترخيص</label>
                      <div class="col-sm-10">
                      <p>{{$license->year}}</p>
                      </div>
                    </div>



                    <div class="line"></div>


                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">الحالة</label>
                      <div class="col-sm-10">
                        

                           @if($license->status== LicenseStatus::UNPAID)
    

                    <button type="button" class="btn btn-danger" data-toggle="modal"data-target="#delete_model_{{ $license->id }}">
                      غير مدفوع

                      </button>
                    @endif
                    @if($license->status== LicenseStatus::PENDING)
                    <button type="button" class="btn btn-warning">
                      قيد الموافقة
                    </button>
                    @endif
                   @if($license->status== LicenseStatus::PAID)
                    <button type="button" class="btn btn-success newWidth" style="width: 7%;">
                      تم الدفع
                    </button>
                    @endif

                      </div>
                    </div>


                    <div class="line"></div>


                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">صورة الترخيص</label>
                      <div class="col-sm-10">
                        @if($license->image)
                        <img  src="{{ asset($license->image) }}" style="width: 300px; height: auto;">
                        @else
                        <p class="text-danger">لم يتم رفع صورة الترخيص</p>
                        @endif
                      </div>
                    </div>


                    <div class="line"></div>


        
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">الموافقة </label>
                      <div class="col-sm-10">
                        <div>
                          @if($license->status== LicenseStatus::PAID)

                          <input id="option" name="status" type="checkbox" value="{{LicenseStatus::PENDING}}"required >
                          <label for="option">هل تريد الرجوع في الموافقة</label>
                          @endif
                          @if($license->status== LicenseStatus::UNPAID)
                          <input id="option" name="status" type="checkbox" value="{{LicenseStatus::PAID}}"disabled >
                          <label for="option">تم مراجعة الترخيص والموافقة عليه</label>
                          @endif
                          @if($license->status==LicenseStatus::PENDING)
                          <input id="option" name="status" type="checkbox" value="{{LicenseStatus::PAID}}" required>
                          <label for="option">تم مراجعة الترخيص والموافقة عليه</label>
                          @endif
                        </div>

                      </div>
                    </div>

                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="reset" class="btn btn-secondary">الغاء</button>

                     @if($license->image)
                       <button type="submit" class="btn btn-primary">تم الموافقة</button>
                        @else
                        <button type="submit" class="btn btn-primary"disabled>تم الموافقة</button>
                        @endif
                        
                        
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>


@stop
