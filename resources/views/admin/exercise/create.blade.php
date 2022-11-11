@extends('admin.layout')
@section('container')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-10">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gadumi /</span> Exercise</h4>
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
          <h5 class="card-header">Add Exercise</h5>
          <div class="card-body">
            <form action="{{ route('submit-exercise') }}" method="post" enctype="multipart/form-data">
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
                  <label for="" class="mt-3">Lesson</label>
                  <select name="lesson_id"  class="form-control" required>
                    <option>Select Lesson</option>
                    @foreach ($lessons as $lesson)
                      <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                    @endforeach
                  </select>
                  @error('lesson_id')
                   <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Content</label>
                  <input type="text" name="content" class="form-control" placeholder="Enter Content">
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Description</label>
                  <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Image</label>
                    <br>
                    <img src="{{ asset('images/imageperview.png') }}" id="output" alt="" style="height: 100px" width="100px">
                    <input type="file" name="image" class="form-control" onchange="loadFile(event)">
                </div>
                <div class="col-lg-12 mt-4">
                  <div id="questionsContainer" class="mt-3 mb-4">
                    <h2>Questions</h2>
                    <div class="questions">
                      <p>No questions yet!</p>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" id="addQuestion">Add Question</button>
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

  var previewFile = function(event) {
    var output = event.target.parentNode.querySelector('.preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<script>
  const addQuestionBtn = document.querySelector('#addQuestion');
  const questionsContainer = document.querySelector('#questionsContainer .questions');
  let questionsCount = 0;
  let optionsCount = [];
  addQuestionBtn.addEventListener('click', event => addQuestion(event));
  function addQuestion(event) {
    ++questionsCount;
    let questionHTML = `
      <button type="button" class="deleteQuestion btn btn-danger btn-sm position-absolute" onclick="deleteQuestion(${questionsCount})" style="top:3px; right:3px; font-weight: 800;">X</button>
      <div class="row">
        <div class="col-md-6">
          <label>Question</label>
          <input type="text" name="questions[${questionsCount}][question]" class="form-control">
        </div>
        <div class="col-md-6">
          <label>Translation</label>
          <input type="text" name="questions[${questionsCount}][translation]" class="form-control">
        </div>
        <div class="col-lg-6">
          <label for="" class="mt-3">Image</label>
            <br>
            <img src="{{ asset('images/imageperview.png') }}" class="preview" alt="" style="height: 100px" width="100px">
            <input type="file" name="questions[${questionsCount}][image]" class="form-control" onchange="previewFile(event)">
        </div>
        <div class="options-container col-12 mt-4">
          <h4 class="mb-2">Options</h4>
          <div class="options">
            <p>Not options yet!</p>
          </div>
        </div>
        <div class="col-12 mt-3">
          <button type="button" class="btn btn-success btn-sm" onclick="addOption(${questionsCount})">Add Option</button>
        </div>
      </div>
    `;

    if (questionsCount === 1) {
      questionsContainer.innerHTML = '';
    }

    const questionEl = document.createElement('div');
    questionEl.id = 'q'+questionsCount;
    questionEl.setAttribute('class', 'question border p-4 position-relative mb-3 shadow-lg');
    questionEl.innerHTML = questionHTML;
    $(questionEl).hide();
    questionsContainer.append(questionEl);
    $(questionEl).show(500);

    optionsCount[questionsCount] = 0;
  }

  function deleteQuestion(id) {
    const questionEl = document.querySelector('#q'+id);
    $(questionEl).hide(500);
    setTimeout(() => {
      questionEl.remove();
    }, 500);
  }

  function addOption(questionId) {
    ++optionsCount[questionId];
    const optionsContainer = document.querySelector('#q'+questionId+' .options');
    let optionsHTML = `
    <button type="button" class="deleteQuestion btn btn-danger btn-sm position-absolute" onclick="deleteOption(\'${'q'+questionId+'o'+optionsCount[questionId]}\')" style="top:3px; right:3px; font-weight: 800;">X</button>
    <div class="row">
        <div class="col-md-6">
          <label>Option</label>
          <input type="text" name="questions[${questionId}][options][${optionsCount[questionId]}][option]" class="form-control">
        </div>
        <div class="col-md-6">
          <label>Translation</label>
          <input type="text" name="questions[${questionId}][options][${optionsCount[questionId]}][translation]" class="form-control">
        </div>
        <div class="col-lg-6">
          <label for="" class="mt-3">Image</label>
            <br>
            <img src="{{ asset('images/imageperview.png') }}" class="preview" alt="" style="height: 100px" width="100px">
            <input type="file" name="questions[${questionId}][options][${optionsCount[questionId]}][image]" class="form-control" onchange="previewFile(event)">
        </div>
        <div class="col-lg-6 d-flex align-items-end justify-content-center">
          <div class="form-check">
            <input type="checkbox" name="questions[${questionId}][options][${optionsCount[questionId]}][correct]" class="form-check-input" id="${'q'+questionId+'o'+optionsCount[questionId]+'c'}"> <label for="${'q'+questionId+'o'+optionsCount[questionId]+'c'}">Correct</label>
          </div>
        </div>
    </div>
    `;

    if (optionsCount[questionId] === 1) {
      optionsContainer.innerHTML = '';
    }

    const optionEl = document.createElement('div');
    optionEl.id = 'q'+questionId+'o'+optionsCount[questionId];
    optionEl.setAttribute('class', 'option border p-4 position-relative mb-3');
    optionEl.innerHTML = optionsHTML;
    $(optionEl).hide();
    optionsContainer.append(optionEl);
    $(optionEl).show(500);
  }

  function deleteOption(id) {
    const optionEl = document.querySelector('#'+id);
    $(optionEl).hide(500);
    setTimeout(() => {
      optionEl.remove();
    }, 500);
  }
</script>
@endsection
