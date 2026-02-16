@extends('admin.layouts.app')

@section('title', 'Banners List')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Banners List</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="feather-icon"><i data-feather="monitor"></i></span> Banners List</h4>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBannerModal">
            Add New Banner
        </button>
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
                                <th>Image</th>
                                <th>Alt</th>
                                <th>Status</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $banner)
                            <tr>
                                <td>{{ $banner->name }}</td>
                                <td>
                                    @if($banner->images)
                                    <img src="{{ asset('images/banners/' . $banner->images) }}" style="width: 100px;">
                                    @endif
                                </td>
                                <td>{{ $banner->alt }}</td>
                                <td>
                                    @if($banner->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Disabled</span>
                                    @endif
                                </td>
                                <td>{{ $banner->position }}</td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#editBannerModal{{ $banner->id }}">Edit</button>
                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editBannerModal{{ $banner->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Banner</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control" value="{{ $banner->name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Text</label>
                                                    <textarea name="text" class="form-control">{{ $banner->text }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alt Text</label>
                                                    <input type="text" name="alt" class="form-control" value="{{ $banner->alt }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="file" name="image" class="form-control">
                                                    <small>Leave empty to keep current image</small>
                                                </div>
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="number" name="position" class="form-control" value="{{ $banner->position }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1" {{ $banner->status == 1 ? 'selected' : '' }}>Enable</option>
                                                        <option value="0" {{ $banner->status == 0 ? 'selected' : '' }}>Disable</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Banner</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addBannerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add New Banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Banner Name">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <textarea name="text" class="form-control" placeholder="Banner Text"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Alt Text</label>
                        <input type="text" name="alt" class="form-control" placeholder="Image Alt" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <input type="number" name="position" class="form-control" value="0">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Enable</option>
                            <option value="0">Disable</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Banner</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#datable_1').DataTable();
    });
</script>
@endsection
