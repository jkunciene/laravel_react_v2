import React from 'react';

function Products(props) {
    console.log(props);
    const products = props.products.map(product => (
        <p>{product.name}</p>
    ))
    return(
        <div>
            {products}
        </div>

    )
}
export default Products;