import { Navigate } from 'react-router-dom';

function NotFound() {

    if(localStorage.getItem('token') != ""){
        return <Navigate to="/portal" />
    }

    return (
        <div>
            <h1>404 Not Found</h1>
        </div>
    )
}

export default NotFound;