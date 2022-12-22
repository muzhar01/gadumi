import { Link } from "react-router-dom";

function Menu() {
    return (
        <div className="menu">
          <ul>
            <li>
              <Link to="/portal/setting" className="settings">
                <img src="/images/settings.svg" width="40" height="40" alt=""/>
                <span>settings</span>
              </Link>
            </li>
            <li>
              <Link to="/portal/setting" className="settings">
                <img src="/images/prime_account.svg" width="40" height="40" alt=""/>
                <span>Premium account</span>
              </Link>
            </li>
            <li>
              <Link to="/portal/setting" className="settings">
                <img src="/images/contact_us.svg" width="40" height="40" alt=""/>
                <span>contact us</span>
              </Link>
            </li>
            <li>
              <Link to="/logout" className="settings">
                <img src="/images/logout.svg" width="40" height="40" alt=""/>
                <span>log out</span>
              </Link>
            </li>
          </ul>
        </div>
    )
}

export default Menu;

/*<li className="list-group-item">
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
          </li>*/