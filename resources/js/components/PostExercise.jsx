import React from 'react'
import { Link } from 'react-router-dom';
const PostExercise=({exercise}) => {
  if (exercise === null) {
    return <></>
  }

  return (
      <div className="container-fluid mt-5">
          <h4 className="text-center" style={{color: '#0b7cfe'}}>{exercise.title}</h4>
          
          {exercise.image?
            <div style={{width: '366px', height: '221px', borderRadius: '15px'}} className="mb-3 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
            <img style={{minWidth: '100%', minHeight: '100%', borderRadius: '15px'}} src={exercise.image} />
            </div> : ''
          }
          <div style={{width: '366px'}} className="mx-auto">
              <h2 className="text-center mb-1">{exercise.content}</h2>
              <p className="text-center">cześć</p>
              <div className="mb-4">
                  <span style={{width: '50px', height: '50px'}} className="d-block mx-auto">
                      <img style={{width: '100%'}} src="https://gadumi.pl/lib/glcqhy/glosniczek-maly-powtorki-l9zfjbve.svg" />
                  </span>
              </div>
              <p>{exercise.description} 🤝</p>
              {(exercise.questions?
            exercise.questions.map(question=>(
              <>
                <div key={question.id + 'q'}>
                  <h1 className='exercise-question'>{question.content}</h1>
                  {question.image?
                    <img src={question.image} alt="" className='lesson-img d-block m-auto'/> : ''
                  }
                  {question.options?
                    question.options.map(option=>(
                      <div key={option.id + 'o'} className='row'>
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
      </div>
  );
};
export default PostExercise
