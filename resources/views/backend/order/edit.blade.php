@extends('backend.layouts.master')

@section('title','تفاصيل الطلب')

@section('main-content')
<div class="card">
  <h5 class="card-header">تحرير طلب</h5>
  <div class="card-body">
    <form action="{{route('order.update',$order->id)}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="status">الحالة :</label>
        <select name="status" id="" class="form-control">
          <option value="الجديد" {{($order->status=='تم التوصيل' || $order->status=="يتم المعالجة" || $order->status=="إلغاء") ? 'disabled' : ''}}  {{(($order->status=='الجديد')? 'selected' : '')}}>الجديد</option>
          <option value="يتم المعالجة" {{($order->status=='تم التوصيل'|| $order->status=="إلغاء") ? 'disabled' : ''}}  {{(($order->status=='يتم المعالجة')? 'selected' : '')}}>يتم المعالجة</option>
          <option value="تم التوصيل" {{($order->status=="إلغاء") ? 'disabled' : ''}}  {{(($order->status=='تم التوصيل')? 'selected' : '')}}>تم التوصيل</option>
          <option value="إلغاء" {{($order->status=='تم التوصيل') ? 'disabled' : ''}}  {{(($order->status=='إلغاء')? 'selected' : '')}}>إلغاء</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">تحديث</button>
    </form>
  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
@endpush
