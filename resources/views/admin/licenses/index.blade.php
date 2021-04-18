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
            <li class="breadcrumb-item active">التراخيص</li>
          </ul>
        </div>
      </div>



      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">جميع التراخيص</h1>
          </header>
          <div class="row">

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>التراخيص</h4>
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

                  <div class="table-responsive">
                    <table class="table table-striped table-hover" id="myTable_test">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>الأسم</th>
                           <th>الحالة</th>
                           <th>السنة</th>
                    
                       
                          <th>الأعدادات</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($list as $license)
                        <tr>
                          <th scope="row">{{$license->id}}</th>
                          <td>{{@$license->user->name}}</td>
                          <td> 
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
                    <button type="button" class="btn btn-success newWidth" style="width: 18%;">
                      تم الدفع
                    </button>
                    @endif
                  </td>
                          <td>{{$license->year}}</td>
                             <td>
                              <div class="btn-group dropdown">
                                <button type="button"
                                  class="btn btn-sm btn-success  m-b-5 m-t-5 dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true"
                                     aria-expanded="false">
                                 <i class="fa-cog fa"></i>
                                 </button>
                                  <div class="dropdown-menu">

                                    <a class="dropdown-item has-icon" href="{{ route('admin.licenses.show', ['license' => $license->id]) }}">
                                    <i class="fa fa-eye"></i>مشاهدة الترخيص
                                  </a>
                                   <button type="button" class="dropdown-item has-icon" data-toggle="modal"data-target="#delete_model_{{ $license->id }}">
                                    <i class="fa fa-trash"></i> حذف
                                  </button>
                                </div>
                              </div>
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
      </section>



    @foreach ($list as $license)
        <!-- Message Modal -->
            <div class="modal fade" id="delete_model_{{ $license->id }}" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="example-Modal3">حذف</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.licenses.destroy', ['license' => $license]) }}" method="Post">
                            @method('DELETE')
                            @csrf
                            <div class="modal-body">

                                هل تريد الحذف بالفعل ؟ 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">الغاء</button>
                                <button type="submit" class="btn btn-primary">حذف</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Message Modal closed -->
        @endforeach
@stop
