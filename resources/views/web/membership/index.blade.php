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
                      العضوية 
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
                <h2
                  class="main-title_title wow animate__animated animate__fadeInDown"
                >
                نموذج ولائحة عضوية أجيال الوطن
                </h2>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="content d-flex justify-content-center">
     
                  <a class="btn btn-green d-flex align-items-center py-3" href="./assets/imgs/files/file_1.pdf" target="_blank">
                    تحميل نموذج ولائحة عضوية أجيال الوطن
                    <span class="material-icons mx-2">
                      get_app
                      </span>

                  </a>

                </div>
              </div>




            <div class="col-12 col-md-6">


<?php
	if(isset($sentMail)) 
{
print "<div class='alert alert-success'>تم ارسال الرسالة بنجاح سيتم التواصل معكم في اقرب وقت</div>";

} 
// if(!$sentMail){
// print "<div class='alert alert-danger'>لم يتم إرسال الرسالة</div>
// ";
// }
?>

               <form method="post" action="" enctype="multipart/form-data">
                  <div>
                  <input type="text" name="s_name" id="s_name" class="demoInputBox form-control"placeholder="الإسم"required>
                  </div><br>

                  <div>
                  <input type="email" name="s_email" id="s_email" class="demoInputBox form-control"placeholder="البريد الالكترونى"required>
                  </div><br>

                  <div>
                  <input type="text" name="s_phone" id="s_phone" class="demoInputBox form-control"placeholder="رقم الهاتف"required>
                  </div><br>


                  <div>
                  	<textarea name="s_message" class="demoInputBox form-control" placeholder="الرسالة" required></textarea>
         
                  </div><br>


                  <div>
                  	<span>المرفقات</span>
                  <input type="file" name="file[]"  class="demoInputBox form-control" required><br>
                  <input type="file" name="file[]"  class="demoInputBox form-control" required><br>
                  </div>

                <div class="form-group row">
                  <div class="col-sm-10"><br>
        <input type="submit" value="إرسال" class="btnAction btn btn-green px-5" />
                  </div>
                </div>



</form>

            </div>









            </div>
          </div>
        </div>
      </section>
 
    </main>

@stop    