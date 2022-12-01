import React, { useEffect, useState } from "react";

function LessonProgress() {
    const [lesson, setLesson] = useState([]);
    const [userProgress, setUserProgress] = useState([0]);
    const user_id=localStorage.getItem('user_id');
    const base_url =import.meta.env.VITE_SENTRY_DSN_PUBLIC;
    useEffect(() => {
        axios.get(`${base_url}/lessons/`).then((response) => {
            setLesson(response.data.data);
        });
    }, []);
    useEffect(() => {
        const ProgressCount = async()=>{
          const res= await axios.get(`${base_url}/countProgress/`+user_id);
          setUserProgress(res.data.data);
        };
        ProgressCount();
      }, []);

    return (
        <div className="collapse navbar-collapse">
            <div className="navbar-text me-auto">
            
            </div>
            <div className="lesson-complete me-4 hide-mobile">
                <span className="complete-lesson">completed lessons</span>
                <span className="lesson-count">{userProgress} of {lesson.length}</span>
            </div>
            <span className="navbar-text hide-mobile">
            Your knowledge of this level
            </span>
            
            <div className="nav-item level hide-mobile">
                <span>{((userProgress/lesson.length)*100).toFixed(0)}%</span>
            </div>
        </div>
    )
}

export default LessonProgress;