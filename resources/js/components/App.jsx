import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Listing from './Listing';
import Login from './Login';
import Register from './Register';
function App() {
    return (
        <BrowserRouter >
          <Routes>
            <Route path="/portal">
              {
                localStorage.getItem('token') ?(
                <>
                  <Route exact path="portal" element={<Listing/>}/>
                  <Route exact path="courses" element={<Listing/>}/>
                </>
                ):(
                <>
                  <Route exact index element={<Register/>} />
                  <Route exact path="portal" element={<Register/>}/>
                  <Route exact path="register" element={<Register/>}/>
                  <Route exact path="login" element={<Login/>}/>
                </>)
              }
            </Route>
          </Routes>
        </BrowserRouter>
    );
}

export default App;


if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
