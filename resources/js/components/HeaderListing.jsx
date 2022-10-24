import React from 'react'

export default function HeaderListing() {
  return (
    <>
    <div className="container">
      <nav className="navbar navbar-expand-lg">
        <div className="container-fluid">
          <a className="navbar-brand" href="/">
            <img src="../images/logo.svg" className="logo" alt=""/>
            Gadumi
            <span className="d-block text-muted">Your English language course</span>
          </a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarText">
            <div className="navbar-text me-auto">
              
            </div>
            <div className="lesson-complete me-4">
              <span className="complete-lesson">completed lessons</span>
              <span className="lesson-count">0 of 70</span>
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
