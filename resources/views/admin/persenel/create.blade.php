<div class="col-4 bg-white">
	<p class="box__title">ایجاد پرسنل جدید</p>
	@include('karmand.layouts.errors')
	<form action="{{route('persenel.store')}}" method="post" class="padding-30">
		@csrf
		<input type="text" placeholder="کد پرسنلی" class="text" name="StaffId">
		<input type="text" placeholder="نام" class="text" name="firstName">
		<input type="text" placeholder="نام خانوادگی" class="text" name="lastName">
		<input type="text" placeholder="نام پدر" class="text" name="fatherName">
		<input type="text" placeholder="کدملی" class="text" name="code">
		<input type="text" placeholder="شماره شناسنامه" class="text" name="numberSh">
		<input type="text" placeholder="تعداد فرزند" class="text" name="countChildren">
		<input type="text" placeholder="شماره موبایل" class="text" name="phone">
		<input type="text" placeholder="شماره بیمه" class="text" name="insurance_number">
		<input type="text" placeholder="شماره حساب" class="text" name="account_number">
		<Select name="job">
			<option value="0">لطفا یک شغل را انتخاب نمایید..</option>
			<option value="1">کارگر</option>
			<option value="2">مهندس</option>
			<option value="3">کارمند</option>
			<option value="4">سرپرست</option>
		</Select>
		
		<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ شروع" class="text" name="start_at">
		<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ اتمام" class="text" name="end_at">
		<button class="btn btn-brand">اضافه کردن</button>
	</form>
</div>