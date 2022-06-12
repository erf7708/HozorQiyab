@extends('admin.layouts.main')



@section('main')
	
	
	
	
	<div class="main-content font-size-13">
		<div class="tab__box">
			<div class="tab__items">
				<a class="tab__item @if(request()->routeIs('edit.profile')) is-active @endif" href="{{route('users.index')}}">ویرایش اطلاعات کاربری</a>
				<a class="tab__item @if(request()->routeIs('get.password')) is-active @endif " href="{{route('get.password')}}">تغییر رمز عبور</a>
			</div>
		</div>
		
		<div class="user-info bg-white padding-30 font-size-13">
			@include('admin.layouts.errors')
			<form action="{{route('update.profile')}}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PATCH')
				<div class="profile__info border cursor-pointer text-center">
					<div class="avatar__img"><img src="{{str_replace('public','/storage',auth()->user()->image)}}" class="avatar___img">
						<input type="file" accept="image/*" class="hidden avatar-img__input" name="image" value="/{{auth()->user()->image}}" >
						<div class="v-dialog__container" style="display: block;"></div>
						<div class="box__camera default__avatar"></div>
					</div>
					<span class="profile__name">{{$user->name}}</span>
				</div>
				<input class="text" placeholder="نام و نام خانوادگی" value="{{$user->name}}" name="name">
				<input class="text  text-right" disabled placeholder="نام کاربری" value="{{$user->email}}" name="email">
				<input class="text text-right" placeholder="شماره موبایل" value="{{auth()->user()->phone}}" name="phone">
				
				<br>
				
				<br>
				<br>
				<button class="btn btn-brand">ذخیره تغییرات</button>
			</form>
		</div>
	</div>
	
	
	
	@endsection