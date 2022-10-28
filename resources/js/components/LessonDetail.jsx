import React from 'react'
import axios from "axios";
import HeaderListing from './HeaderListing'
import ListingSidebar from './ListingSidebar'
import {Link, useParams } from 'react-router-dom';
export default function LessonDetail() {
  let param = useParams()
  const [lesson, setPost] = React.useState([]);
  React.useEffect(() => {
    axios.get("http://localhost:8000/api/lesson/"+param.id).then((response) => {
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
            <div className="alert alert-dismissible fade show text-center" role="alert">
              { lesson.title }
              <Link to='/portal' className="btn-close"></Link>
              <p className="text-left">
              { lesson.overview }
              </p>
                {!lesson.image?
                  <>
                  </>
                  :
                  <>
                    <img src={lesson.image} class="rounded mx-auto d-block mb-2" />
                  </>
                }
                <div className="text-justify mb-5">
                  {lesson.description}
                </div>
                <Link className="btn btn-outline-primary" to={`/portal/exercise/${lesson.id}`}>Continue</Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </>
  )
}
