import { Link } from "react-router-dom";

function Menu() {
    return (
        <>
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
        </>
    )
}

export default Menu;