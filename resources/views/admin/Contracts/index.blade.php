@extends('admin.layouts.main')


@section('main')
	
	
	<div class="main-content padding-0 categories">
		<div class="row no-gutters  ">
			<div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
				<p class="box__title">قراردادها</p>
				<div class="table__box">
					<table class="table">
						<thead role="rowgroup">
						<tr role="row" class="title-row">
							<th>شناسه</th>
							<th>نام قرارداد</th>
							<th>شماره ی کارگاه</th>
							<th>ردیف پیمان</th>
							<th>نام کارفرما</th>
							<th>نشانی کارگاه</th>
							<th>تاریخ شروع</th>
							<th>تاریخ پایان</th>
							<th>عملیات</th>
						</tr>
						</thead>
						<tbody>
						
						@foreach($contracts as $contract)
							<tr role="row" class="">
								<td>{{$contract->id}}</td>
								<td>{{$contract->name}}</td>
								<td>{{$contract->code}}</td>
								<td>{{$contract->row}}</td>
								<td>{{$contract->employer}}</td>
								<td>{{$contract->address}}</td>
								<td>{{ Verta::instance($contract->start_at)->format('Y-n-j')}}</td>
								<td>{{ Verta::instance($contract->end_at)->format('Y-n-j')}}</td>
								<td>
									<a href="{{route('contracts.edit',$contract->id)}}" class="item-edit " title="ویرایش"></a>
								</td>
							</tr>
							@endforeach
							
						
						
						
						</tbody>
					</table>
				</div>
			</div>
			@include('admin.Contracts.create')
		</div>
	</div>



@endsection