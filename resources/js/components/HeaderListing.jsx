import React from 'react'
import { Link } from 'react-router-dom'

export default function HeaderListing() {
  const [lesson, setPost] = React.useState([]);
  React.useEffect(() => {
    axios.get("http://localhost:8000/api/lessons/").then((response) => {
      setPost(response.data.data);
    });
  }, []);
  return (
    <>
    <div className="container">
      <nav className="navbar navbar-expand-lg">
        <div className="container-fluid">
          <a className="navbar-brand" href="/">
            <img src="/images/logo.svg" className="logo" alt=""/>
            Gadumi
            <span className="d-block text-muted">Your English language course</span>
          </a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <iconify-icon icon="bx:dots-vertical-rounded"></iconify-icon>
          </button>
          <div className="collapse navbar-collapse" id="navbarText">
            <ul className="navbar-nav d-block d-md-none">
              <li className="nav-item">
                <Link to="/setting" className="nav-link settings">Settings</Link>  
              </li>
              <li className="nav-item">
                <a className="nav-link" href="#">Price</a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="#">Contact</a>
              </li>
              <li className="nav-item">
                <Link to="/logout" className="nav-link logout">Logout</Link>
              </li>
            </ul>
            <div className="navbar-text me-auto">
              
            </div>
            <div className="lesson-complete me-4">
              <span className="complete-lesson">completed lessons</span>
              <span className="lesson-count">0 of {lesson.length}</span>
            </div>
            <span className="navbar-text">
              Your knowledge of this level
            </span>
            
            <div className="nav-item level">
              <span>0%</span>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div className="border-bottom mt-2"></div>
    </>
  )
}
