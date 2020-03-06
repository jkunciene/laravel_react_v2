import React from 'react';
import Main from "../main/Main";
import About from "../about/About"
import Product from "../product/Product"
import Navigation from "../navigation/Navigation"
import Category from "../category/Category"

import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from "react-router-dom";
import Orders from "../orders/Orders";


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
                        <Route path="/orders" >
                            <Orders/>
                        </Route>
                    </Switch>
                </div>
            </Router>
        </div>
    );
}

export default App;
