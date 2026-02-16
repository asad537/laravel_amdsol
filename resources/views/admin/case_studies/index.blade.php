@extends('admin.layouts.app')

@section('title', 'Case Studies List')

@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Case Studies List</li>
	</ol>
</nav>
<!-- /Breadcrumb -->

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="feather-icon"><i data-feather="book-open"></i></span> Case Studies List</h4>
        <a href="{{ route('case_studies.create') }}" class="btn btn-primary">Add New Case Study</a>
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
                            @foreach($case_studies as $case_study)
                            <tr>
                                <td>{{ $case_study->title }}</td>
                                <td>
                                    @if($case_study->image)
                                    <img src="{{ asset('assets/images/case-studies/' . $case_study->image) }}" style="width: 80px;">
                                    @endif
                                </td>
                                <td>{{ $case_study->author }}</td>
                                <td>
                                    @if($case_study->display == '1')
                                        <span class="badge badge-success">Displayed</span>
                                    @else
                                        <span class="badge badge-danger">Hidden</span>
                                    @endif
                                </td>
                                <td>{{ $case_study->date }}</td>
                                <td>
                                    <a href="{{ route('case_studies.edit', $case_study->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('case_studies.destroy', $case_study->id) }}" method="POST" style="display:inline;">
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
