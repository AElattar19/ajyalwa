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
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">أضافة مدينة</h1>
          </header>
          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>مدينة جديدة</h4>
                </div>
                <div class="card-body">
                  
                  <form method="POST" action="{{ route('admin.socials.update', ['social' => $social]) }}">

                    @csrf
                    @method('PUT')

         <div class="form-group">
                      <label>الأسم</label>
                      <input type="text" name="name" placeholder="الأسم" value="{{$social->name}}"class='form-control 

                     @if ($errors->has("name"))    
                        is-invalid  
                     @endif
                      '>

                      @if ($errors->has("name"))    
                       <div class="invalid-feedback">{{$errors->first('name')}}</div>
                     @endif
                    </div>




                    <div class="form-group">
                      <label>اللينك</label>
                      <input type="text" name="link" placeholder="الأسم" value="{{$social->link}}"class='form-control 

                     @if ($errors->has("link"))    
                        is-invalid  
                     @endif
                      '>

                      @if ($errors->has("link"))    
                       <div class="invalid-feedback">{{$errors->first('link')}}</div>
                     @endif
                    </div>






                     <div class="line"></div>

                    <div class="col-sm-4 offset-sm-2">
                        <button type="reset" class="btn btn-secondary">الغاء</button>
                        <button type="submit" class="btn btn-primary">تعديل</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@stop