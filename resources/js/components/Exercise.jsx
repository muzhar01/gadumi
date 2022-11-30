import {React,useState,useEffect} from 'react'
import axios from "axios";
import HeaderLogoOnly from './HeaderLogoOnly'
import {useParams } from 'react-router-dom';
import PostExercise from './PostExercise';
import BottomBar from './BottomBar';


export default function Exercise() {
  let param = useParams()
  const lesson = true;
  const exercise = true;
  const [exercises, setExercises] = useState([]);
  useEffect(() => {
    const fatchExercises = async()=>{
      const res= await axios.get("http://localhost:8000/api/exercise/"+param.id);
      setExercises(res.data.data);
    };
    fatchExercises();
  }, []);

  const [currentExercise, setCurrentExercise] = useState(0);

  const loadNextExercise = (event) => {
    if (currentExercise + 1 < exercises.length) {
      setCurrentExercise(state => state + 1);
    }
  }

  const loadPrevExercise = (event) => {
    if (currentExercise - 1 > -1) {
      setCurrentExercise(state => state - 1);
    }
  }
  
  return (
    <>
    <HeaderLogoOnly lessonBar={exercise ? true : false} lessonClose={lesson ? true : false}/>
    <div className="container">
      <div className="container-fluid mt-3">
        <div className="row justify-content-center">
          <div className="col-lg-8">
            <PostExercise key={currentExercise + 'e'} exercise={exercises.length > 0? exercises[currentExercise]: null}/>
          </div>
        </div>
      </div>
    </div>

    <BottomBar>
        <div className="text-center p-4">
          <button className="btn btn-primary" onClick={(event) => loadPrevExercise(event)}>Prev</button>
          <button className="btn btn-primary" onClick={(event) => loadNextExercise(event)}>Next</button>
        </div>
    </BottomBar>
  </>
  )
}

