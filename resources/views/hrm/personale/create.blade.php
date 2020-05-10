@extends( 'layouts.master.app' )
@section( 'title', 'TIMS | Driver Registration' )

@section( 'content' )

<div class="col-md-12">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a>
			</li>
			<li class="breadcrumb-item active">Driver Registration</li>
		</ol>
	</nav>
	<div class="card text-left">
		<div class="card-header">

			<div class="d-flex align-items-center">
				<h2>Driver Registration</h2>
				@can('driver create')
				<div class="ml-auto">
					<a href="{{route('personale')}}" class="btn btn-outline-primary">
						<i class="fa fa-caret-left mr-1" aria-hidden="true"></i>Back</a>


				</div>
				@endcan
			</div>

		</div>
		<div class="card-body">
			<form method="post" action="{{route('personale.store')}}"  id="driver_reg" >
				@csrf
				@include('hrm.personale.form')
				<div class="form-group required">
					<button type="submit" class="btn btn-primary" >Save</button>

				</div>
		</div>

	</div>
</div>
<div class="card-footer">

</div>

</form>
</div>
</div>

@endsection
@section( 'javascript' )


@endsection
