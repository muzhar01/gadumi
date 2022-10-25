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
          <p>{exercise.title}</p>
        </div>
        <div className="col-lg-12">
          <img src={exercise.image} alt="" className='mb-2'/>
        </div>
        <div className="col-lg-12">
          <p>{exercise.description}</p>
        </div>
        <div className="col-lg-12">
          <p>{exercise.content}</p>
        </div>
        
      </div>
    ))}
  </ul>
  );
};
export default PostExercise
