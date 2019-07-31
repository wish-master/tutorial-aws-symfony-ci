import {getAPIResponse} from "./services/network";

require('../css/app.css');

import React, {Fragment} from 'react';
import ReactDOM from 'react-dom';

class App extends React.Component {
    state = {
        someVar: null
    };

    componentWillMount = () => {
        const someVar = document.getElementById('someVar');
        this.setState({
            someVar: someVar.innerText
        });
    };

    render = () => {
        return (
            <Fragment>
                <h3>Hello, world!</h3>
                <p>Some variable from database: <strong id="someVar">{this.state.someVar}</strong></p>
            </Fragment>
        );
    };
}

ReactDOM.hydrate(<App/>, document.getElementById('App'));
