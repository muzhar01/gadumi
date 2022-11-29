import {React,useState,useEffect} from 'react'
import axios from "axios";
import HeaderLogoOnly from './HeaderLogoOnly'
import ListingSidebar from './ListingSidebar'
import {Link, useParams } from 'react-router-dom';
import ReactHtmlParser from 'react-html-parser';
export default function LessonDetail() {
  let param = useParams()
  const [lesson, setPost] = useState([]);
  
  useEffect(() => {
    axios.get("http://localhost:8000/api/lesson/"+param.id).then((response) => {
      setPost(response.data.data);
    });
  }, []);
  return (
    <>
    <HeaderLogoOnly lessonClose={lesson.id ? true : false}/>
    <div className="container">
      <div className="container-fluid mt-5">
        <div className="row justify-content-center">
          <div className="col-lg-8">
            <div className="alert alert-dismissible fade show text-center" role="alert">
              
              <p className="text-left view-pic-text">
              { lesson.overview }
              </p>
                {!lesson.image?
                  <>
                  </>
                  :
                  <>
                    <img src={lesson.image} className="rounded mx-auto d-block mb-2 lesson-img" />
                  </>
                }
                <div className="text-justify mb-5 justify-content-center">
                  <div>{ReactHtmlParser(lesson.description)}</div>
                  <img src="/images/speeker.svg" alt="" className='d-block speeker-img m-auto' />
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
