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
            <div className="dropdown">
                <button className="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategorijos
                </button>
                <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a className="dropdown-item" href="/">ta</a>
                </div>
            </div>
        </div>
    </div>
</nav>

    );
}

export default Navigation;