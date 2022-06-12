<div class="col-4 bg-white">
	<p class="box__title">ایجاد قرارداد جدید</p>
	<form action="{{route('contracts.store')}}" method="post" class="padding-30">
		@csrf
		<input type="text" placeholder="نام قرارداد" class="text" name="name">
		<input type="text" placeholder="شماره کارگاه" class="text" name="code">
		<input type="text" placeholder="ردیف پیمان" class="text" name="row">
		<input type="text" placeholder="نام کارفرما" class="text" name="employer">
		<textarea name="address" id="" cols="30" rows="10" placeholder="نشانی کارگاه" ></textarea>
		<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ شروع" class="text" name="start_at">
		<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ اتمام" class="text" name="end_at">
		<button class="btn btn-brand">اضافه کردن</button>
	</form>
</div>