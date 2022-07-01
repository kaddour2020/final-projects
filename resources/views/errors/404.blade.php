<!DOCTYPE html>
<html lang="en">

<head>

  @include('backend.layouts.head')

</head>

<body>
  
  <div class="container-fluid">

    <div class="row" style="margin-top:10%">
        <!-- 404 Error Text -->
      <div class="col-md-12">
        <div class="text-center">
          <div class="error mx-auto" data-text="404">404</div>
          <p class="lead text-gray-800 mb-5">لم يتم العثور على الصفحة</p>
          <p class="text-gray-500 mb-0">يبدو أنك وجدت خللاً ...</p>
          {{-- {{dd(auth()->user())}}; --}}
            <a href="{{route('home')}}">&larr; العودة إلى الصفحة الرئيسية</a>

        </div>
      </div>
    </div>

    </div>


    @include('backend.layouts.footer')

</body>

</html>
