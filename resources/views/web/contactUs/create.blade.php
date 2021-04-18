@extends('web.layout')

@section('content')


    <main>
      <section class="pages-head">
        <div class="overlay">
          <div class="container">
            <div class="row pages-head_data">
              <div class="col-6">
                <h1>تواصل معنا</h1>
              </div>
              <div class="col-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      تواصل معنا
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contact-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.5889122401677!2d46.76613638499887!3d24.77528018409421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQ2JzMxLjAiTiA0NsKwNDUnNTAuMiJF!5e0!3m2!1sar!2ssa!4v1600586814282!5m2!1sar!2ssa"
          width="100%"
          height="450"
          frameborder="0"
          style="border: 0"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>

      </section>

      <section class="contact-data">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="main-title justify-content-start mb-4">
                <h2
                  class="main-title_title wow animate__animated animate__fadeInDown"
                >
                  تواصل معنا
                </h2>
              </div>
              <ul class="contact-data_info">
                <li>
                  <span class="material-icons"> location_on </span>
                  <p> الدور الأول مكتب رقم 5 <br>
                     مدارس الأمجاد الاهلية، شارع خالد بن الوليد، الحمراء، الرياض 13216 </p>
                </li>
                <li>
                  <span class="material-icons"> email </span>
                  <a href="mailto:info@ajyalwa.sa"> info@ajyalwa.sa </a>
                </li>

                <!-- <li>
                  <span class="material-icons"> phone </span>
                  <a href="tel:123456"> 123456 </a>
                </li> -->


              </ul>
              <!-- <p>
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
                هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                العديد من إلى زيادة عدد الحروف التى يولدها التطبيق.
              </p> -->
            </div>

            <div class="col-12 col-md-6">
              <form method="POST" action="{{route('web.contactUs.store')}}">

                    @csrf


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
              <div id="frmContact">
                  <div id="mail-status"></div>

                  <div>
                  <span id="userName-info" class="info"style="color: red;"></span><br/>
                  <input type="text" name="name" id="userName" class="demoInputBox form-control"placeholder="الإسم">
                   @error('name')
                      <span class="error-msg" style="color:red">
                        <i class="fa fa-caret-right"></i>{{ $errors->first('name') }}
                      </span>
                   @enderror
                  </div>


                  <div>
                  <span id="userEmail-info" class="info"style="color: red;"></span><br/>
                  <input type="text" name="email" id="userEmail" class="demoInputBox form-control"placeholder="الإيميل" >
                    @error('email')
                      <span class="error-msg" style="color:red">
                        <i class="fa fa-caret-right"></i>{{ $errors->first('email') }}
                      </span>
                   @enderror
                  </div>


                  <div>
                  <span id="subject-info" class="info"style="color: red;"></span><br/>
                  <input type="text" name="subject" id="subject" class="demoInputBox form-control" placeholder="عنوان الرسالة">
                   @error('subject')
                      <span class="error-msg" style="color:red">
                        <i class="fa fa-caret-right"></i>{{ $errors->first('subject') }}
                      </span>
                   @enderror
                  </div>


                  <div>
                  <span id="content-info" class="info" style="color: red;"></span><br/>
                  <textarea name="message" id="content" class="demoInputBox form-control" cols="100" rows="6"placeholder="الرسالة"></textarea>
                     @error('message')
                      <span class="error-msg" style="color:red">
                        <i class="fa fa-caret-right"></i>{{ $errors->first('message') }}
                      </span>
                   @enderror
                  </div>
<br>

                        <div class="col-md-12 col-12">
                            <div class="form-group row">
                                <input type="submit" value="تسجيل" class="btnAction btn btn-green px-5" />
                            </div>
                       </div>
             </div>
          </form>

            </div>

          </div>
        </div>
      </section>
    </main>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
// function sendContact() {
//   var valid;  
//   valid = validateContact();
//   if(valid) {
//     jQuery.ajax({
//     url: "contact_p.php",
//     data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$(content).val(),
//     type: "POST",
//     success:function(data){
//     $("#mail-status").html(data);
//     },
//     error:function (){}
//     });
//   }
// }

// function validateContact() {
//   var valid = true; 
//   $(".demoInputBox").css('background-color','');
//   $(".info").html('');
  
//   if(!$("#userName").val()) {
//     $("#userName-info").html("(مطلوب)");
//     $("#userName").css('background-color','#FFFFFF');
//     valid = false;
//   }
//   if(!$("#userEmail").val()) {
//     $("#userEmail-info").html("(مطلوب)");
//     $("#userEmail").css('background-color','#FFFFFF');
//     valid = false;
//   }
//   if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
//     $("#userEmail-info").html("(البريد الالكترونى غير صحيح)");
//     $("#userEmail").css('background-color','#FFFFFF');
//     valid = false;
//   }
//   if(!$("#subject").val()) {
//     $("#subject-info").html("(مطلوب)");
//     $("#subject").css('background-color','#FFFFFF');
//     valid = false;
//   }
//   if(!$("#content").val()) {
//     $("#content-info").html("(مطلوب)");
//     $("#content").css('background-color','#FFFFFF');
//     valid = false;
//   }
  
//   return valid;
// }
</script>

@stop