@extends('admin.layouts.main')


@section('main')
	
	
	<div class="main-content padding-0 categories">
		<div class="row no-gutters  ">
			<div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
				<p class="box__title">نظم دهی پرسنل</p>
				<div class="table__box">
					<table class="table">
						<thead role="rowgroup">
						<tr role="row" class="title-row">
							<th>شناسه</th>
							<th> </th>
							<th>عملیات</th>
						</tr>
						</thead>
						<tbody>
						
						@foreach($newYears as $newYear)
							<tr role="row" class="">
								<td>{{$newYear->id}}</td>
								<td>{{ Verta::instance($newYear->date)->format('Y-n-j')}}</td>
								<td>
									<a href="{{route('newYear.edit',$newYear->id)}}" class="item-edit " title="ویرایش"></a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			@include('admin.newYears.create')
		</div>
	</div>



@endsection