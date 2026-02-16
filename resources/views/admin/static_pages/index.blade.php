@extends('admin.layouts.app')

@section('title', 'Static Pages List')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Static Pages</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="feather-icon"><i data-feather="file-text"></i></span> Static Pages</h4>
        <a href="{{ route('static-pages.create') }}" class="btn btn-primary">Add New Page</a>
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
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->seokey }}</td>
                                <td>
                                    <a href="{{ route('static-pages.edit', $page->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('static-pages.destroy', $page->id) }}" method="POST" style="display:inline;">
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
