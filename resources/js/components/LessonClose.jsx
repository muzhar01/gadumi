import { Link } from "react-router-dom";

function LessonClose({to}) {
    let is_mbl = false;
    if(window.matchMedia("(max-width: 767px)").matches){
        is_mbl = true;
    }
    if (to === undefined)
        to = '/portal';
    return (
        <Link to={to} style={{ marginLeft:"71px" }}>
            {is_mbl?
            <>
            <img src="/images/cross.svg" style={{ position:"relative", right:"410px" }} alt="" className='cross-btn' />
            </>
            :
            <>
            <img src="/images/cross.svg" alt="" className='cross-btn' />
            </>
            }
        </Link>
    )
}

export default LessonClose;