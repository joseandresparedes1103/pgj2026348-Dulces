// resources/js/components/ExampleComponent.js
import React from 'react';
import ReactDOM from 'react-dom';

function ExampleComponent() {
    return (
        <div>
            <h1>Hello, this is a React component!</h1>
            <h2>sdfdsf</h2>
        </div>
    );
}

export default ExampleComponent;

if (document.getElementById('example')) {
    ReactDOM.render(<ExampleComponent />, document.getElementById('example'));
}
