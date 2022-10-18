@extends('admin.layout')
@section('container')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-10">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gadumi /</span> Courses</h4>
      </div>
      <div class="col-lg-2 mt-2">
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addCourse">
          <span class="tf-icons bx bx-plus"></span>&nbsp; Add Course
        </button>
      </div>
    </div>
    @if (Session::has('success'))
    <div class="alert alert-primary alert-dismissible" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
      {{ Session::get('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Courses List</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Description</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($courses as $course)
              <tr>
                <td>
                  <img src="{{ asset($course->image) }}" alt="" style="height: 100px" width="100px">
                </td>
                <td>{{ $course->title }}</td>
                <td>
                  <p>{{ $course->description }}</p>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      @if ($course->status==1)
                        <span class="badge bg-label-primary me-1">Active</span>
                      @else
                        <span class="badge bg-label-danger me-1">Deactive</span>
                      @endif
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item bg-label-primary mb-1" href="{{ route('courses-status',['id'=>$course->id,'status'=>'1']) }}"
                        > Active</a
                      >
                      <a class="dropdown-item bg-label-danger mb-1" href="{{ route('courses-edit',['id'=>$course->id,'status'=>'0']) }}"
                        >Deactive</a
                      >
                    </div>
                  </div>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('courses-edit',$course->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="{{ route('delete-course',$course->id) }}"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->

    <hr class="my-5" />

  </div>
  <!-- / Content -->


  <div class="content-backdrop fade"></div>
  <!-- Add Course -->
  <div class="modal fade" id="addCourse" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCenterTitle">Add Course</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form method="post"  enctype="multipart/form-data" action="{{ route('courses-store') }}">
          @csrf
          <div class="modal-body">
            <div class="alert alert-primary alert-dismissible"  id="response" style="display:none" role="alert">
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="nameWithTitle" class="form-label">Title</label>
                <input
                  type="text"
                  id="nameWithTitle"
                  class="form-control"
                  placeholder="Enter Title"
                  name="title"
                />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="image" class="form-label">Image</label>
                <br>
                <img src="{{ asset('images/imageperview.png') }}" id="output" alt="" style="height: 100px" width="100px">
                <input
                  type="file"
                  id="image"
                  class="form-control"
                  name="image"
                  onchange="loadFile(event)"
                />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="nameWithTitle" class="form-label">Description</label>
                <textarea class="form-control" placeholder="Enter Description" name="description"></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endsection
