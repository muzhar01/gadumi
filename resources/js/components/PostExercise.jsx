import React from 'react'

const PostExercise=({exercises,loading}) => {
  if(loading){
    return <h2>Loading...</h2>;
  }
  return (<ul>
    {
      exercises.map(exercise=> (
      <div className='row' key={exercise.id}>
        <div className="col-lg-12">
          <p className='exercise-title'>{exercise.title}</p>
        </div>
        <div className="col-lg-12 mb-3">
          <img src={exercise.image} alt="" className='lesson-img d-block m-auto'/>
        </div>
        <div className="col-lg-8 m-auto">
          <p className='exercise-desc'>{exercise.description}</p>
        </div>
        <div className="col-lg-8 m-auto">
          <p>{exercise.content}</p>
        </div>
        
      </div>
    ))}
  </ul>
  );
};
export default PostExercise
