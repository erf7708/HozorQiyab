@extends('admin.layouts.main')



@section('breadcrumb')
	<li><a href="{{route('admin.panel')}}" title="پیشخوان">پیشخوان</a></li>
	<li><a href="{{route('get.password')}}" title="تغییر رمز عبور">تغییر رمز عبور</a></li>
@endsection

@section('main')
	
	
	<div class="main-content font-size-13">
		<div class="row no-gutters  bg-white">
			<div class="col-12">
				<p class="box__title">تغییر رمز عبور</p>
				@include('admin.layouts.errors')
				<form action="{{route('post.password')}}" class="padding-30" method="post">
					@csrf
					@method('PATCH')
					<input type="text" class="text" placeholder="نام کاربری" name="email">
					<input type="password" class="text" placeholder="رمز عبور" name="old_password">
					<input type="password" class="text" placeholder="رمز عبور" name="new_password">
					<button class="btn btn-brand">ویرایش کردن</button>
				</form>
			
			</div>
		</div>
	</div>



@endsection


