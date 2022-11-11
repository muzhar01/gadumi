import React from 'react'
import { Link } from 'react-router-dom'

export default function ListingSidebar() {
  let pathname = window.location.pathname;

  return (
    <>
      <div className="col-lg-4 mr-5 d-none d-md-block">
        <ul className="list-group desktop-sidebar">
          <li className="list-group-item">
            <img src="/images/lesson.svg" alt="" srcSet=""/>
            <Link to="/portal" className={'' + (pathname === '/portal'? 'active': '')}>Lesson</Link>
          </li>
          <li className="list-group-item">
            <img src="/images/replay.svg" alt="" srcSet=""/>
            <Link to="/portal/replay" className={'' + (pathname === '/portal/replay'? 'active': '')}>Replays</Link>
          </li>
          <hr/>
          <li className="list-group-item d-none d-md-block">
            <p className="level-text">Choose the level you want to learn at</p>
            <select className="btn btn-outline-primary d-block w-100 select-level">
              <option value="">Beginner A1</option>
              <option value="">Intermediate A2</option>
              <option value="">Advanced A3</option>
            </select>
          </li>
          <hr/>
          <li className="list-group-item">
            <img src="/images/settings.svg" alt="" srcSet=""/>
            <Link to="/portal/setting" className="settings">Settings</Link>
          </li>
          <li className="list-group-item">
            <img src="/images/prime_account.svg" alt="" srcSet=""/>
            <a href="#" className="prime_account">Premium Account</a>
          </li>
          <li className="list-group-item">
            <img src="/images/contact_us.svg" alt="" srcSet=""/>
            <a href="#" className="contact_us">Contact Us</a>
          </li>
          <li className="list-group-item">
            <img src="/images/logout.svg" alt="" srcSet=""/>
            <Link to="/logout" className="logout">Logout</Link>
          </li>
        </ul>
      </div>
    </>
  )
}
