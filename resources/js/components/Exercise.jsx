import {React,useState,useEffect} from 'react'
import axios from "axios";
import {useParams } from 'react-router-dom';
import PostExercise from './PostExercise';
import BottomBar from './BottomBar';
import Header from './Header';
import Logo from './Logo';
import LessonClose from './LessonClose';
import ExerciseProgressBar from './ProgressBar';


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
    if(currentExercise+1 == exercises.length){
      console.log('congrats')
    }
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
    <Header>
      <Logo />
      <ExerciseProgressBar progress="50" />
      <LessonClose />
    </Header>
    
    <div className="container">
    <PostExercise key={currentExercise + 'e'} exercise={exercises.length > 0? exercises[currentExercise]: null}/>
        
    </div>
    <BottomBar>
        <div className="text-center p-4">
            <button className="btn btn-primary" onClick={(event) => loadNextExercise(event)}>Next</button>
        </div>
    </BottomBar>
  </>
  )
}

