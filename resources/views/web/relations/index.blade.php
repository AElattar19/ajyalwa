@extends('web.layout')

@section('content')

   <main>
      <section class="pages-head">
        <div class="overlay">
          <div class="container">
            <div class="row pages-head_data">
              <div class="col-6">
                <h1>العلاقات مع المستفيدين</h1>
              </div>
              <div class="col-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                       العلاقات مع المستفيدين 
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="relations">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="main-title text-center">
                <h2
                  class="main-title_title wow animate__animated animate__fadeInDown"
                >
                العلاقات مع المستفيدين
                </h2>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="relation">
                <div class="icon">
                  <img src="{{url('')}}/assets/web/imgs/icons/channels-1.svg" alt="">
                </div>
                <ul class="relation-list">
                  <li> ترفية </li>
                  <li> مغامرات </li>
                  <li> تعليم وتدريب </li>
                  <li> استشاريون محل ثقة </li>
                </ul>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="relation">
                <div class="icon">
                  <img src="{{url('')}}/assets/web/imgs/icons/channels-3.svg" alt="">
                </div>
                <ul class="relation-list">
                  <li> استشاريون محل ثقة </li>
                  <li> تعليم وتدريب </li>
                  <li> ابناؤنا في أيد أمينة </li>
                  <li> التخطيط لمستقبل أبنائنا </li>
                </ul>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="relation">
                <div class="icon">
                  <img src="{{url('')}}/assets/web/imgs/icons/channels-2.svg" alt="">
                </div>
                <ul class="relation-list">
                  <li> استشاريون محل ثقة </li>
                  <li> تعليم وتدريب </li>
                  <li> الارتقاء بالسيرة الذاتية المهنية </li>
                  <li> أفضل الممارسات التربوية العالمية </li>
                </ul>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="relation">
                <div class="icon">
                  <img src="{{url('')}}/assets/web/imgs/icons/channels-4.svg" alt="">
                </div>
                <ul class="relation-list">
                  <li> استشاريون محل ثقة </li>
                  <li> أفضل الممارسات التربوية العالمية </li>
                  <li> حليف أساسي لتشغيل البرامج التربوية </li>
                  <li> شركاء التحول الرقمي للمنشآة </li>
                  <li> الدراسات والبحوث التطورية </li>
                </ul>
              </div>
            </div>


          </div>
        </div>



      </section>


      <section class="sponsers">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="main-title text-center">
                <h2
                  class="main-title_title wow animate__animated animate__fadeInDown"
                >
                  شركاء النجاح
                </h2>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="swiper-container swiper-sponsers">
                <div class="swiper-wrapper">
                  <!-- start sponser  -->
                  <div class="swiper-slide">
                    <img
                      class="sponsers-img"
                      src="{{url('')}}/assets/web/imgs/main/sponser-1.jpg"
                      alt="leader name"
                    />
                  </div>
                  <!-- end sponser  -->
                  <!-- start sponser  -->
                  <div class="swiper-slide">
                    <img
                      class="sponsers-img"
                      src="{{url('')}}/assets/web/imgs/main/sponser-2.jpg"
                      alt="leader name"
                    />
                  </div>
                  <!-- end sponser  -->
                  <!-- start sponser  -->
                  <div class="swiper-slide">
                    <img
                      class="sponsers-img"
                      src="{{url('')}}/assets/web/imgs/main/sponser-3.png"
                      alt="leader name"
                    />
                  </div>
                  <!-- end sponser  -->
                  <!-- start sponser  -->
                  <div class="swiper-slide">
                    <img
                      class="sponsers-img"
                      src="{{url('')}}/assets/web/imgs/main/sponser-4.PNG"
                      alt="leader name"
                    />
                  </div>
                  <!-- end sponser  -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@stop    