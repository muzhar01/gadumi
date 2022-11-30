import {React,useState,useEffect} from 'react'
import axios from "axios";
import HeaderLogoOnly from './HeaderLogoOnly'
import {useParams } from 'react-router-dom';
import PostExercise from './PostExercise';

import Pagination from './Pagination';
import ProgressBar from './ProgressBar';


export default function Exercise() {
  let param = useParams()
  const lesson = true;
  const isExercise = true;
  const [exercises, setExercises] = useState([]);
  const [exercise, setExercise] = useState('');
  const [ex, setEx] = useState(0);

  const loadExercise = (i)=>{
    setExercise(exercises[i]);
    setEx(i+1);
  }

  useEffect(() => {
    const fatchExercises = async()=>{
      const res= await axios.get("http://localhost:8000/api/exercise/"+param.id);
      setExercises(res.data.data);
      loadExercise(ex ? ex:0);
      console.log(exercise);
    };
    fatchExercises()
  }, []);

  return (
    <>
    <HeaderLogoOnly lessonBar={isExercise ? true : false} lessonClose={lesson ? true : false}/>
    <div className="container">
      <div className="container-fluid mt-3">
        <div className="row justify-content-center">
          <div className="col-lg-8">
          {exercise?
          <>
            <PostExercise exercise={exercise} />
            <button type="button"  className='btn btn-primary form-control'>Next</button>
          </>
            :
            <h3>No Exersise</h3>}

          </div>
        </div>
      </div>
    </div>
  </>
  )
}

