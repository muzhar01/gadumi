import React from 'react'
import axios from "axios";
import HeaderListing from './HeaderListing'
import ListingSidebar from './ListingSidebar'
import {Link, useParams } from 'react-router-dom';

export default function Exercise() {
  let param = useParams()
  const [exercises, setPost] = React.useState([]);
  React.useEffect(() => {
    axios.get("http://localhost:8000/api/exercise/"+param.id).then((response) => {
      setPost(response.data.data);
    });
  }, []);
  return (
    <>
    <HeaderListing/>
    <div className="container">
      <div className="container-fluid mt-5">
        <div className="row">
          <ListingSidebar/>
          <div className="col-lg-8">
          <div className="overflow-auto h-100">
                <ul className="list-group">
                  {
                    exercises.map((exercise)=>{
                   return <li key={exercise.id} className="list-group-item course-listing">
                    <div className="row border-bottom">
                      <div className="col-12 course-list"> 
                        <div className="row">
                          <div className="col-12 col-md-12 col-lg-12">
                            <img src={exercise.image} alt="" srcSet=""/>
                          </div>
                          <div className="col-12 col-md-12 col-lg-12 ms-4">
                            
                            <p className="lesson-heading">{exercise.title}</p>
                            <p className="text-left">{exercise.description}</p>
                          </div>
                        </div>
                        <p>{exercise.content}</p>
                        <button className="btn btn-outline-primary mb-3" to="">Next</button>
                      </div>
                    </div>
                  </li>
                })
                }
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </>
  )
}

