@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">تحرير القسيمة</h5>
    <div class="card-body">
      <form method="post" action="{{route('coupon.update',$coupon->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">رمز الكوبون <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="code" placeholder="أدخل رمز القسيمة"  value="{{$coupon->code}}" class="form-control">
          @error('code')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
  
          <div class="form-group">
              <label for="type" class="col-form-label">النوع<span class="text-danger">*</span></label>
              <select name="type" class="form-control">
                  <option value="fixed" {{(($coupon->type=='fixed') ? 'selected' : '')}}>ثابت</option>
                  <option value="percent" {{(($coupon->type=='percent') ? 'selected' : '')}}>نسبه مئويه</option>
              </select>
              @error('type')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </div>
  
          <div class="form-group">
              <label for="inputTitle" class="col-form-label">قيمة <span class="text-danger">*</span></label>
              <input id="inputTitle" type="number" name="value" placeholder="أدخل رمز القسيمة"  value="{{$coupon->value}}" class="form-control">
              @error('value')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </div>
          
        <div class="form-group">
          <label for="status" class="col-form-label">الحالة <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($coupon->status=='active') ? 'selected' : '')}}>نشيط</option>
            <option value="inactive" {{(($coupon->status=='inactive') ? 'selected' : '')}}>غير نشط</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">تحديث</button>
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