@extends('web.layout')

@section('content')
    <?php
    use \App\Constants\GenderTypes;
    ?>
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
                      التسجيل
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

                 <form action="{{ route('web.auth.updateProfile', ['user' => $user]) }}"  method="post"enctype="multipart/form-data">
                   @csrf
                   @method('PUT')
            <div class="row">
                <div class="col-6 col-md-6">

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

                                    
                        <div class="col-12">
                            <div class="row">
                                <h2 class="main-title_title wow animate__animated animate__fadeInDown">بيانات العضوية</h2>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="text" name="name" id="name" value="{{old('name',$user->name)}}" class="demoInputBox form-control"placeholder="الأسم">
                            
                            @error('name')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('name') }}
                            </span>
                         @enderror
                          </div>
                        </div>
       
                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="text" name="full_name" id="full_name" value="{{old('full_name',$user->full_name)}}" class="demoInputBox form-control"placeholder="الأسم">
                            
                            @error('full_name')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('full_name') }}
                            </span>
                         @enderror
                          </div>
                        </div>



                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <select name="gender" id="gender" class="demoInputBox form-control">
                                  <option>النوع</option>
                                    @foreach(GenderTypes::getList() as $key => $value)
                                      <option value="{{ $key }}" {{ old("gender", $user->gender) == $key ? "selected":null }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                             
                            @error('gender')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('gender') }}
                            </span>
                         @enderror
                         </div>
                        </div> 

                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="text" name="professional_specialization" id="professional_specialization" value="{{old('professional_specialization',$user->professional_specialization)}}"class="demoInputBox form-control"placeholder="التخصص المهني">
                             
                            @error('professional_specialization')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('professional_specialization') }}
                            </span>
                         @enderror 
                         </div>
                        </div>   

   
                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="text" name="work_location"value="{{old('work_location', $user->work_location)}}" id="work_location" class="demoInputBox form-control"placeholder="جهة العمل">
                             
                             @error('work_location')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('work_location') }}
                            </span>
                             @enderror 
                             </div> 
                        </div> 
 
                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                               
                               <select name="city_id" id="city_id" class="demoInputBox form-control">
                                  <option value="">المدينة</option>
                                    @foreach($cities as $city)
                                      <option value="{{ $city->id }}" {{ $city->id == old('city_id', $user->city_id) ? "selected" : null }}>{{ $city->name }}</option>
                                    @endforeach

                               </select>
                           @error('city')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('city') }}
                            </span>
                         @enderror  
                         </div>
                        </div>   

    


                        <div class="col-12">
                            <div class="row">
                                <h2 class="main-title_title wow animate__animated animate__fadeInDown">بيانات الحساب</h2>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="email" name="email" value="{{old('email', $user->email)}}"id="email" class="demoInputBox form-control"placeholder="البريد الالكترونى">
                           
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
           
                 
               </div>



            <div class="col-md-6 col-6">

 <div class="col-12">
                            <div class="row">
                                <h2 class="main-title_title wow animate__animated animate__fadeInDown">
                                  <br>
                                </h2>
                            </div>
                        </div>

           <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="text" name="qualification" id="qualification" class="demoInputBox form-control"placeholder="المؤهل العلمي"  value="{{old('qualification', $user->qualification)}}" >
                             
                             @error('qualification')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('qualification') }}
                            </span>
                         @enderror
                         </div>
                        </div>


          <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="text" name="region" id="region" class="demoInputBox form-control"placeholder="الحي"  value="{{old('region', $user->region)}}" >
                             
                             @error('region')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('region') }}
                            </span>
                         @enderror
                         </div>
                        </div>

     <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="text" name="phone" id="phone" value="{{old('phone', $user->phone)}}"class="demoInputBox form-control"placeholder="رقم الجوال">
                             
                             @error('phone')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('phone') }}
                            </span>
                         @enderror
                         </div>
                        </div>


         <div class="col-md-12 col-12">
                            <div class="form-group row">
                               
                                  
                               <select name="country_id" id="country_id" class="demoInputBox form-control">
                                  <option value="">المدينة</option>
                                    @foreach($countries as $country)
                                      <option value="{{$country->id }}" {{$country->id == old('country_id', $user->country_id) ? "selected" : null }}>{{ $country->name }}</option>
                                    @endforeach

                               </select>
                           @error('country')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('country') }}
                            </span>
                         @enderror  
                         </div>
                        </div>   





       <div class="col-md-12 col-12">
                            <div class="form-group row">
                               
                               <select name="member" id="member" class="demoInputBox form-control">
                             
                                
                                  <option value="1">عضو منتسب</option>
                               
                               </select>
                           @error('member')
                            <span class="error-msg" style="color:red">
                                <i class="fa fa-caret-right"></i>{{ $errors->first('member') }}
                            </span>
                         @enderror  
                         </div>
                        </div> 


<div class="col-md-12 col-12">
                            <div class="form-group row">


                              <iframe
    src="https://ajyalwa.sa/assets/files/file_1.pdf"
    frameBorder="0"
    scrolling="auto"
    height="100%"
    width="100%"
>   للتحقق من لائحه العضويه والشروط يمكنك الاطلاع</iframe>
                               
                        
                             
                          
                        
                         </div>
                        </div> 


    

          <div class="col-12">
              <div class="row" >
                <h2 class="main-title_title wow animate__animated animate__fadeInDown">الصورة الشخصية</h2>
             </div>
                  
              <label class="custom-switch" style="padding-right: 300px">
              <input type="file" onchange="readURL(this,'upload_img');" name="image" class="image"style="visibility: hidden;width: 300px; height: auto;">
                    <img id="upload_img" src="{{ asset($user->image) }}">
                @error('image')
                <span class="error-msg" style="color:red">
                  <i class="fa fa-caret-right"></i>{{ $errors->first('image') }}
                </span>
              @enderror 
              </label>

            </div>


         



           </div> 
              </form>
         </div>

        </div>
    </section>
</main>
<script type="text/javascript">

/****** to preview uploaded image ******/
function readURL(input, img_id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var image_id=$('#' + img_id);
        reader.onload = function (e) {
            image_id.attr('src', e.target.result);
        };
        image_id.css("width", "260px");
        image_id.css("height", "261px");
        reader.readAsDataURL(input.files[0]);
    }
}
/****************************************/
</script>
@stop