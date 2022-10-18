@extends('admin.layout')
@section('container')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-10">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gadumi /</span> Lessons</h4>
      </div>
      <div class="col-lg-2 mt-2">
        <a href="{{ route('add-lesson') }}" class="btn btn-outline-primary">Add Lesson</a>
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
      <h5 class="card-header">Lessons List</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              {{-- <th>Index</th> --}}
              <th>Image</th>
              <th>Title</th>
              <th>Overview</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($lessons as $lesson)
              <tr>
                {{-- <td>
                  <i class="bx bx-transfer-alt"></i>
                </td> --}}
                <td>
                  <img src="{{ asset($lesson->image) }}" alt="" style="height: 100px" width="100px">
                </td>
                <td>{{ $lesson->title }}</td>
                <td>
                  <p>{{ $lesson->overview }}</p>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      @if ($lesson->status==1)
                        <span class="badge bg-label-primary me-1">Active</span>
                      @else
                        <span class="badge bg-label-danger me-1">Deactive</span>
                      @endif
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item bg-label-primary mb-1" href="{{ route('lesson-status',['id'=>$lesson->id,'status'=>'1']) }}"
                        > Active</a
                      >
                      <a class="dropdown-item bg-label-danger mb-1" href="{{ route('lesson-status',['id'=>$lesson->id,'status'=>'0']) }}"
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
                      <a class="dropdown-item" href="{{ route('lesson-edit',$lesson->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="{{ route('lesson-delete',$lesson->id) }}"><i class="bx bx-trash me-1"></i> Delete</a>
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

</div>

@endsection
