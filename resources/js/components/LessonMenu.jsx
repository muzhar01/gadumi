import { Link } from "react-router-dom";

function LessonMenu() {
    let pathname = window.location.pathname;
    
    return (
        <>
        <li className="list-group-item">
            <img src="/images/lesson.svg" alt="" srcSet=""/>
            <Link to="/portal" className={'' + (pathname === '/portal'? 'active': '')}>Lekcje</Link>
            </li>
            <li className="list-group-item">
            <img src="/images/replay.svg" alt="" srcSet=""/>
            <Link to="/portal/replay" className={'' + (pathname === '/portal/replay'? 'active': '')}>Powtórki</Link>
        </li>
        </>
    )
}

export default LessonMenu;