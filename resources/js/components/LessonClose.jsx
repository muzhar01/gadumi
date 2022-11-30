import { Link } from "react-router-dom";

function LessonClose({to}) {
    if (to === undefined)
        to = '/portal';
    return (
        <Link to={to}>
            <img src="/images/cross.svg" alt="" className='cross-btn' />
        </Link>
    )
}

export default LessonClose;