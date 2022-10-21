import React from 'react';
import ReactDOM from 'react-dom';
import Login from './Login';

function App() {
    return (
        <Login></Login>
    );
}

export default App;


if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
