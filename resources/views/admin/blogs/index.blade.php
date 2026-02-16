@extends('admin.layouts.app')

@section('title', 'Blogs List')

@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Blogs List</li>
	</ol>
</nav>
<!-- /Breadcrumb -->

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="feather-icon"><i data-feather="book-open"></i></span> Blogs List</h4>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add New Blog</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                <div class="table-wrap">
                    <table id="datable_1" class="table table-hover w-100 display pb-30">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Author</th>
                                <th>Display</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    @if($blog->image)
                                    <img src="{{ asset('assets/images/' . $blog->image) }}" style="width: 80px;">
                                    @endif
                                </td>
                                <td>{{ $blog->author }}</td>
                                <td>
                                    @if($blog->display == '1')
                                        <span class="badge badge-success">Displayed</span>
                                    @else
                                        <span class="badge badge-danger">Hidden</span>
                                    @endif
                                </td>
                                <td>{{ $blog->date }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
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
