import React, { useEffect, useState } from 'react'
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
  const [lessons, setLessons] = useState([]);
  const [setting, setSetting] = useState([]);
  const user_id=localStorage.getItem('user_id');
  const base_url =import.meta.env.VITE_SENTRY_DSN_PUBLIC;
  useEffect(() => {
    axios.get(`${base_url}/lessons${'?user_id='+user_id}`).then((response) => {
      setLessons(response.data.data);
    });
  }, []);
  useEffect(() => {
    axios.get(`${base_url}/setting`).then((response) => {
      setSetting(response.data);
    });
  }, []);

  let i = 1;

  const [level, setLevel] = useState( localStorage.lessonLevel? localStorage.lessonLevel: 'Beginner');
  
  return (
    <>
      <Header className="bordered">
        <Logo />
        <MobileMenu />
        <LessonProgress />
      </Header>
      <div className="container pt-5">
        <div className="container-fluid">
          <div className="row">
            <div className="col-lg-12 d-block d-md-none">
                <div className="input-group">
                  <select className="form-select d-block w-100 difficulty-level" style={{border: 0, fontSize: '28px', fontWeight: '700',}}>
                    <option value="">Beginner A1</option>
                    <option value="">Intermediate A2</option> 
                    <option value="">Advanced A3</option>
                  </select>
                </div>
            </div>
            
            <div className="col-lg-12 d-block d-md-none mt-3 mb-3 d-flex justify-content-center text-center">
              <div className='me-4'>
                <h5 className='mobile-count-lesson-h5' style={{ fontSize: '30px', }}>0 <span>z</span> {lessons.length}</h5>
                <span style={{ fontWeight: '500', }}>Ukończona lekcja</span>
              </div>
              <div>
                <h5 className='mobile-count-lesson-h5' style={{ fontSize: '30px', }}>0 % </h5>
                <span style={{ fontWeight: '500', }}>z tego poziomu</span>
              </div>
            </div>
            <Sidebar>
              <LessonMenu />
              <LevelSelect setLevel={setLevel} />
              <Menu />
            </Sidebar>
            <div className="col-lg-8">
              <div className="overflow-auto h-100">
                <ul className="list-group">
                  {
                    lessons.map((lesson)=>{
                      if (lesson.level !== level) return;

                   return <Link to={`lessonDetail/${lesson.id}`} key={lesson.id} className="lesson-heading">
                   <li  className="list-group-item course-listing">
                    <div className="row border-bottom">
                      <div className="col-11 course-list"> 
                        <div className="row">
                          <div className="col-4 col-md-2 col-lg-2">
                            
                            <img src={lesson.image} alt="" srcSet=""/>
                          </div>
                          <div className="col-6 col-md-9 col-lg-9 ms-4">
                            
                            <h2 className="lesson-heading" style={{';font_size':`${setting.color}`,';line_spacing':`${setting.color}`,';font_weight':`${setting.color}`}}>{i}.{lesson.title}</h2>
                            <span className="d-block text-muted">lesson time: 7 min</span><br/>
                          </div>
                        </div>
                        <p>{lesson.overview}</p>
                      </div>
                      <div className="col-1 d-block check-image">
                        <img src={lesson?.progress && lesson.progress.progress == 100 ? '../images/check_success.svg' : '../images/check.svg'} alt=""/>
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
