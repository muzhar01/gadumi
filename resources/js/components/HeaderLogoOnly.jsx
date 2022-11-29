import React from 'react'
import { Link } from 'react-router-dom'

export default function HeaderLogoOnly(props) {
  
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
            {props.lessonBar==true ?
              <div className="progress w-50" style={{ height: '3px' }}>
                <div className="progress-bar" role="progressbar" style={{width: '50%'}} aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              :
              ''
            }
            <div className={props.lessonBar==true ? 'ms-2 navbar-text p-0':'navbar-text p-0 m-auto'}>
              
              {props.lessonClose==true ?
                  <Link to='/portal' >
                    <img src="/images/cross.svg" alt="" className='cross-btn' />
                  </Link>
                  :
                  ''
              }
            </div>
          </div>
        </div>
      </nav>
    </div>
    </>
  )
}
