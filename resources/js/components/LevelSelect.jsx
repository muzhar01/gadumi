import { useEffect, useRef } from "react";

function LevelSelect({setLevel}) {
    if (typeof setLevel !== 'function')
        setLevel = () => {}

    const setLessonLevel = (event) => {
        setLevel(event.target.value);
        localStorage.setItem('lessonLevel', event.target.value);
    }
    const select = useRef();
    let level = localStorage.lessonLevel;

    useEffect(() => {
        if (select.current !== null) {
            select.current.value = level;
        }
    }, [])
    return (
       <div className="level-select">
        <label>Choose the level you want to study at</label>
        <select ref={select} className="btn btn-outline-primary d-block w-100 select-level shadow-none" onChange={(event) => setLessonLevel(event)} style={{backgroundImage: 'url("images/select_arrow.svg")'}}>
            <option value="Beginner">Beginner A1</option>
            <option value="Intermediate">Intermediate A2</option>
            <option value="Advanced">Advanced A3</option>
        </select>
       </div>
    )
}

export default LevelSelect;

/*<hr/>
            <li className="list-group-item d-none d-md-block">
            <p className="level-text">Wybierz poziom na jakim chcesz się uczyć</p>
            <select ref={select} className="btn btn-outline-primary d-block w-100 select-level" onChange={(event) => setLessonLevel(event)}>
                <option value="Beginner">Beginner A1</option>
                <option value="Intermediate">Intermediate A2</option>
                <option value="Advanced">Advanced A3</option>
            </select>
            </li>
            <hr/>*/