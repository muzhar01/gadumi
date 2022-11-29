import {React,useState,useEffect} from 'react'
import axios from "axios";
import HeaderLogoOnly from './HeaderLogoOnly'
import ListingSidebar from './ListingSidebar'
import {Link, useParams } from 'react-router-dom';
import PostExercise from './PostExercise';
import Pagination from './Pagination';
import ProgressBar from './ProgressBar';

export default function Exercise() {
  let param = useParams()
  const lesson = true;
  const exercise = true;
  const [exercises, setExercises] = useState([]);
  const [loading, setLoading] = useState(false);
  const [currentPage, setCurrentPage] = useState(1);
  const [exercisePerPage] = useState(1);
  useEffect(() => {
    const fatchExercises = async()=>{
      setLoading(true)
      const res= await axios.get("http://localhost:8000/api/exercise/"+param.id);
      setExercises(res.data.data);
      setLoading(false);
    };
    fatchExercises();
  }, []);
  const indexOfLastExercise=currentPage * exercisePerPage;
  const indexOfFirstExercise=indexOfLastExercise - exercisePerPage;
  const currentExercise=exercises.slice(indexOfFirstExercise,indexOfLastExercise)

  const paginate= pageNumber => setCurrentPage(pageNumber)
  let progress = (currentPage / exercises.length) * 100;
  useEffect(() => {
    progress = (currentPage / exercises.length) * 100;
  }, [currentPage])
  return (
    <>
    <HeaderLogoOnly lessonBar={exercise ? true : false} lessonClose={lesson ? true : false}/>
    <div className="container">
      <div className="container-fluid mt-3">
        <div className="row justify-content-center">
          <div className="col-lg-8">
            <ProgressBar progress={progress} />
            <PostExercise exercises={currentExercise} loading={loading}/>
            <Pagination exercisePerPage={exercisePerPage} totalExercise={exercises.length} paginate={paginate}/>
            
          </div>
        </div>
      </div>
    </div>
  </>
  )
}

