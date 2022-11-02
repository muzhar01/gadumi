@extends('admin.layout')
@section('container')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-10">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gadumi /</span> Settings</h4>
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
          <h5 class="card-header">Update Settings</h5>
          <div class="card-body">
            <form action="{{ route('update-setting') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <label for="" class="mt-3">Font Size</label>
                  <input type="text" name="font_size" placeholder="Enter Font Size" class="form-control" value="{{ $setting->font_size ?? '' }}">
                   @error('font_size')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <label for="color" class="mt-3">Color</label>
                  <input type="text" name="color" placeholder="Enter Color" value="{{ $setting->color ?? '' }}" class="form-control">
                  @error('color')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <label for="line_spacing" class="mt-3">Line Spacing</label>
                  <input type="number" name="line_spacing" value="{{ $setting->line_spacing ?? '' }}" placeholder="Enter Line Spacing" class="form-control">
                  @error('line_spacing')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Font Weight</label>
                  <select name="font_weight"  class="form-control">
                    <option value="100" @php if($setting->font_weight ?? '' ==100){echo "selected";} @endphp >100</option>
                    <option value="200" @php if($setting->font_weight ?? '' ==200){echo "selected";} @endphp >200</option>
                    <option value="300" @php if($setting->font_weight ?? '' ==300){echo "selected";} @endphp >300</option>
                    <option value="400" @php if($setting->font_weight ?? '' ==400){echo "selected";} @endphp >400</option>
                    <option value="500" @php if($setting->font_weight ?? '' ==500){echo "selected";} @endphp >500</option>
                    <option value="600" @php if($setting->font_weight ?? '' ==600){echo "selected";} @endphp >600</option>
                    <option value="700" @php if($setting->font_weight ?? '' ==700){echo "selected";} @endphp >700</option>
                    <option value="800" @php if($setting->font_weight ?? '' ==800){echo "selected";} @endphp >800</option>
                    <option value="900" @php if($setting->font_weight ?? '' ==900){echo "selected";} @endphp >900</option>
                  </select>
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

</div>

@endsection
