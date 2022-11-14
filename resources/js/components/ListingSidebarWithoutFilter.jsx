import React from 'react'
import { Link } from 'react-router-dom'

export default function ListingSidebarWithoutFilter() {
  let pathname = window.location.pathname;
  return (
    <>
      <div className="col-lg-4 mr-5 d-none d-md-block">
        <ul className="list-group desktop-sidebar">
          <li className="list-group-item">
            <img src="/images/lesson.svg" alt="" srcSet=""/>
            <Link to="/portal" className={'' + (pathname === '/portal'? 'active': '')}>Lekcje</Link>
          </li>
          <li className="list-group-item">
            <img src="/images/replay.svg" alt="" srcSet=""/>
            <Link to="/portal/replay" className={'' + (pathname === '/portal/replay'? 'active': '')}>Powtórki</Link>
          </li>
          <hr/>
          <li className="list-group-item">
            <img src="/images/settings.svg" alt="" srcSet=""/>
            <Link to="/portal/setting" className="settings">ustawienia</Link>
          </li>
          <li className="list-group-item">
            <img src="/images/prime_account.svg" alt="" srcSet=""/>
            <a href="#" className="prime_account">konto premium</a>
          </li>
          <li className="list-group-item">
            <img src="/images/contact_us.svg" alt="" srcSet=""/>
            <a href="#" className="contact_us">skontaktuj się z nami</a>
          </li>
          <li className="list-group-item">
            <img src="/images/logout.svg" alt="" srcSet=""/>
            <Link to="/logout" className="logout">wyloguj się</Link>
          </li>
        </ul>
      </div>
    </>
  )
}
