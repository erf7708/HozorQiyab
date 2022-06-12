@extends('karmand.layouts.main')


@section('main')
	
	
	<div class="main-content padding-0 categories">
		<div class="row no-gutters  ">
			<div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
				<p class="box__title">فیش حقوقی و قرارداد</p>
				<div class="table__box">
					<table class="table">
						<thead role="rowgroup">
						<tr role="row" class="title-row">
							
							<th> کد پرسنل</th>
							<th>نام پرسنل</th>
							<th>چاپ قراداد</th>
							<th>چاپ فیش حقوقی</th>
						</tr>
						</thead>
						<tbody>
						
						@foreach($persenels as $persenel)
							<tr role="row" class="">
								<td>{{$persenel->StaffId}}</td>
								<td>{{$persenel->firstName}} {{$persenel->lastName}}</td>
								
								
								<td>
									<form action="" method="post">
										@csrf
										@method('DELETE')
										<button class="item-delete mlg-15" ></button>
									</form>
								</td>
								<td>
									<form action="" method="post">
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
			
		</div>
	</div>



@endsection