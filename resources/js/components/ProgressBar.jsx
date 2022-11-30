
function ProgressBar({progress}) {
    return (
        <div className="progress" style={{height: '10px', width: '50%'}}>
            <div className="progress-bar progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style={{width: progress + '%'}}></div>
        </div>
    )
}

export default ProgressBar;