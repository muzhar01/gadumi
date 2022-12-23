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
                        <h2 style={{';font_size':`${setting.color}`,';line_spacing':`${setting.color}`,';font_weight':`${setting.color}`}}><strong>{i}. {lesson.title}</strong></h2>
                        <span>lesson time: 7 min</span>
                    </div>
                    <div className="sec d-flex align-items-center">
                        <img src={lesson?.progress && lesson.progress.progress == 100 ? '../images/check_success.svg' : '../images/check.svg'} width="35" height="35" alt=""/>
                    </div>
                </div>
                <div className="overview">{lesson.overview}</div>
            </div>
        </Link>
    )
}

export default LessonPreview;