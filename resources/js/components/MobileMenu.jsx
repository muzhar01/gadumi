import { Link } from "react-router-dom";

function MobileMenu() {
    return (
        <>
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
            </div>
        </>
    )
}

export default MobileMenu;