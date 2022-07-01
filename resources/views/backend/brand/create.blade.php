@extends('backend.layouts.master')
@section('title','المتجر العربي || إنشاء العلامة التجارية')
@section('main-content')

<div class="card">
    <h5 class="card-header">أضف العلامة التجارية</h5>
    <div class="card-body">
      <form method="post" action="{{route('brand.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">العنوان <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
          <label for="status" class="col-form-label">الحالة<span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">نشيط</option>
              <option value="inactive">غير نشط</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">إعادة ضبط</button>
           <button class="btn btn-success" type="submit">إرسال</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "اكتب وصفا موجزا .....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush