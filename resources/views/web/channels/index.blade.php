@extends('web.layout')

@section('content')

<main>
      
      <section class="pages-head">
        <div class="overlay">
          <div class="container">
            <div class="row pages-head_data">
              <div class="col-6">
                <h1>قنوات الاتصال</h1>
              </div>
              <div class="col-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      قنوات الإتصال
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="channels" id="channels">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="main-title text-center">
                <h2
                  class="main-title_title wow animate__animated animate__fadeInDown"
                >
                  قنوات الإتصال الرئيسة
                </h2>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-12 channels-container">
              <!-- start channels slider -->
              <div class="swiper-container channels-container-swiper">
                <div class="swiper-wrapper">
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="1">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/social-media.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">وسائل التواصل الإجتماعي</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="2">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/mobile-app.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">المنصة الإلكترونية " تطبيق الجمعية "</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="3">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/chat.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">حلقات النقاش الإلكترونية</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="4">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/webpage.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">التدريب عن بعد / التدريب الإلكتروني</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="5">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/tv.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">الإذاعات / قنوات التلفزيون</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="6">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/tree.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">حفلات وفعاليات في المولات والحدائق</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="7">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/conferance.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">المؤتمرات والندوات في الفنادق</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="8">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/teacher.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">التدريب المباشر</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="9">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/child.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">من خلال الأطفال أنفسهم</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="10">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/ad-home.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">الإعلانات على المنازل</h3>
                  </div>
                  <!-- end channel  -->
                  <!-- start channel  -->
                  <div class="swiper-slide channel" data-channel="11">
                    <div class="icon">
                      <img
                        src="{{url('')}}/assets/web/imgs/icons/channels/billboard.svg"
                        alt="channel icon"
                      />
                    </div>
                    <h3 class="title">الإعلانات فى الطرق</h3>
                  </div>
                  <!-- end channel  -->
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>

              <!-- end channels slider -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="container target-channels">
          <div class="row">
            <div class="col-6 col-lg-3">
              <div class="target-channel active">
                <div class="icon-active">
                  <img
                    src="{{url('')}}/assets/web/imgs/icons/icon-active.svg"
                    alt="active icon"
                  />
                </div>
                <div class="icon">
                  <img src="{{url('')}}/assets/web/imgs/icons/channels-1.svg" alt="" />
                </div>
                <small class="title">الطلاب</small>
              </div>
            </div>

            <div class="col-6 col-lg-3">
              <div class="target-channel active">
                <div class="icon-active">
                  <img
                    src="{{url('')}}/assets/web/imgs/icons/icon-active.svg"
                    alt="active icon"
                  />
                </div>
                <div class="icon">
                  <img src="{{url('')}}/assets/web/imgs/icons/channels-3.svg" alt="" />
                </div>
                <small class="title">اولياء الأمور</small>
              </div>
            </div>

            <div class="col-6 col-lg-3">
              <div class="target-channel active">
                <div class="icon-active">
                  <img
                    src="{{url('')}}/assets/web/imgs/icons/icon-active.svg"
                    alt="active icon"
                  />
                </div>
                <div class="icon">
                  <img src="{{url('')}}/assets/web/imgs/icons/channels-2.svg" alt="" />
                </div>
                <small class="title">التربويون</small>
              </div>
            </div>

            <div class="col-6 col-lg-3">
              <div class="target-channel">
                <div class="icon-active">
                  <img
                    src="{{url('')}}/assets/web/imgs/icons/icon-active.svg"
                    alt="active icon"
                  />
                </div>
                <div class="icon">
                  <img src="{{url('')}}/assets/web/imgs/icons/channels-4.svg" alt="" />
                </div>
                <small class="title">المؤسسات التعليمية</small>
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
                <h2 class="main-title_title wow animate__animated animate__fadeInDown">
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