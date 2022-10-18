@extends('admin.layout')
@section('container')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-10">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gadumi /</span> Lesson</h4>
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
      <div class="col-md-12">
        <div class="card mb-4">
          <h5 class="card-header">Add Lesson</h5>
          <div class="card-body">
            <form action="{{ route('submit-lesson') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <label for="" class="mt-3">Title</label>
                  <input type="text" name="title" placeholder="Enter Title" class="form-control">
                  @error('title')
                   <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Course</label>
                  <select name="course_id"  class="form-control" required>
                    <option>Select Course</option>
                    @foreach ($courses as $course)
                      <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                  </select>
                  @error('course_id')
                   <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Is Recommended</label>
                  <select name="recomended"  class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Level</label>
                  <select name="level"  class="form-control">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Image</label>
                  <br>
                  <img src="{{ asset('images/imageperview.png') }}" id="output" alt="" style="height: 100px" width="100px">
                  <input type="file" name="image" class="form-control"  onchange="loadFile(event)">
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Overview</label>
                  <input type="text" name="overview" class="form-control" placeholder="Enter overview">
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Description</label>
                  <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-outline-primary mt-4">Add</button>
                </div>
              </div>
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
