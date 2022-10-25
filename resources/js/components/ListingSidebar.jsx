import React from 'react'
import { Link } from 'react-router-dom'

export default function ListingSidebar() {
  return (
    <>
      <div className="col-lg-12 d-block d-md-none">
          <div className="input-group">
            <select className="form-select d-block w-100">
              <option value="">Beginner A1</option>
              <option value="">Intermediate A2</option> 
              <option value="">Advanced A3</option>
            </select>
          </div>
      </div>
      <div className="col-lg-4 mr-5 d-none d-md-block">
        <ul className="list-group">
          <li className="list-group-item">
            <img src="/images/lesson.svg" alt="" srcSet=""/>
            <Link to="/portal" className="active">Lesson</Link>
          </li>
          <li className="list-group-item">
            <img src="/images/replay.svg" alt="" srcSet=""/>
            <a href="#">Replays</a>
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
            <a href="#" className="settings">Settings</a>
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
            <a href="#" className="logout">Logout</a>
          </li>
        </ul>
      </div>
    </>
  )
}
