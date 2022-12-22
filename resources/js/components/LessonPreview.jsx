import { Link } from 'react-router-dom';

function LessonPreview({lesson, level, setting, i}) {
    if (lesson.level !== level) return <></>;

    return (
        <Link to={`lessonDetail/${lesson.id}`} className="lesson-heading">
            <div className="lesson-preview">
                <div className="details">
                    <div className="image sec">
                        <img src={lesson.image} alt="" />
                    </div>
                    <div className="title sec">
                        <h2><strong>{i}. {lesson.title}</strong></h2>
                        <span>czas lekcji: 7 min</span>
                    </div>
                    <div className="sec d-flex align-items-center">
                        <img src={lesson?.progress && lesson.progress.progress == 100 ? '../images/check_success.svg' : '../images/check.svg'} width="35" height="35" alt=""/>
                    </div>
                </div>
                <div className="overview">Powitania w języku angielskim</div>
            </div>
        </Link>
    )
}

export default LessonPreview;

/*

<Link to={`lessonDetail/${lesson.id}`} className="lesson-heading">
    <li  className="list-group-item course-listing">
        <div className="row border-bottom">
            <div className="col-11 course-list"> 
            <div className="row">
                <div className="col-4 col-md-2 col-lg-2">
                
                <img src={lesson.image} alt="" srcSet=""/>
                </div>
                <div className="col-6 col-md-9 col-lg-9 ms-4">
                
                <h2 className="lesson-heading" style={{';font_size':`${setting.color}`,';line_spacing':`${setting.color}`,';font_weight':`${setting.color}`}}>{i}.{lesson.title}</h2>
                <span className="d-block text-muted">lesson time: 7 min</span><br/>
                </div>
            </div>
            <p>{lesson.overview}</p>
            </div>
            <div className="col-1 d-block check-image">
            <img src={lesson?.progress && lesson.progress.progress == 100 ? '../images/check_success.svg' : '../images/check.svg'} alt=""/>
            </div>
        </div>
    </li>
</Link>

*/