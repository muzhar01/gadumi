import { useEffect, useState } from "react";

function ProgressBar({progress,lesson_id,total_exercise}) {
    console.log(progress)
    const {userProgress,setUserProgress}=useState();
    const user_id=localStorage.getItem('user_id');
    useEffect(()=>{
    let item={user_id,lesson_id,total_exercise,progress}
    const base_url =import.meta.env.VITE_SENTRY_DSN_PUBLIC;
    fetch(`${base_url}/progressStore`,{
        method:"POST",
        body:JSON.stringify(item),
        headers:{
        "Content-Type":'application/json',
        "Accept":'application/json'
        }
    })
    });
    return (
        <div className="progress" style={{height: '10px', width: '50%'}}>
            <div className="progress-bar progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style={{width: progress + '%'}}></div>
        </div>
    )
}

export default ProgressBar;