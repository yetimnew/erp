@extends( 'layouts.master.app' )
@section( 'title', 'TIMS | Employees' )


@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">Employees</li>
</ol>

<div class="col-md-12">
    <div class="card text-left col-md-12">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h2>All Employees </h2>
                <div class="ml-auto">
                    <a href="{{route('personale.create')}}" class="btn btn-outline-primary"><i
                            class="fafa-plus mr-1"></i>Add Personale</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-sm table-bordered " id="personales">
                    <thead>
                        <tr>
                            <th class="m-1 b-1" width="3%">No</th>
                            <th class="m-1 b-1">EmployeesID</th>
                            <th class="m-1 b-1"> Name</th>
                            <th class="m-1 b-1"> Sex</th>
                            <th class="m-1 b-1"> birthdate</th>
                            <th class="m-1 b-1"> Zone</th>
                            <th class="m-1 b-1">Woreda</th>
                            <th class="m-1 b-1">Kebele</th>
                            <th class="m-1 b-1">HouseNumber</th>
                            <th class="m-1 b-1">Telephone</th>
                            <th class="m-1 b-1">HireDate</th>
                            <th class="m-1 b-1">user </th>
                            <th class="m-1 b-1" width="3%">Edit</th>
                            <th class="m-1 b-1" width="3%">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0 ?>
                        {{-- {{dd($personales)}} --}}
						@if ($personales->count()> 0)
						@foreach ($personales  as $personale)
						<tr>
							<td >{{++$no}}</td>
							<td >{{$personale->personalesid}}</td>
							<td >{{$personale->fullname}}</td>
							<td>{{$personale->sex}}</td>
							<td>{{$personale->birthdate}}</td>
							<td>{{$personale->zone}}</td>
							<td>{{$personale->woreda}}</td>
							<td>{{$personale->kebele}}</td>
							<td>{{$personale->housenumber}}</td>
							<td>{{$personale->mobile}}</td>
							<td>{{$personale->hireddate}}</td>
                            {{-- <td> {{$personale->user->name}}</td> --}}
                            <td> {{!empty($personale->user) ? $personale->user->name:'' }}</td>

							<td data-toggle="tooltip" data-placement="top" title="Edit"><a
									href="{{route('personale.edit', $personale->id)}}"><i class="fas fa-edit"></i></a></td>
							<td  data-toggle="tooltip" data-placement="top" title="Delete">
								<form action="{{route('personale.destroy', $personale->id)}}"
									id="delete-form-{{$personale->id}}" style="display: none">
                                    @csrf
                                    @method('DELETE')
								</form>
								<button class="btn btn-sm" type="submit" onclick="if(confirm('Are you sure to delete this?')){
								event.preventDefault();
								document.getElementById('delete-form-{{$personale->id}}').submit();
									}else{
                                        event.preventDefault();
									}"><i class="fas fa-trash red"></i>
								</button>
							</td>
						</tr>
						@endforeach
						@else
						<tr>
							<td  colspan="15">No Data Avilable</td>
						</tr>
						@endif

					</tbody>

                </table>
            </div>
        </div>
        <div class="card-footer">
        </div>
    </div>


    @endsection
    @section('javascript')

	<script>
		$( document ).ready( function () {
				$( '#personales' ).DataTable( {

				"pageLength": 25,
				// "scrollY": 100,
				'columnDefs': [ {

				// 'targets': [11,12,13], /* column index */

				'orderable': false, /* true or false */

				}]
				});

			} );
	</script>
	@endsection
