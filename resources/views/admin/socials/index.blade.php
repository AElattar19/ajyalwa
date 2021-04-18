@extends('admin.layout')

@section('content')

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">الرئيسية</a></li>
            <li class="breadcrumb-item active">المدن</li>
          </ul>
        </div>
      </div>



      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">جميع المدن</h1>
          </header>
          <div class="row">

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>المدن</h4>
                </div>
            <span style="" class="table-add ">
                <a href="{{ route('admin.socials.create') }}" class="btn btn-primary">أضافة</a>
            </span>
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
                          <th>الأعدادات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($list as $social)
                        <tr>
                          <th scope="row">{{$social->id}}</th>
                          <td>{{$social->link}}</td>
                   
                          <td>
                          <label class="custom-switch">
                             <input type="checkbox" name="active" id="active" data-model="{{get_class($social)}}"data-id="{{ $social->id }}" value="{{ $social->active }}"{{ $social->active ? 'checked' : '' }} class="custom-switch-input">
                                <span class="custom-switch-indicator publish"></span>
                          </label>
                           </td>

                             <td>
                              <div class="btn-group dropdown">
                                <button type="button"
                                  class="btn btn-sm btn-success  m-b-5 m-t-5 dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true"
                                     aria-expanded="false">
                                 <i class="fa-cog fa"></i>
                                 </button>
                                  <div class="dropdown-menu">
                                   <a class="dropdown-item has-icon" href="{{ route('admin.socials.edit', ['social' => $social->id]) }}">
                                    <i class="fa fa-edit"></i>تعديل
                                  </a>
                                   <button type="button" class="dropdown-item has-icon" data-toggle="modal"data-target="#delete_model_{{ $social->id }}">
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



    @foreach ($list as $social)
        <!-- Message Modal -->
            <div class="modal fade" id="delete_model_{{ $social->id }}" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="example-Modal3">حذف</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.socials.destroy', ['social' => $social]) }}" method="Post">
                            @method('DELETE')
                            @csrf

    <div class="modal-body">

                                هل ترد حذف مدينة  {{$social->name}} ؟   
                            </div>

                            <div class="modal-body">

                                هل ترد حذف مدينة  {{$social->link}} ؟   
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
