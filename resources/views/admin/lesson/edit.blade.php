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
          <h5 class="card-header">Edit Lesson</h5>
          <div class="card-body">
            <form action="{{ route('update-lesson',$lesson->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <label for="" class="mt-3">Title</label>
                  <input type="text" name="title" placeholder="Enter Title" class="form-control" value="{{$lesson->title}}">
                  @error('title')
                   <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Course</label>
                  <select name="course_id"  class="form-control" required>
                    <option>Select Course</option>
                    @foreach ($courses as $course)
                      <option value="{{ $course->id }}" <?php if($course->id==$lesson->course_id) echo 'selected' ?>>{{ $course->title }}</option>
                    @endforeach
                  </select>
                  @error('course_id')
                   <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Is Recomended</label>
                  <select name="recommended"  class="form-control">
                    <option value="1" <?php if($lesson->recommended=='1') echo 'selected' ?>>Yes</option>
                    <option value="0"  <?php if($lesson->recommended=='0') echo 'selected' ?>>No</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Level</label>
                  <select name="level"  class="form-control">
                    <option value="Beginner" <?php if($lesson->level=='Beginner') echo 'selected' ?>>Beginner</option>
                    <option value="Intermediate" <?php if($lesson->level=='Intermediate') echo 'selected' ?>>Intermediate</option>
                    <option value="Advanced" <?php if($lesson->level=='Advanced') echo 'selected' ?>>Advanced</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Image</label>
                  @if ($lesson->image)
                  <br>
                    <img src="{{ asset($lesson->image) }}" id="output" alt="" style="height: 100px" width="100px">
                  @endif
                  <input type="file" name="image" class="form-control" onchange="loadFile(event)">
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Overview</label>
                  <input type="text" name="overview" class="form-control" placeholder="Enter overview" value="{{$lesson->overview}}">
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Description</label>
                  <textarea name="description" class="form-control" placeholder="Enter description">{{$lesson->overview ?? ''}}</textarea>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-outline-primary mt-4">Update</button>
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
