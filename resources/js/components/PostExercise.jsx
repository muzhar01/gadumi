import React from 'react'
const PostExercise=({exercise}) => {
  // let i=eid;
  // let exercise=exercises[i]
  // function increment(){
  //   console.log(i);
  //   i=i+1
  //   exercise=exercises[i]
  // }
  return (<>
    {
      <div className='row'>
        <div className="col-lg-12">
          <p className='exercise-title'>{exercise.title}</p>
        </div>
        <div className="col-lg-12 mb-3">
        {exercise.image?
          <img src={exercise.image} alt="" className='lesson-img d-block m-auto'/> : ''
        }
        </div>
        <div className="col-lg-12 m-auto">
          <p className='exercise-desc'>{exercise.description}</p>
        </div>
        <div className="col-lg-12 m-auto">
          <p>{exercise.content}</p>
        </div>
        <div className="col-lg-8 m-auto">
          {(exercise.questions?
            exercise.questions.map(question=>(
              <>
                <div key={question.id}>
                  <h1 className='exercise-question'>{question.content}</h1>
                  {question.image?
                    <img src={question.image} alt="" className='lesson-img d-block m-auto'/> : ''
                  }
                  {question.options?
                    question.options.map(option=>(
                      <div key={option.id} className='row'>
                        <div className='col-lg-8 m-auto '>
                          <button className=' btn exercsie-option w-100 m-2'>{option.content}</button>
                        </div>
                      </div>
                    ))
                    : ''
                  }
                </div>
              </>
            ))
          :''
      )}
        </div>
        {/* <button  onClick={increment} type="button"  className='btn btn-primary form-control'>Next</button> */}
      </div>
    }
    </>
    );
};
export default PostExercise
