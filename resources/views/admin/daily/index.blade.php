@extends('sarparast.layouts.main')


@section('main')
	
	
	<div class="main-content padding-0 categories">
		<div class="row no-gutters  ">
			<div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
				
				<p class="box__title">لیست حضور روزانه</p>
			
				<div class="table__box">
					
					
					<table class="table">
						<thead role="rowgroup">
						<tr role="row" class="title-row">
							<th></th>
							<th>کد پرسنلی</th>
							<th>نام/نام خانوادگی </th>
							<th>روز</th>
							<th>شب </th>
							<th>نوبت</th>
							<th>مرخصی</th>
						
						</tr>
						</thead>
						<tbody>
						@include('admin.layouts.errors')
						<form action="{{route('daily.store')}}" method="post">
							@csrf
						@foreach($staffs as $staff)
							
							<tr role="row" class="">
								
								<td><input type="hidden" class="text-center" name="staff_id[]" value="{{$staff->id}}"   style="background: white"></td>
								<td>{{$staff->StaffId}}</td>
							
								<td><input type="text" disabled style="background: white" name="staff_id" class="text-center" value="{{$staff->firstName}} {{$staff->lastName}}"></td>
								<td><input type="number" name="day[]" class="text"></td>
								<td><input type="text" name="night[]" class="text"></td>
								<td><input type="text" name="turn[]" class="text"></td>
								<td><input type="text" name="leave[]" class="text"></td>
								
							
{{--								<td>{{$daily->night}}</td>--}}
{{--								<td>{{$daily->turn}}</td>--}}
{{--								<td>{{$daily->leave}}</td>--}}
							</tr>
						@endforeach
							
							<button  class="btn btn-sm btn-success item-center">send</button>
						
						</form>
						
						</tbody>
					</table>
					
					
				</div>
			</div>
		
		</div>
	</div>



@endsection