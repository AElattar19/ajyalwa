@extends('web.layout')

@section('content')

    <main>
      <section class="pages-head">
        <div class="overlay">
          <div class="container">
            <div class="row pages-head_data">
              <div class="col-6">
                <h1> اللوائح والسياسات والاجراءات </h1>
              </div>
              <div class="col-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      اللوائح 
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
                اللوائح والسياسات والاجراءات 
                </h2>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="content d-flex justify-content-center">
     
                  <a class="btn btn-green d-flex align-items-center py-3"  href="{{url('')}}/assets/web/imgs/files/file_2.pdf" target="_blank">
                  
                    تحميل ملف اللوائح والسياسات والاجراءات 

                    <span class="material-icons mx-2">
                      get_app
                      </span>

                  </a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
 
    </main>
@stop    