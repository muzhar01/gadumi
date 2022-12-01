function LevelSelect({setLevel}) {
    return (
        <>
            <hr/>
            <li className="list-group-item d-none d-md-block">
            <p className="level-text">Wybierz poziom na jakim chcesz się uczyć</p>
            <select className="btn btn-outline-primary d-block w-100 select-level" onChange={(event) => setLevel(event.target.value)}>
                <option value="Beginner">Beginner A1</option>
                <option value="Intermediate">Intermediate A2</option>
                <option value="Advanced">Advanced A3</option>
            </select>
            </li>
            <hr/>
        </>
    )
}

export default LevelSelect;