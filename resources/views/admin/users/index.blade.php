@extends('admin.layouts.main')



@section('breadcrumb')
	<li><a href="{{route('admin.panel')}}" title="پیشخوان">پیشخوان</a></li>
	<li><a href="{{route('users.index')}}" title="کاربران">کاربران</a></li>
@endsection

@section('main')
	
	<div class="main-content font-size-13">
		<div class="tab__box">
			<div class="tab__items">
				<a class="tab__item @if(request()->routeIs('users.index')) is-active @endif" href="{{route('users.index')}}">همه کاربران</a>
				<a class="tab__item @if(request()->routeIs('users.create')) is-active @endif " href="{{route('users.create')}}">ایجاد کاربر جدید</a>
			</div>
		</div>
		<div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
			<div class="t-header-search">
				<form action="" onclick="event.preventDefault();">
					<div class="t-header-searchbox font-size-13">
						<div type="text" class="text search-input__box ">جستجوی دوره</div>
						<div class="t-header-search-content " style="display: none;">
							<input type="text" class="text" placeholder="شماره">
							<input type="text" class="text" placeholder="ای پی">
							<input type="text" class="text" placeholder="نام خناوادگی">
							<input type="text" class="text margin-bottom-20" placeholder="دسته بندی">
							<btutton class="btn btn-brand">جستجو</btutton>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="table__box">
			<table class="table">
				<thead role="rowgroup">
				<tr role="row" class="title-row">
					<th>شناسه</th>
					<th>نام و نام خانوادگی</th>
					<th>نام کاربری</th>
					<th>سطح کاربری</th>
					<th>تاریخ عضویت</th>
					<th>قرارداد</th>
					<th>ویرایش</th>
					<th>حذف</th>
				</tr>
				</thead>
				<tbody>
				@foreach($users as $user)
				<tr role="row" class="">
					
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->role->lable}}</td>
					<td>{{Verta::instance($user->created_at)->format('Y-n-j')}}</td>
					<td>{{$user->contract->name}}</td>
				
					<td class="padding-0 mr-auto">
						<a href="{{route('users.edit',$user)}}" class="item-edit " title="ویرایش"></a>
					</td>
					
					<td>
						<form action="{{route('users.destroy',$user)}}" method="post">
							@csrf
							@method('DELETE')
							<button class="item-delete mlg-15" ></button>
						</form>
					</td>
				</tr>
				
			
					
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection