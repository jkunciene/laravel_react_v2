import React, {Component} from 'react';
import Products from '../products/Products'
//react.component jei virsuje neimpoirtuoju

class Main extends Component{
    constructor(props){
        super(props);
        this.state = {allProducts: []};
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
                <div className="row card-row">
                    <div className="card container card-container">
                        <div className="card-header">
                            <Products products={this.state.allProducts}/>
                        </div>

                    </div>
                </div>

            </main>
        );

    }

}
export default Main;