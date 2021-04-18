@extends('web.layout')

@section('content')
<main>
    <section class="pages-head">
        <div class="overlay">
            <div class="container">
            <div class="row pages-head_data">
              <div class="col-6">
                <h1> طلب العضوية </h1>
              </div>
              <div class="col-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      تسجيل الدخول
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="paragraph-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-title text-center">
                       <h2 class="main-title_title wow animate__animated animate__fadeInDown">
                      تسجيل الدخول</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                            <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i>
                            </div>
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                            <div class="alert-title"></div>
                                {{ session('error') }}
                            </div>
                        </div>
                     @endif
                    <form action="{{route('web.auth.attempt')}}" method="post">
                        @csrf
                        
                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="email" name="email" id="email" class="demoInputBox form-control"placeholder="البريد الالكترونى">
                              @error('email')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('email') }}
                            </span>
                         @enderror
                             </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="password" name="password" id="password" class="demoInputBox form-control"placeholder="كلمة المرور">
                               @error('password')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('password') }}
                            </span>
                         @enderror
                            </div>
                       </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="submit" value="تسجيل" class="btnAction btn btn-green px-5" />
                            </div>
                       </div>
           
                    </form>
               </div>
            </div>
        </div>
    </section>
</main>

@stop