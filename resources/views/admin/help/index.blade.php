@extends('karmand.layouts.main')


@section('main')
	
	
	<div class="main-content padding-0 categories">
		<div class="row no-gutters  ">
			<div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
				<p class="box__title">لیست پرداخت مساعده</p>
				<div class="table__box">
					<table class="table">
						<thead role="rowgroup">
						<tr role="row" class="title-row">
							<th>شناسه</th>
							<th>کد پرسنلی</th>
							<th>نام </th>
							<th>نام خانوادگی</th>
							<th>مبلغ پرداختی</th>
							<th>توضیحات</th>
							
							
							
						</tr>
						</thead>
						<tbody>
						
						@foreach($helps as $help)
							<tr role="row" class="">
								<td>{{$help->id}}</td>
								<td>{{$help->staff->StaffId}}</td>
								<td>{{$help->staff->firstName}}</td>
								<td>{{$help->staff->lastName}}</td>
								<td>{{$help->amount}}</td>
								<td>{{$help->description}}</td>
							</tr>
						@endforeach
						
						
						
						
						</tbody>
					</table>
				</div>
			</div>
			@include('karmand.help.create')
		</div>
	</div>



@endsection