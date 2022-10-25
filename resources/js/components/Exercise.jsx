import {React,useState,useEffect} from 'react'
import axios from "axios";
import HeaderListing from './HeaderListing'
import ListingSidebar from './ListingSidebar'
import {Link, useParams } from 'react-router-dom';
import PostExercise from './PostExercise';
import Pagination from './Pagination';

export default function Exercise() {
  let param = useParams()
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
  return (
    <>
    <HeaderListing/>
    <div className="container">
      <div className="container-fluid mt-5">
        <div className="row">
          <ListingSidebar/>
          <div className="col-lg-8">
            <PostExercise exercises={currentExercise} loading={loading}/>
            <Pagination exercisePerPage={exercisePerPage} totalExercise={exercises.length} paginate={paginate}/>
          </div>
        </div>
      </div>
    </div>
  </>
  )
}

