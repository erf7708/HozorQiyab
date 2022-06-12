<div class="col-4 bg-white">
	<p class="box__title">ایجاد پرداخت مساعده</p>
	@include('karmand.layouts.errors')
	<form action="{{route('help.store')}}" method="post" class="padding-30">
		@csrf
		
		<Select name="staff_id">
			<option value="0">لطفا یک پرسنل را انتخاب نمایید..</option>
			@foreach($staffs as $staff)
				<option value="{{$staff->id}}">{{$staff->firstName}}-{{$staff->lastName}}</option>
				@endforeach
			
		</Select>
	
		<Select name="month">
			<option value="0">لطفا یک ماه را انتخاب نمایید..</option>
			<option value="1">فروردین</option>
			<option value="2">اردیبشهت</option>
			<option value="3">خرداد</option>
			<option value="4">تیر</option>
			<option value="5">مرداد</option>
			<option value="6">شهریور</option>
			<option value="7">مهر</option>
			<option value="8">آبان</option>
			<option value="9">آذر</option>
			<option value="10">دی</option>
			<option value="11">بهمن</option>
			<option value="12">اسفند</option>
		</Select>
		
		<Select name="year">
			<option value="0">لطفا یک سال را انتخاب نمایید..</option>
			<option value="1">1398</option>
			<option value="2">1399</option>
			<option value="3">1400</option>
			<option value="4">1401</option>
			<option value="5">1402</option>
			<option value="6">1403</option>
			<option value="7">1404</option>
			<option value="8">1405</option>
			<option value="9">1406</option>
			<option value="10">1407</option>
			<option value="11">1408</option>
			<option value="12">1409</option>
			<option value="12">1410</option>
		</Select>
		
		<input type="number" placeholder="مبلغ پرداختی" class="text" name="amount">
		
		<textarea name="description" id="" cols="30" rows="10"></textarea>
		<button class="btn btn-brand">اضافه کردن</button>
	</form>
</div>