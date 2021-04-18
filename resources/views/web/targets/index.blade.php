@extends('web.layout')

@section('content')

<main>
<section class="pages-head">
<div class="overlay">
<div class="container">
<div class="row pages-head_data">
<div class="col-6">
<h1>الشرائح المستهدفة</h1>
</div>

<div class="col-6">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{ route('web.home.index') }}">الرئيسية</a></li>
	<li aria-current="page" class="breadcrumb-item active">الشرائح المستهدفة</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</section>

<section class="target-aud">
<div class="container">
<div class="row">
<div class="col-12">
<div class="main-title text-center">
<h2 class="main-title_title wow animate__animated animate__fadeInDown">الشرائح المستهدفة</h2>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-12 col-md-6 col-lg-3">
<div class="relation">
<div class="icon"><img alt="" src="{{url('')}}/assets/web/imgs/icons/channels-1.svg" /></div>

<p class="target">الاطفال / الفتيان / الشباب</p>

<ul class="relation-list">
	<li>التمهيدي</li>
	<li>الابتدائي</li>
	<li>المتوسط (أولاد - بنات )</li>
	<li>الثانوي (أولاد - بنات )</li>
</ul>
</div>
</div>

<div class="col-12 col-md-6 col-lg-3">
<div class="relation">
<div class="icon"><img alt="" src="{{url('')}}/assets/web/imgs/icons/channels-3.svg" /></div>

<p class="target">الآباء / الآمهات</p>

<ul class="relation-list">
	<li>أقل من 10 سنوات زواج.</li>
	<li>أكثر من 10 سنوات زواج.</li>
</ul>
</div>
</div>

<div class="col-12 col-md-6 col-lg-3">
<div class="relation">
<div class="icon"><img alt="" src="{{url('')}}/assets/web/imgs/icons/channels-4.svg" /></div>

<p class="target">المؤسسات التعليمية</p>

<ul class="relation-list">
	<li>الرسمية (مؤسسات التعليم النظامي )</li>
	<li>غير رسمية ( مؤسسات إثرائية&nbsp;تربوية وجمعيات )</li>
</ul>
</div>
</div>

<div class="col-12 col-md-6 col-lg-3">
<div class="relation">
<div class="icon"><img alt="" src="{{url('')}}/assets/web/imgs/icons/channels-2.svg" /></div>

<p class="target">التربويون</p>

<ul class="relation-list">
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
<h2 class="main-title_title wow animate__animated animate__fadeInDown">شركاء النجاح</h2>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-12">
<div class="swiper-container swiper-sponsers">
<div class="swiper-wrapper"><!-- start sponser  -->
<div class="swiper-slide"><img alt="leader name" class="sponsers-img" src="{{url('')}}/assets/web/imgs/main/sponser-1.jpg" /></div>
<!-- end sponser  --><!-- start sponser  -->

<div class="swiper-slide"><img alt="leader name" class="sponsers-img" src="{{url('')}}/assets/web/imgs/main/sponser-2.jpg" /></div>
<!-- end sponser  --><!-- start sponser  -->

<div class="swiper-slide"><img alt="leader name" class="sponsers-img" src="{{url('')}}/assets/web/imgs/main/sponser-3.png" /></div>
<!-- end sponser  --><!-- start sponser  -->

<div class="swiper-slide"><img alt="leader name" class="sponsers-img" src="{{url('')}}/assets/web/imgs/main/sponser-4.PNG" /></div>
<!-- end sponser  --></div>
<!-- Add Pagination -->

<div class="swiper-pagination"></div>
</div>
</div>
</div>
</div>
</section>
</main>
@stop