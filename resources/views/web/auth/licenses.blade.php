@extends('web.layout')

@section('content')
    <?php
    use App\Constants\GenderTypes;
    use App\Constants\LicenseStatus;
    ?>

<link rel="stylesheet" href="{{url('')}}/assets/web/tableDesign/css/main.css"/>
<main>
    <section class="pages-head">
        <div class="overlay">
            <div class="container">
            <div class="row pages-head_data">
              <div class="col-6">
              
              </div>
              <div class="col-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    التراخيص
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
                                <h2 class="main-title_title wow animate__animated animate__fadeInDown">التراخيص</h2>
                            </div>
                        </div><br>
        <div class="table100 ver1 m-b-110">

          <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">#</th>
                  <th class="cell100 column2">الاسم</th>
                  <th class="cell100 column3">السنة</th>
                  <th class="cell100 column4">الحالة</th>
               
                </tr>
              </thead>
            </table>
          </div>

          <div class="table100-body js-pscroll">
            <table>
              <tbody>
               <?php $i = 1; ?>
            
                @foreach($licenses as $license)
                <tr class="row100 body">
                  <td class="cell100 column1">{{$i}}</td>
                  <td class="cell100 column2">{{$user->name}}</td>
                  <td class="cell100 column3">{{$license->year}}</td>
                  <td class="cell100 column4">
                    @if($license->status== LicenseStatus::UNPAID)
    

                    <button type="button" class="btn btn-danger" data-toggle="modal"data-target="#delete_model_{{ $license->id }}">
                      غير مدفوع

                      </button>
                    @endif
                    @if($license->status== LicenseStatus::PENDING)
                    <button type="button" class="btn btn-warning">
                      قيد الموافقة
                    </button>
                    @endif
                   @if($license->status== LicenseStatus::PAID)
                    <button type="button" class="btn btn-success newWidth">
                      تم الدفع
                    </button>
                    @endif

                  </td>
                </tr>
                <?php $i++; ?>
                @endforeach
    
    

              </tbody>
            </table>
          </div>
        </div>
        

      </div>

                 
           
   



    </section>
</main>

    @foreach ($licenses as $license)
        <!-- Message Modal -->
            <div class="modal fade" id="delete_model_{{ $license->id }}" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="example-Modal3">غلق</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('web.licenses.uploadLicense') }}" method="Post" enctype="multipart/form-data">
                            @csrf
                       
                            <div class="modal-body">
                              <h6>قم برفع الترخيص</h6><br>
                             <label class="custom-switch" style="padding-right: 100px">
                            
                            <input type="file"  name="image" class="image"style="width: 300px; height: auto;"required>
                             
                            </label>
                            <input type="hidden" name="license_id" value="{{$license->id}}" id="license_id">
                             @error('image')
                            <span class="error-msg" style="color:red">
                              <i class="fa fa-caret-right"></i>{{ $errors->first('image') }}
                            </span>
                             @enderror 
                            </div>
                            <div class="modal-footer">
                             
                                <button type="submit" class="btn btn-success">إرسال</button>
                                <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">الغاء</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Message Modal closed -->
        @endforeach
        <script type="text/javascript">

    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });

</script>

@stop

