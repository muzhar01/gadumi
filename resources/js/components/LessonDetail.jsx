import {React,useState,useEffect} from 'react'
import axios from "axios";
import ListingSidebar from './ListingSidebar'
import {Link, useParams } from 'react-router-dom';
import ReactHtmlParser from 'react-html-parser';
import BottomBar from './BottomBar';
import Header from './Header';
import Logo from './Logo';
import LessonClose from './LessonClose';
import MobileMenu from './MobileMenu';
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
      <Header>
        <Logo />
        <MobileMenu />
        <LessonClose />
      </Header>
      <div className="container">
          <div className="container-fluid mt-5">
              <h4 className="text-center" style={{color: '#0b7cfe'}}>{ lesson.title }</h4>
              <div style={{width: '366px', height: '221px', borderRadius: '15px'}} className="mb-3 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
                  <img style={{minWidth: '100%', minHeight: '100%', borderRadius: '15px'}} src={lesson.image} />
              </div>
              <div style={{width: '366px'}} className="mx-auto">
                  <h2 className="text-center mb-1">{ lesson.overview }</h2>
                  <p className="text-center">cześć</p>
                  <div className="mb-4">
                      <span style={{width: '50px', height: '50px'}} className="d-block mx-auto">
                          <img style={{width: '100%'}} src="https://gadumi.pl/lib/glcqhy/glosniczek-maly-powtorki-l9zfjbve.svg" />
                      </span>
                  </div>
                  <p className='text-center'>{ lesson.description }🤝</p>
              </div>
          </div>
      </div>
      <BottomBar>
          <div className="text-center p-4">
            <Link className="btn btn-outline-primary" to={`/portal/exercise/${lesson.id}`}>Continue</Link>
          </div>
      </BottomBar>
    </>
  )
}
