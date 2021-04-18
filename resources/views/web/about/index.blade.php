@extends('web.layout')

@section('content')

<main>
<section class="pages-head">
<div class="overlay">
<div class="container">
<div class="row pages-head_data">
<div class="col-6">
<h1>عن الجمعية</h1>
</div>

<div class="col-6">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{ route('web.home.index') }}">الرئيسية</a></li>
	<li aria-current="page" class="breadcrumb-item active">عن الجمعية</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</section>

<section class="who-we-are">
<div class="container">
<div class="row">
<div class="col-12 col-md-6">
<div class="main-title justify-content-start mb-4">
<h2 class="main-title_title wow animate__animated animate__fadeInDown">من نحن ؟</h2>
</div>

<p>جمعية رائدة في تنمية الطفولة</p>

<p>نسعى الى بناء وتنمية قدرات الأطفال وتطويرهم&nbsp;في الجوانب الشخصية والسلوكية والاجتماعية والمهارية بما يحقق التنمية المستدامة ، والعمل على نشر الوعي المجتمعي بحقوقهم وتدريب وتمكين المربيين والمهتمين بالأدوات والمعارف الحديثة وتقديم الإستشارات المتخصصة لتكوين جيلٍ&nbsp;معتزٍ بهويته الاصيلة&nbsp;منتميٍ لوطنه&nbsp;منتجٍ لذاته</p>
</div>

<div class="col-12 col-md-6 d-none d-md-block">
<div class="about-gallery">
<div class="gallary_item">
<div class="gallary_item-img"><img alt="image title" src="{{url('')}}/assets/web/imgs/main/gallery-1.jpg" /></div>

<div class="gallary_item-content">
<h4>image title here</h4>

<div class="cta"><a class="cta-zoom" data-caption="image title here" data-fancybox="about-gallery" href="{{url('')}}/assets/web/imgs/main/gallery-1.jpg"><img alt="icon" src="{{url('')}}/assets/web/imgs/icons/zoom-icon.svg" /> </a> <a class="cta-open" href="#img-link"> <img alt="icon" src="{{url('')}}/assets/web/imgs/icons/link-icon.svg" /> </a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="achievements" style="background-image: url('{{url('')}}/assets/web/imgs/main/NurserySharjah.jpg')">
<div class="overlay">
<div class="container">
<div class="row">
<div class="col-12 col-md-6">
<div class="achievements_content wow animate__animated animate__slideInLeft">
<h3>الإنجازات</h3>

<p>تم اعتماد اللائحة الأساسية للجمعية ووضع الخطط الأولية والانطلاق في تنفيذ البرامج المختلفة .</p>
</div>
</div>

<div class="col-12 col-md-6">
<div class="achievements_num">
<div class="num">
<div class="num_icon"><img alt="icon" src="{{url('')}}/assets/web/imgs/icons/achiv-1.svg" /></div>

<h3 class="num_title" data-count="40" data-duration="1000" data-plus="true">0</h3>
<span class="num_sub-title">عدد المستفيدين </span></div>

<div class="num">
<div class="num_icon"><img alt="icon" src="{{url('')}}/assets/web/imgs/icons/achiv-2.svg" /></div>

<h3 class="num_title" data-count="10" data-duration="1000" data-plus="true">0</h3>
<span class="num_sub-title">عدد المتطوعين </span></div>

<div class="num">
<div class="num_icon"><img alt="icon" src="{{url('')}}/assets/web/imgs/icons/achiv-3.svg" /></div>

<h3 class="num_title" data-count="2" data-duration="1000" data-plus="false">0</h3>
<span class="num_sub-title">عدد الشركاء </span></div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="values" id="values">
<div class="container">
<div class="row">
<div class="col-12">
<div class="main-title text-center">
<h2 class="main-title_title wow animate__animated animate__fadeInDown">قيم الجمعية</h2>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row"><!-- start value  -->
<div class="values-item col-12 col-md-4">
<div class="icon"><img alt="activite icon" src="{{url('')}}/assets/web/imgs/icons/val-1.svg" /></div>

<h3>الأصالة</h3>

<p>الابتكار والنوعية والتميز</p>
</div>
<!-- end value  --><!-- start value  -->

<div class="values-item col-12 col-md-4">
<div class="icon"><img alt="activite icon" src="{{url('')}}/assets/web/imgs/icons/val-2.svg" /></div>

<h3>الاستدامة</h3>

<p>التقييم والتقويم المستمر , واستمرارية وديمومة برامجنا</p>
</div>
<!-- end value  --><!-- start value  -->

<div class="values-item col-12 col-md-4">
<div class="icon"><img alt="activite icon" src="{{url('')}}/assets/web/imgs/icons/val-3.svg" /></div>

<h3>الشراكة</h3>

<p>التنسيق والشراكة مع المانحين والجهات المختصة</p>
</div>
<!-- end value  --><!-- start value  -->

<div class="values-item col-12 col-md-4">
<div class="icon"><img alt="activite icon" src="{{url('')}}/assets/web/imgs/icons/val-4.svg" /></div>

<h3>المواطنة</h3>

<p>الانتماء والالتزام بالثوابت</p>
</div>
<!-- end value  --><!-- start value  -->

<div class="values-item col-12 col-md-4">
<div class="icon"><img alt="activite icon" src="{{url('')}}/assets/web/imgs/icons/val-5.svg" /></div>

<h3>التمكين</h3>

<p>اكسابهم المعارف والاتجاهات و القيم والمهارات التى تؤهلهم للمشاركة الإيجابية والفعالة فى مختلف نواحي الحياة</p>
</div>
<!-- end value  --></div>
</div>
</section>

<section class="leaders bg-gray">
<div class="container">
<div class="row">
<div class="col-12">
<div class="main-title text-center">
<h2 class="main-title_title wow animate__animated animate__fadeInDown">أعضاء مجلس الإدارة</h2>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-12">
<div class="swiper-container swiper-leaders">
<div class="swiper-wrapper"><!-- start leader  -->
<div class="swiper-slide">
<div class="leaders-item"><img alt="leader name" src="{{url('')}}/assets/web/imgs/main/leader-1.jpg" />
<h2 class="leader-name">أ. فيصل القعيطي</h2>

<h3 class="leader-title">رئيس مجلس الإدارة</h3>
</div>
</div>
<!-- end leader  --><!-- start leader  -->

<div class="swiper-slide">
<div class="leaders-item"><img alt="leader name" src="{{url('')}}/assets/web/imgs/main/leader-2.jpg" />
<h2 class="leader-name">م. علي الغبيشي</h2>

<h3 class="leader-title">نائب رئيس مجلس الإدارة</h3>
</div>
</div>
<!-- end leader  --><!-- start leader  -->

<div class="swiper-slide">
<div class="leaders-item"><img alt="leader name" src="{{url('')}}/assets/web/imgs/main/leader-3.jpg" />
<h2 class="leader-name">أ. نائف العتيق</h2>

<h3 class="leader-title">المشرف المالي</h3>
</div>
</div>
<!-- end leader  --><!-- start leader  -->

<div class="swiper-slide">
<div class="leaders-item"><img alt="leader name" src="{{url('')}}/assets/web/imgs/main/leader-4.jpg" />
<h2 class="leader-name">د. عماد العبداللطيف</h2>

<h3 class="leader-title">عضو مجلس الإدارة</h3>
</div>
</div>
<!-- end leader  --><!-- start leader  -->

<div class="swiper-slide">
<div class="leaders-item"><img alt="leader name" src="{{url('')}}/assets/web/imgs/main/leader-5.jpg" />
<h2 class="leader-name">م. أيمن باجودة</h2>

<h3 class="leader-title">عضو مجلس الإدارة</h3>
</div>
</div>
<!-- end leader  --></div>
<!-- Add Arrows -->

<div class="swiper-button-next"></div>

<div class="swiper-button-prev"></div>
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