import React from 'react'
import axios from "axios";
import HeaderListing from './HeaderListing'
import ListingSidebar from './ListingSidebar'
import style from './../../css/listing/custom.css';
import { Link } from 'react-router-dom';

export default function Listing() {
  const [lessons, setPost] = React.useState([]);

  React.useEffect(() => {
    axios.get('http://localhost:8000/api/lessons').then((response) => {
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
              <div className="overflow-auto h-75">
                <ul className="list-group">
                  {
                    lessons.map((lesson)=>{
                   return <li key={lesson.id} className="list-group-item course-listing">
                    <div className="row border-bottom">
                      <div className="col-9 course-list"> 
                        <div className="row">
                          <div className="col-4 col-md-2 col-lg-2">
                            
                            <img src={lesson.image} alt="" srcSet=""/>
                          </div>
                          <div className="col-6 col-md-9 col-lg-9 ms-4">
                            
                            <Link to={`lessonDetail/${lesson.id}`} className="lesson-heading">{lesson.title}</Link>
                            <span className="d-block text-muted">lesson time: 7 min</span><br/>
                          </div>
                        </div>
                        <p>{lesson.overview}</p>
                      </div>
                      <div className="col-3 d-block check-image">
                        <img src="../images/check.svg" alt=""/>
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
