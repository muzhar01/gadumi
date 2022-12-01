import React from 'react'
import axios from "axios";
import { Link } from 'react-router-dom';
import MobileBottomSidebar from './MobileBottomSidebar';
import Header from './Header';
import Logo from './Logo';
import MobileMenu from './MobileMenu';
import LessonProgress from './LessonProgress';
import Sidebar from './Sidebar';
import LessonMenu from './LessonMenu';
import LevelSelect from './LevelSelect';
import Menu from './Menu';

export default function Listing() {
  const [lessons, setPost] = React.useState([]);
  const [setting, setSetting] = React.useState([]);

  React.useEffect(() => {
    axios.get('http://localhost:8000/api/lessons').then((response) => {
      setPost(response.data.data);
    });
  }, []);
  React.useEffect(() => {
    axios.get('http://localhost:8000/api/setting').then((response) => {
      setSetting(response.data);
    });
  }, []);
  const [lesson, setLesson] = React.useState([]);
  React.useEffect(() => {
    axios.get("http://localhost:8000/api/lessons/").then((response) => {
      setLesson(response.data.data);
    });
  }, []);
  return (
    <>
      <Header>
        <Logo />
        <MobileMenu />
        <LessonProgress />
      </Header>
      <div className="container pt-5">
        <div className="container-fluid">
          <div className="row">
            <div className="col-lg-12 d-block d-md-none">
                <div className="input-group">
                  <select className="form-select d-block w-100">
                    <option value="">Beginner A1</option>
                    <option value="">Intermediate A2</option> 
                    <option value="">Advanced A3</option>
                  </select>
                </div>
            </div>
            
            <div className="col-lg-12 d-block d-md-none mt-3 mb-3 d-flex">
              <div className='me-4'>
                <h5 className='mobile-count-lesson-h5'>0 <span>z</span> {lesson.length}</h5>
                <span>Ukończona lekcja</span>
              </div>
              <div>
                <h5 className='mobile-count-lesson-h5'>0 % </h5>
                <span>z tego poziomu</span>
              </div>
            </div>
            <Sidebar>
              <LessonMenu />
              <LevelSelect />
              <Menu />
            </Sidebar>
            <div className="col-lg-8">
              <div className="overflow-auto h-100">
                <ul className="list-group">
                  {
                    lessons.map((lesson)=>{
                   return <Link to={`lessonDetail/${lesson.id}`} key={lesson.id} className="lesson-heading">
                   <li  className="list-group-item course-listing">
                    <div className="row border-bottom">
                      <div className="col-9 course-list"> 
                        <div className="row">
                          <div className="col-4 col-md-2 col-lg-2">
                            
                            <img src={lesson.image} alt="" srcSet=""/>
                          </div>
                          <div className="col-6 col-md-9 col-lg-9 ms-4">
                            
                            <h2 className="lesson-heading" style={{';font_size':`${setting.color}`,';line_spacing':`${setting.color}`,';font_weight':`${setting.color}`}}>{lesson.title}</h2>
                            <span className="d-block text-muted">lesson time: 7 min</span><br/>
                          </div>
                        </div>
                        <p>{lesson.overview}</p>
                      </div>
                      <div className="col-3 d-block check-image">
                        <img src="../images/check.svg" alt=""/>
                      </div>
                    </div>
                  </li></Link>
                })
                }
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <MobileBottomSidebar/>
    </>
  )
}
