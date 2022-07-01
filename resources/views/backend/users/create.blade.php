@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">إضافة مستخدم</h5>
    <div class="card-body">
      <form method="post" action="{{route('users.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">الاسم</label>
        <input id="inputTitle" type="text" name="name" placeholder="أدخل الاسم"  value="{{old('name')}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-form-label">البريد الإلكتروني</label>
          <input id="inputEmail" type="email" name="email" placeholder="أدخل البريد الإلكتروني"  value="{{old('email')}}" class="form-control">
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
            <label for="inputPassword" class="col-form-label">كلمة المرور</label>
          <input id="inputPassword" type="password" name="password" placeholder="أدخل كلمة المرور"  value="{{old('password')}}" class="form-control">
          @error('password')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
        <label for="inputPhoto" class="col-form-label">الصور</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> اختار
                </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        @php 
        $roles=DB::table('users')->select('role')->get();
        @endphp
        <div class="form-group">
            <label for="role" class="col-form-label">وظيفة</label>
            <select name="role" class="form-control">
                <option value="">-----حدد الدور-----</option>
                @foreach($roles as $role)
                    <option value="{{$role->role}}">{{$role->role}}</option>
                @endforeach
            </select>
          @error('role')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class="form-group">
            <label for="status" class="col-form-label">الحالة</label>
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

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush