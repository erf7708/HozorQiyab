@extends('karmand.layouts.main')


@section('main')
	
	
	<div class="col-8-sm bg-white fc-center" >
		<p class="box__title">ویرایش قرارداد {{$persenel->firstName}}</p>
		@include('karmand.layouts.errors')
		<form action="{{route('persenel.update',$persenel)}}" method="post" class="padding-30">
			@csrf
			@method('PATCH')
			<input type="text" placeholder="کد پرسنلی" class="text" name="StaffId" value="{{$persenel->StaffId}}">
			<input  value="{{$persenel->firstName}}" type="text" placeholder="نام" class="text" name="firstName" >
			<input  value="{{$persenel->lastName}}" type="text" placeholder="نام خانوادگی" class="text" name="lastName">
			<input  value="{{$persenel->fatherName}}" type="text" placeholder="نام پدر" class="text" name="fatherName">
			<input  value="{{$persenel->code}}" type="text" placeholder="کدملی" class="text" name="code">
			<input  value="{{$persenel->numberSh}}" type="text" placeholder="شماره شناسنامه" class="text" name="numberSh">
			<input  value="{{$persenel->countChildren}}" type="text" placeholder="تعداد فرزند" class="text" name="countChildren">
			<input  value="{{$persenel->phone}}" type="text" placeholder="شماره موبایل" class="text" name="phone">
			<input  value="{{$persenel->insurance_number}}" type="text" placeholder="شماره بیمه" class="text" name="insurance_number">
			<input  value="{{$persenel->account_number}}" type="text" placeholder="شماره حساب" class="text" name="account_number">
			<Select name="job">
				<option value="0">لطفا یک شغل را انتخاب نمایید..</option>
				<option @if($persenel->job == 'کارگر') selected @endif value="1">کارگر</option>
				<option @if($persenel->job == 'مهندس') selected @endif  value="2">مهندس</option>
				<option @if($persenel->job == 'کارمند') selected @endif  value="3">کارمند</option>
				<option @if($persenel->job == 'سرپرست') selected @endif  value="4">سرپرست</option>
			</Select>
			
			<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ شروع" class="text" name="start_at" value="{{Verta::instance($persenel->start_at)->format('Y-n-j')}}">
			<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ اتمام" class="text" name="end_at" value="{{Verta::instance($persenel->end_at)->format('Y-n-j')}}">
			
			<button class="btn btn-brand">اضافه کردن</button>
		</form>
	</div>


@endsection