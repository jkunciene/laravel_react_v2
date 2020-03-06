import React from 'react';
import Main from "../main/Main";
import About from "../about/About"
import Product from "../product/Product"
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

            <Router>
                <Navigation/>
                <div>
                    <Switch>
                        <Route exact path="/">
                            <Main/>
                        </Route>
                        <Route path="/about">
                            <About/>
                        </Route>
                        <Route path="/product/:id" component={Product}/>
                    </Switch>
                </div>
            </Router>
        </div>
    );
}

export default App;
