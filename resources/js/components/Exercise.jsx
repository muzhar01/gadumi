import {React,useState,useEffect} from 'react'
import axios from "axios";
import HeaderLogoOnly from './HeaderLogoOnly'
import {useParams } from 'react-router-dom';
import PostExercise from './PostExercise';

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
  return (
    <>
    <HeaderLogoOnly lessonBar={exercise ? true : false} lessonClose={lesson ? true : false}/>
    <div className="container">
      <div className="container-fluid mt-3">
        <div className="row justify-content-center">
          <div className="col-lg-8">
            <PostExercise exercises={exercises}/>
            
          </div>
        </div>
      </div>
    </div>
  </>
  )
}

