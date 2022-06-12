@extends('karmand.layouts.main')


@section('main')
	
	
	<div class="main-content padding-0 categories">
		<div class="row no-gutters  ">
			<div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
				<p class="box__title">لیست پرسنل</p>
				<div class="table__box">
					<table class="table">
						<thead role="rowgroup">
						<tr role="row" class="title-row">
							<th>شناسه</th>
							<th>کد پرسنلی</th>
							<th>نام </th>
							<th>نام خانوادگی</th>
							<th>نام پدر</th>
							<th>کدملی</th>
							<th>شماره شناسنامه</th>
							<th>شغل</th>
							<th>شماره تماس</th>
							<th>ویرایش</th>
							<th>حذف</th>
						</tr>
						</thead>
						<tbody>
						
						@foreach($staffs as $staff)
							<tr role="row" class="">
								<td>{{$staff->id}}</td>
								<td>{{$staff->StaffId}}</td>
								<td>{{$staff->firstName}}</td>
								<td>{{$staff->lastName}}</td>
								<td>{{$staff->fatherName}}</td>
								<td>{{$staff->code}}</td>
								<td>{{$staff->numberSh}}</td>
								<td>{{$staff->job}}</td>
								<td>{{$staff->phone}}</td>
								
								<td class="padding-0 mr-auto">
									<a href="{{route('persenel.edit',$staff)}}" class="item-edit " title="ویرایش"></a>
								</td>
								
								<td>
									<form action="{{route('persenel.destroy',$staff)}}" method="post">
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
			@include('karmand.persenel.create')
		</div>
	</div>



@endsection