import React from "react";

function LessonProgress() {
    const [lesson, setPost] = React.useState([]);
    React.useEffect(() => {
        axios.get("http://localhost:8000/api/lessons/").then((response) => {
        setPost(response.data.data);
        });
    }, []);

    return (
        <div className="collapse navbar-collapse">
            <div className="navbar-text me-auto">
            
            </div>
            <div className="lesson-complete me-4 hide-mobile">
                <span className="complete-lesson">completed lessons</span>
                <span className="lesson-count">0 of {lesson.length}</span>
            </div>
            <span className="navbar-text hide-mobile">
            Your knowledge of this level
            </span>
            
            <div className="nav-item level hide-mobile">
                <span>0%</span>
            </div>
        </div>
    )
}

export default LessonProgress;