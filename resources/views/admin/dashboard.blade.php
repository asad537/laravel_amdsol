@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Container -->
<div class="container mt-xl-50 mt-sm-30 mt-15">
	<!-- Title -->
	<div class="hk-pg-header align-items-top">
		<div>
			<h2 class="hk-pg-title font-weight-600 mb-10">Welcome Back! {{ auth()->user()->username }}</h2>
		</div>
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
		<div class="col-xl-12">
			<div class="hk-row">
				<div class="col-sm-12">
					<div class="card-group hk-dash-type-2">
						<div class="card card-sm">
							<div class="card-body">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<span class="d-block font-15 text-dark font-weight-500">Users</span>
									</div>
									<div>
										<span class="text-success font-14 font-weight-500">+10%</span>
									</div>
								</div>
								<div>
									<span class="d-block display-4 text-dark mb-5">168M</span>
									<small class="d-block">172,458 Target Users</small>
								</div>
							</div>
						</div>
					
						<div class="card card-sm">
							<div class="card-body">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<span class="d-block font-15 text-dark font-weight-500">Campaign Leads</span>
									</div>
									<div>
										<span class="text-success font-14 font-weight-500">+12.5%</span>
									</div>
								</div>
								<div>
									<span class="d-block display-4 text-dark mb-5"><span class="counter-anim">168,856</span></span>
									<small class="d-block">472,458 Targeted</small>
								</div>
							</div>
						</div>
					
						<div class="card card-sm">
							<div class="card-body">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<span class="d-block font-15 text-dark font-weight-500">New Contacts</span>
									</div>
									<div>
										<span class="text-warning font-14 font-weight-500">-2.8%</span>
									</div>
								</div>
								<div>
									<span class="d-block display-4 text-dark mb-5">73</span>
									<small class="d-block">100 Targeted</small>
								</div>
							</div>
						</div>
						<div class="card card-sm">
							<div class="card-body">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<span class="d-block font-15 text-dark font-weight-500">Win/Loss Ratio</span>
									</div>
									<div>
										<span class="text-danger font-14 font-weight-500">-75%</span>
									</div>
								</div>
								<div>
									<span class="d-block display-4 text-dark mb-5">48:65</span>
									<small class="d-block">42:32 Targeted</small>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<!-- /Row -->
</div>
@endsection
