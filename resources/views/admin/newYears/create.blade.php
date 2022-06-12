
	
	
	<div class="col-4 bg-white" >
		<p class="box__title">سال کاری</p>
		@include('admin.layouts.errors')
		<form action="{{route('newYear.store')}}" method="post" class="padding-30" >
			@csrf
			<input autocomplete="off" data-jdp  type="text" placeholder="سال کاری / ماه/روز" class="text" name="date" >
			<input type="text" placeholder="حقوق پایه روزانه" class="text" name="rights">
			<input type="text" placeholder="حق مسکن" class="text" name="right_to_housing">
			<input type="text" placeholder="حق خواروبار" class="text" name="right_to_food">
			<input type="text" placeholder="حق اولاد" class="text" name="child_allowance">
			<input type="text" placeholder="پایه سنوات روزانه" class="text" name="basis_of_daily">
			<input type="text" placeholder="سنوات روزانه" class="text" name="daily_years">
			<input type="text" placeholder="عیدی روزانه" class="text" name="dailyEid">
			<input type="text" placeholder="درصد مالیات" class="text" name="tax_tate">
			<input type="text" placeholder="مدت مرخصی سال" class="text" name="leave">
			<input type="text" placeholder="تعداد روز هفته" class="text" name="number_of_days">
			<input type="text" placeholder="تعداد روز سال" class="text" name="number_year">
			<input type="text" placeholder="درصد بیمه" class="text" name="insurance_percentage">
			<input type="text" placeholder="حد محاسبه مالیات" class="text" name="tax_calculation_limit">
			<input type="text" placeholder="مبلغ ساعت اضافه کاری شرکت" class="text" name="extra_hours">
			<input type="text" placeholder="مبلغ ساعت اضافه کار ارجائی" class="text" name="referral_overtime">
			<input type="text" placeholder="درصد شیفت شب" class="text" name="right_shift">
			<input type="text" placeholder="درصد شیفت نوبت کاری" class="text" name="shift_work">
			<input type="text" placeholder="بن" class="text" name="route">
			<button class="btn btn-brand">اضافه کردن</button>
		</form>
	</div>


