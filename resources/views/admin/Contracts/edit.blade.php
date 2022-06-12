@extends('admin.layouts.main')


@section('main')
	
	
	<div class="col-8-sm bg-white fc-center" >
		<p class="box__title">ویرایش قرارداد {{$contract->name}}</p>
		@include('admin.layouts.errors')
		<form action="{{route('contracts.update',$contract)}}" method="post" class="padding-30">
			@csrf
			@method('PATCH')
			<input type="text" placeholder="نام قرارداد" class="text" name="name" value="{{$contract->name}}">
			<input type="text" placeholder="شماره کارگاه" class="text" name="code" value="{{$contract->code}}">
			<input type="text" placeholder="ردیف پیمان" class="text" name="row" value="{{$contract->code}}">
			<input type="text" placeholder="نام کارفرما" class="text" name="employer" value="{{$contract->employer}}">
			<textarea name="address" id="" cols="30" rows="10" placeholder="نشانی کارگاه" >{{$contract->address}}</textarea>
			<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ شروع" class="text" name="start_at" value="{{Verta::instance($contract->start_at)->format('Y-n-j')}}">
			<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ اتمام" class="text" name="end_at" value="{{Verta::instance($contract->end_at)->format('Y-n-j')}}">
			<button class="btn btn-brand">اضافه کردن</button>
		</form>
	</div>


@endsection