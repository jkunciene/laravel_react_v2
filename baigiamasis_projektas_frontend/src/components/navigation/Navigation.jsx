import React, {Component} from "react"
import {Link} from "react-router-dom"

function Navigation() {
    return (

<nav className="navbar navbar-expand-lg navbar-light bg-light">
    <a className="navbar-brand" href="/">Shop</a>
    <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div className="navbar-nav">
            <a className="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
            <a className="nav-item nav-link" href="/about">Apie</a>

            <Link to="/product" className="nav-item nav-link">Product</Link>

        </div>
    </div>
</nav>

    );
}

export default Navigation;