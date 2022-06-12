<div class="col-4 bg-white">
	<p class="box__title">ایجاد پاداش و جریمه</p>
	@include('karmand.layouts.errors')
	<form action="{{route('rewards.store')}}" method="post" class="padding-30">
		@csrf
		<select name="staff_id" id="">
			<option value="0">یک پرسنل را انتخاب نمایید ...</option>
			@foreach($staffs as $staff)
				<option value="{{$staff->id}}">{{$staff->firstName}} {{$staff->lastName}}</option>
			@endforeach
		</select>
		<input autocomplete="off" data-jdp type="text" type="text" placeholder="تاریخ ثبت" class="text" name="date">
		<select name="reward" id="">
			<option value="1">پاداش</option>
			<option value="1">جریمه</option>
		</select>
		<input type="text" placeholder="مبلغ" class="text" name="amount">
		<textarea name="description" id="" cols="30" rows="10"></textarea>
		
		
		<button class="btn btn-brand">اضافه کردن</button>
	</form>
</div>