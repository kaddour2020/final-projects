@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">أضف فئة للمنشور</h5>
    <div class="card-body">
      <form method="post" action="{{route('post-category.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">العنوان</label>
          <input id="inputTitle" type="text" name="title" placeholder="أدخل العنوان"  value="{{old('title')}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">الوصف</label>
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
