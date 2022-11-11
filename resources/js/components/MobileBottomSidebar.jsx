import React from 'react'
import { Link } from 'react-router-dom'

export default function MobileBottomSidebar() {
  return (
    <>
      <div className="col-lg-4 mr-5 d-block d-md-none position-sticky bottom-0 bg-white">
        <ul className="d-flex hidden_sidebar justify-content-center align-items-center">
        <li className="list-group-item ms-5 me-5">
            <img src="/images/lesson.svg" alt="" srcSet=""/>
            <Link to="/portal" className="active">Lekcja</Link>
          </li>
          <li className="list-group-item ms-5 me-5">
            <img src="/images/replay.svg" alt="" srcSet=""/>
            <a href="#">Powtórki</a>
          </li>
        </ul>
      </div>
    </>
  )
}
