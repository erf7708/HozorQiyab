@extends('admin.layouts.main')



@section('breadcrumb')
	<li><a href="{{route('admin.panel')}}" title="پیشخوان">پیشخوان</a></li>
	<li><a href="{{route('users.index')}}" title="کاربران">کاربران</a></li>
	<li><a href="{{route('users.create')}}" title="ایجاد کاربر جدید">ویرایش کاربر </a></li>
@endsection

@section('main')
	
	
	<div class="main-content font-size-13">
		<div class="row no-gutters  bg-white">
			<div class="col-12">
				<p class="box__title">ویرایش کاربر {{$user->name}}</p>
				@include('admin.layouts.errors')
				<form action="{{route('users.update',$user)}}" class="padding-30" method="post">
					@csrf
					@method('PATCH')
					<input type="text" class="text" placeholder="نام و نام خانوادگی" name="name" value="{{$user->name}}">
					<input type="text" class="text" placeholder="نام کاربری" name="email" value="{{$user->email}}">
					<select name="contract_id">
						<option value="">قرارداد موردنظر را انتخاب نمایید...</option>
						@foreach($contracts as $contract)
							<option
									
									@if($contract->id == $user->contract_id)
									selected
									@endif
									
									value="{{$contract->id}}">{{$contract->name}}</option>
						@endforeach
					</select>
					
					
					<select name="role_id" id="">
						<option value="0">دسترسی را انتخاب نمایید...</option>
						@foreach($roles as $role)
							<option
									@if($role->id == $user->role_id)
									selected
									@endif
									
									
									value="{{$role->id}}">{{$role->lable}}</option>
						@endforeach
					</select>
					
					
					<button class="btn btn-brand">ویرایش کردن</button>
				</form>
			
			</div>
		</div>
	</div>



@endsection


