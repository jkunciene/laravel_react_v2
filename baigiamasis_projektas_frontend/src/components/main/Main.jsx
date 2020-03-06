import React, {Component} from 'react';
import Products from '../products/Products'
import Orders from "../orders/Orders";
//react.component jei virsuje neimpoirtuoju

class Main extends Component{
    constructor(props){
        super(props);
        this.state = {allProducts: [], allCategories: []};
    }
    componentDidMount(){
        console.log("Labas");
        fetch(`http://skateboard.test/api/all-products`)
            .then(response => response.json())
            .then(
                data=>{

                    this.setState({
                        allProducts: data
                    }, () => console.log(this.state.allProducts))
                })

    }



    render(){

        return(
            <main>
                <div className="container">

                            <Products products={this.state.allProducts}/>



                </div>

            </main>
        );

    }

}
export default Main;