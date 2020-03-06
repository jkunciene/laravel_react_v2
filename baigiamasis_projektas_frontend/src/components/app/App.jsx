import React from 'react';
import Main from "../main/Main";
import About from "../about/About"
import Navigation from "../navigation/Navigation"

import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from "react-router-dom";

function App() {
    return (
        <div className="container">
<Navigation/>
            <Router>
                <div>
                    <Switch>
                        <Route exact path="/">
                            <Main/>
                        </Route>
                        <Route path="/about">
                            <About/>
                        </Route>
                    </Switch>
                </div>
            </Router>


        </div>
    );
}

export default App;
