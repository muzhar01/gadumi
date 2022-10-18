@extends('admin.layout')
@section('container')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-10">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gadumi /</span> Courses</h4>
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
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">Edit Course</h5>
          <div class="card-body">
            <form action="{{ route('update-course',$course->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              <label for="defaultFormControlInput" class="form-label mt-3">Title</label>
              <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Enter title" aria-describedby="defaultFormControlHelp" name="title" value="{{ $course->title ?? '' }}">
              <label for="defaultFormControlInput" class="form-label mt-3">Image</label>
              @if ($course->image)
              <br>
                <img src="{{ asset($course->image) }}" id="output" alt="" style="height: 100px" width="100px">
              @endif
              <input type="file" class="form-control" name="image"  onchange="loadFile(event)">
              <label for="defaultFormControlInput" class="form-label mt-3">Description</label>
              <textarea name="description" id="description" class="form-control" placeholder="Enter description">{{ $course->description ?? '' }}</textarea>
              <button type="submit" class="btn btn-outline-primary mt-4" data-bs-toggle="modal" data-bs-target="#addCourse">
                <span class="tf-icons bx bx-plus"></span>&nbsp; Update
              </button>
            </form>
          </div>
        </div>
      </div>
    <!--/ Basic Bootstrap Table -->

    <hr class="my-5" />

  </div>
  <!-- / Content -->


  <div class="content-backdrop fade"></div>
  <!-- Add Course -->

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
