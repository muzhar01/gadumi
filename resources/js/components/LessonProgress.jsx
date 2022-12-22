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
        <div className="lesson-progress">
            <div className="lessons-count">
                <span className="text">Completed Lessons</span>
                <span className="count">{userProgress} out {lesson.length}</span>
            </div>
            <div className="knowledge-level">
                <span className="text">Your knowledge of this level</span>
                <span className="percentage">{((userProgress/lesson.length)*100).toFixed(0)}<span className="symbol">%</span></span>
            </div>
        </div>
    )
}

export default LessonProgress;