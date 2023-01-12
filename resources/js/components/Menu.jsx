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
              <Link to="price" className="prime_account">
                <img src="/images/prime_account.svg" width="40" height="40" alt=""/>
                <span>Premium account</span>
              </Link>
            </li>
            <li>
              <Link to="contact" className="contact_us">
                <img src="/images/contact_us.svg" width="40" height="40" alt=""/>
                <span>contact us</span>
              </Link>
            </li>
            <li>
              <Link to="/logout" className="logout">
                <img src="/images/logout.svg" width="40" height="40" alt=""/>
                <span>log out</span>
              </Link>
            </li>
          </ul>
        </div>
    )
}

export default Menu;