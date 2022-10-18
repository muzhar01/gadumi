@extends('admin.layout')
@section('container')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-10">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gadumi /</span> Exercise</h4>
      </div>
      <div class="col-lg-2 mt-2">
        <a href="{{ route('add-exercise') }}" class="btn btn-outline-primary">Add Exercise</a>
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
      <h5 class="card-header">Exercise List</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($exercises as $exercise)
              <tr>
                <td>
                  <img src="{{ $exercise->image }}" alt="" style="height: 100px" width="100px">
                </td>
                <td>{{ $exercise->title }}</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      @if ($exercise->status==1)
                        <span class="badge bg-label-primary me-1">Active</span>
                      @else
                        <span class="badge bg-label-danger me-1">Deactive</span>
                      @endif
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item bg-label-primary mb-1" href="{{ route('exercise-status',['id'=>$exercise->id,'status'=>'1']) }}"
                        > Active</a
                      >
                      <a class="dropdown-item bg-label-danger mb-1" href="{{ route('exercise-status',['id'=>$exercise->id,'status'=>'0']) }}"
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
                      <a class="dropdown-item" href="{{ route('exercise-edit',$exercise->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="{{ route('exercise-delete',$exercise->id) }}"><i class="bx bx-trash me-1"></i> Delete</a>
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

@endsection
