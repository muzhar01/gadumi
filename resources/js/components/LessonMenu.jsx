import { Link } from "react-router-dom";

function LessonMenu() {
    let pathname = window.location.pathname;
    
    return (
        <div className="lesson-menu">
            <ul>
                <li>
                    <Link to="/portal" className={'' + (pathname === '/portal'? 'active': '')}>
                        <img src="/images/lesson.svg" className="icon" style={{marginLeft: '-7px'}} width="35" height="60" alt=""/>
                        <img src="/images/lesson_active.svg" className="icon-active" style={{marginLeft: '-7px'}} width="35" height="60" alt=""/>
                        <span>lessons</span>
                    </Link>
                </li>
                <li>
                    <Link to="/portal/replay" className={'' + (pathname === '/portal/replay'? 'active': '')}>
                        <img src="/images/replay.svg" className="icon" width="25" height="50" alt=""/>
                        <img src="/images/replay_active.svg" className="icon-active" width="25" height="50" alt=""/>
                        <span>Replays</span>
                    </Link>
                </li>
            </ul>
        </div>
    )
}

export default LessonMenu;

/*<li className="list-group-item">
            <img src="/images/lesson.svg" alt="" srcSet=""/>
            <Link to="/portal" className={'' + (pathname === '/portal'? 'active': '')}>Lekcje</Link>
            </li>
            <li className="list-group-item">
            <img src="/images/replay.svg" alt="" srcSet=""/>
            <Link to="/portal/replay" className={'' + (pathname === '/portal/replay'? 'active': '')}>Powtórki</Link>
        </li> */