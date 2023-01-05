import React, { useState } from 'react'
import { Link } from 'react-router-dom';
const PostExercise=({exercise}) => {
  const [isCorrect, setIsCorrect] = useState(0);
  const [isCheck, setIsCheck] = useState(false);
  if (exercise === null) {
    return <></>
  }
  const handleClick = (event, param) => {
    let check = event.currentTarget.dataset.value;
    if(param==1){
      event.target.classList.add('correct-option');
    }else{
      document.querySelector('.coption').classList.add('correct-option');
      event.target.classList.add('exercsie-wrong-option');
    }
  };

  return (
      <div className="container-fluid" style={{ minHeight:"63vh", display:"flex", flexDirection:"column", justifyContent:"center" }}>
          <h4 className="text-center post-exercise-h4" style={{ fontSize:"20px", fontWeight:500, marginTop:"68px" }}>{exercise.title}</h4>
          {exercise.image?
            <div style={{width: '366px', height: '221px', borderRadius: '15px', maxWidth: '100%'}} className="mb-3 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
            <img style={{minWidth: '100%', minHeight: '100%', borderRadius: '15px'}} src={exercise.image} />
            </div> : ''
          }
          <div style={{width: '366px', maxWidth: '100%'}} className="mx-auto">
              <p className="text-center mb-1" style={{ fontSize:"20px", fontWeight:"bold" }}>{exercise.content}</p>
              <p className="text-center" style={{ fontWeight:500, fontSize:"18px", color:"#7a7777" }}>cześć</p>
              <div className="mb-4">
                <img style={{width: '100%', height:"4.7vh"}} src="https://gadumi.pl/lib/glcqhy/glosniczek-maly-powtorki-l9zfjbve.svg" />
              </div>
              <p className='post-exercise-p'>{exercise.description}</p>
              {(exercise.questions?
                exercise.questions.map(question=>(
                  <>
                    <div key={question.id + 'q'}>
                      <h1 className='exercise-question text-center'>{question.content}</h1>
                      {question.image?
                        <img src={question.image} alt="" className='lesson-img d-block m-auto'/> : ''
                      }
                      <div className='container'>
                      {question.options?
                      
                        question.options.map(option=>(
                          <div key={option.id + 'o' + isCorrect} className='row'>
                            <div className='col-lg-8 m-auto '>
                              <button id={option.id} className={(isCheck ? 'btn exercsie-wrong-option w-100 m-2' : 'btn exercsie-option w-100 m-2').concat(option.correct ? ' coption':'')} onClick={event => handleClick(event, option.correct)} data-value={option.id}>{option.content}</button>
                            </div>
                          </div>
                        ))
                        : ''
                      }
                      </div>
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
