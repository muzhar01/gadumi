import React from 'react'
import { Link } from 'react-router-dom'

export default function HeaderWithLogoAndProgressBar() {
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
          </div>
        </div>
      </nav>
    </div>
    </>
  )
}
