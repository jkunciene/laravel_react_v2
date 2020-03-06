import React from 'react';


function Products(props) {
    const products = props.products.map(product => (
        <div className="col-lg-6 portfolio-item">
            <div className="card h-100">
                <a href="#"><img className="card-img-top" src="http://placehold.it/700x400" alt=""/></a>
                <div className="card-body">
                    <h4 className="card-title">
                        <a href="#">{product.name}</a>
                    </h4>
                    <p className="card-text">{product.description}</p>
                    <button type="submit" class="btn btn-info">More...</button>
                </div>
            </div>
        </div>


    ))
    return (


            <div className="row">
                {products}
            </div>


    );
}

export default Products;