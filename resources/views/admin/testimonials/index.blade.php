@extends('admin.layouts.app')

@section('title', 'Testimonials List')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Testimonials</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="feather-icon"><i data-feather="message-circle"></i></span> Testimonials</h4>
        <a href="{{ route('testimonials.create') }}" class="btn btn-primary">Add New Testimonial</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success mt-10">{{ session('success') }}</div>
    @endif

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                <div class="table-wrap">
                    <table id="datable_1" class="table table-hover w-100 display pb-30">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->title }}</td>
                                <td>
                                    @if($testimonial->image)
                                    <img src="{{ asset('assets/images/' . $testimonial->image) }}" style="width: 60px; height: 60px; border-radius: 50%;">
                                    @endif
                                </td>
                                <td>
                                    @if($testimonial->display == '1')
                                        <span class="badge badge-success">Show</span>
                                    @else
                                        <span class="badge badge-danger">Hide</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#datable_1').DataTable();
    });
</script>
@endsection
