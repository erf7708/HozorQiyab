@extends('admin.layouts.main')


@section('main')
	
	
	<div class="col-8-sm bg-white fc-center" >
		<p class="box__title">سال کاری</p>
		@include('admin.layouts.errors')
		<form action="{{route('newYear.update',$newYear)}}" method="post" class="padding-30" >
			@csrf
			@method('PATCH')
			<input autocomplete="off" data-jdp  type="text" placeholder="سال کاری / ماه/روز" class="text" name="date" value="{{Verta::instance($newYear->date)->format('Y-n-j')}}"   >
		<input type="text" placeholder="حقوق پایه روزانه" class="text" value="{{$newYear->rights}}" name="rights">
		<input type="text" placeholder="حق مسکن" class="text" value="{{$newYear->right_to_housing}}" name="right_to_housing">
		<input type="text" placeholder="حق خواروبار" class="text" value="{{$newYear->right_to_food}}" name="right_to_food">
		<input type="text" placeholder="حق اولاد" class="text" value="{{$newYear->child_allowance}}" name="child_allowance">
		<input type="text" placeholder="پایه سنوات روزانه" class="text" value="{{$newYear->basis_of_daily}}" name="basis_of_daily">
		<input type="text" placeholder="سنوات روزانه" class="text" value="{{$newYear->daily_years}}" name="daily_years">
		<input type="text" placeholder="عیدی روزانه" class="text" value="{{$newYear->dailyEid}}" name="dailyEid">
		<input type="text" placeholder="درصد مالیات" class="text" value="{{$newYear->tax_tate}}" name="tax_tate">
		<input type="text" placeholder="مدت مرخصی سال" class="text" value="{{$newYear->leave}}" name="leave">
		<input type="text" placeholder="تعداد روز هفته" class="text" value="{{$newYear->number_of_days}}" name="number_of_days">
		<input type="text" placeholder="تعداد روز سال" class="text" value="{{$newYear->number_year}}" name="number_year">
		<input type="text" placeholder="درصد بیمه" class="text" value="{{$newYear->insurance_percentage}}" name="insurance_percentage">
		<input type="text" placeholder="حد محاسبه مالیات" class="text" value="{{$newYear->tax_calculation_limit}}" name="tax_calculation_limit">
		<input type="text" placeholder="مبلغ ساعت اضافه کاری شرکت" class="text" value="{{$newYear->extra_hours}}" name="extra_hours">
		<input type="text" placeholder="مبلغ ساعت اضافه کار ارجائی" class="text" value="{{$newYear->referral_overtime}}" name="referral_overtime">
		<input type="text" placeholder="درصد شیفت شب" class="text" value="{{$newYear->right_shift}}" name="right_shift">
		<input type="text" placeholder="درصد شیفت نوبت کاری" class="text" value="{{$newYear->shift_work}}" name="shift_work">
		<input type="text" placeholder="بن" class="text" value="{{$newYear->route}}" name="route">
		<button class="btn btn-brand">اضافه کردن</button>
		</form>
	</div>


@endsection