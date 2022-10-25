import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Listing from './Listing';
import Login from './Login';
import Register from './Register';
import NotFound from './NotFound';
import LessonDetail from './LessonDetail';
import Exercise from './Exercise';
import Logout from './Logout';
function App() {
  const [token, setToken] = useState(localStorage.getItem('token'));
  
    return (
        <BrowserRouter >
          <Routes>
            <Route path="/portal">
              {!token?
                <>
                  <Route exact index element={<Register/>} />
                  <Route exact path="portal" element={<Register/>}/>
                  <Route exact path="register" element={<Register/>}/>
                  <Route exact path="login" element={<Login setToken={setToken} />}/>
                </>
                :
                <>
                  <Route exact index element={<Listing/>} />
                  <Route exact path="courses" element={<Listing/>}/>
                  <Route  path="lessonDetail/:id" element={<LessonDetail/>}/>
                  <Route exact path="exercise/:id" element={<Exercise/>}/>
                </>
              }

              <Route path="*" element={<NotFound />} />
            </Route>
            
            <Route exact path="/logout" element={<Logout/>}/>
          </Routes>
        </BrowserRouter>
    );
}

export default App;


if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
