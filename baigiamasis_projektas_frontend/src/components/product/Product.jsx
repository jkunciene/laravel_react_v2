import React, {Component} from 'react';
import {Link} from "react-router-dom"

class Product extends Component{
    constructor(props){
        super(props);
        this.state = {product: {}};
    }
    componentDidMount(){

        fetch(`http://skateboard.test/api/product/${this.props.match.params.id}`)

            .then(response => response.json())
            .then(
                data=>{

                    this.setState({
                        product: data
                    }, () => console.log(this.state.product))
                })
    }
    render(){
const productId = localStorage.setItem('id', this.state.product.id);
        return(
            <main>
                <div className="container">
                    <div className="col-lg-6 portfolio-item">
                        <div className="card h-100">
                            <a href="#"><img className="card-img-top" src="http://placehold.it/700x400" alt=""/></a>
                            <div className="card-body">
                                <h4 className="card-title">
                                    <a href="#">{this.state.product.name}</a>
                                </h4>
                                <p className="card-text">Product ID {this.state.product.id}</p>
                                <p className="card-text">{this.state.product.description}</p>
                                <Link to="/orders" type="submit" className="btn btn-info">Pirkti...</Link>
                            </div>
                        </div>
                    </div>

                </div>

            </main>
        );

    }

}
export default Product;