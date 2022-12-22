import React, { useEffect, useState } from 'react'
import axios from "axios";
import MobileBottomSidebar from './MobileBottomSidebar';
import Header from './Header';
import Logo from './Logo';
import MobileMenu from './MobileMenu';
import LessonProgress from './LessonProgress';
import Sidebar from './Sidebar';
import LessonMenu from './LessonMenu';
import LevelSelect from './LevelSelect';
import Menu from './Menu';
import Content from './Content';
import Divider from './Divider';
import LessonPreview from './LessonPreview';

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
      <div className="container">
        <div className="row">
          <div className="col-4 d-none d-lg-block">
            <Sidebar>
              <LessonMenu />
              <Divider />
              <LevelSelect setLevel={setLevel} />
              <Divider />
              <Menu />
            </Sidebar>
          </div>
          <div className="col-12 col-lg-8">
            <Content>
              <ul className="list-group">
                {
                    lessons.map(lesson => <LessonPreview lesson={lesson} key={lesson.id} level={level} setting={setting} i={i} />)
                }
              </ul>
            </Content>
          </div>
        </div>
      </div>
      <MobileBottomSidebar/>
    </>
  )
}