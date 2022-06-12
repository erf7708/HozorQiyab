@extends('karmand.layouts.main')


@section('main')
	
	
	<div class="main-content padding-0 categories">
		<div class="row no-gutters  ">
			<div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
				<p class="box__title">پاداش و جریمه</p>
				<div class="table__box">
					<table class="table">
						<thead role="rowgroup">
						<tr role="row" class="title-row">
							<th>شناسه</th>
							<th> کد پرسنل</th>
							<th>نام پرسنل</th>
							<th>مبلغ</th>
							<th>توضیحات</th>
							<th>تاریخ ثیت</th>
							<th>جریمه/پاداش</th>
							<th>حذف</th>
						</tr>
						</thead>
						<tbody>
						
						@foreach($rewards as $reward)
							<tr role="row" class="">
								<td>{{$reward->id}}</td>
								<td>{{$reward->staff->StaffId}}</td>
								<td>{{$reward->staff->firstName}} {{$reward->staff->lastName }}</td>
								<td>{{$reward->amount}}</td>
								<td>{{$reward->description}}</td>
								<td>{{ Verta::instance($reward->date)->format('Y-n-j')}}</td>
								<td>{{$reward->reward}}</td>
								<td>
									<form action="{{route('rewards.destroy',$reward)}}" method="post">
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
			@include('karmand.rewards.create')
		</div>
	</div>



@endsection