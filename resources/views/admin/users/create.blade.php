@extends('admin.layouts.main')



@section('breadcrumb')
	<li><a href="{{route('admin.panel')}}" title="پیشخوان">پیشخوان</a></li>
	<li><a href="{{route('users.index')}}" title="کاربران">کاربران</a></li>
	<li><a href="{{route('users.create')}}" title="ایجاد کاربر جدید">ایجاد کاربر جدید</a></li>
@endsection

@section('main')
	
	
	<div class="main-content font-size-13">
		<div class="row no-gutters  bg-white">
			<div class="col-12">
				<p class="box__title">ایجاد کاربر جدید</p>
				<form action="{{route('users.store')}}" class="padding-30" method="post">
					@csrf
					<input type="text" class="text" placeholder="نام و نام خانوادگی" name="name">
					<input type="text" class="text" placeholder="نام کاربری" name="email">
					<input type="password" class="text" placeholder="رمز عبور" name="password">
					
					
					<select name="contract_id">
						<option value="">قرارداد موردنظر را انتخاب نمایید...</option>
						@foreach($contracts as $contract)
							<option value="{{$contract->id}}">{{$contract->name}}</option>
						@endforeach
					</select>
					
					
					<select name="role_id" id="">
						<option value="0">دسترسی را انتخاب نمایید...</option>
						@foreach($roles as $role)
							<option value="{{$role->id}}">{{$role->lable}}</option>
						@endforeach
					</select>
					
				
					<button class="btn btn-brand">اضافه کردن</button>
				</form>
			
			</div>
		</div>
	</div>
	
	
	
@endsection


