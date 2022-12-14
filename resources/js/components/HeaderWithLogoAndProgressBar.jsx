import React from 'react'
import { Link } from 'react-router-dom'

export default function HeaderWithLogoAndProgressBar() {
  const [lesson, setPost] = React.useState([]);
  const base_url =import.meta.env.VITE_SENTRY_DSN_PUBLIC;
  React.useEffect(() => {
    axios.get(`${base_url}/lessons/`).then((response) => {
      setPost(response.data.data);
    });
  }, []);
  return (
    <>
    <div className="container">
      <nav className="navbar navbar-expand-lg">
        <div className="container-fluid">
          <a className="navbar-brand" href="/">
            <img src="/images/gadumi-logo-new.svg" className="logo" alt=""/>
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
            <div className="lesson-complete me-4 hide-mobile">
              <span className="complete-lesson">completed lessons</span>
              <span className="lesson-count">0 of {lesson.length}</span>
            </div>
            <span className="navbar-text hide-mobile">
              Your knowledge of this level
            </span>
            
            <div className="nav-item level hide-mobile">
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
