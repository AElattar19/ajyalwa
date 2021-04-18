@extends('admin.layout')

@section('content')

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">الرئيسية</a></li>
            <li class="breadcrumb-item active"> المستخدمين</li>
          </ul>
        </div>
      </div>



      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">جميع المستخدمين</h1>
          </header>
          <div class="row">

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>المستخدمون</h4>
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
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>الاسم</th>
                          <th>البريد الألكترونى</th>
                          <th>الحالة</th>
                          <th>الاعدادات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($list as $user)
                        <tr>
                          <th scope="row">{{$user->id}}</th>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>
                           <label class="custom-switch">
                           <input type="checkbox" name="active" id="active"
                             data-model="{{  get_class($user) }}"
                                 data-id="{{ $user->id }}"
                                  value="{{ $user->active }}"
                               {{ $user->active ? 'checked' : '' }} class="custom-switch-input">
                              <span class="custom-switch-indicator publish"></span>
                             </label>
                           </td>

                             <td>
                              <div class="btn-group dropdown">
                                <button type="button"
                                  class="btn btn-sm btn-success m-b-5 m-t-5 dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true"
                                     aria-expanded="false">
                                 <i class="fa-cog fa"></i>
                                 </button>
                                  <div class="dropdown-menu">
                                

                                  <button type="button"class="dropdown-item has-icon"data-toggle="modal"data-target="#exampleModalLong{{ $user->id }}"><i class="fa fa-trash"></i> حذف</button></div></div></td>
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
        <!--app-content closed-->
        @foreach ($list as $user)
            <div class="modal fade" id="exampleModalLong{{ $user->id }}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">حذف</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('admin.users.destroy', ['user' => $user]) }}" method="Post">
                                @method('DELETE')
                                @csrf
                                <div class="modal-body">
                                    <p class="mb-0">هل انت متاكد من حذف  {{$user->name}}</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"> حذف</button>

                                    <button type="button" class="btn btn-success"
                                            data-dismiss="modal">غلق</button>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        @endforeach
@stop
