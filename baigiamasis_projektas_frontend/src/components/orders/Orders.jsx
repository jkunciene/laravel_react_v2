import React, {Component} from "react";

class Orders extends Component {
    constructor(props) {
        super(props);
        this.state = {buyerName: '', buyerSurname:'', buyerAddress:'', productId:'',
            productQty:'', OrderSum:''};

        this.handleBuyerName = this.handleBuyerName.bind(this);
        this.handleBuyerSurname = this.handleBuyerSurname.bind(this);
        this.handleBuyerAddress = this.handleBuyerAddress.bind(this);
        this.handleProductId = this.handleProductId.bind(this);
        this.handleProductQty = this.handleProductQty.bind(this);
        this.handleOrderSum = this.handleOrderSum.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleBuyerName(event) {
        this.setState({buyerName: event.target.value});
    }

    handleBuyerSurname(event) {
        this.setState({buyerSurname: event.target.value});
    }

    handleBuyerAddress(event) {
        this.setState({buyerAddress: event.target.value});
    }

    handleProductId(event) {
        this.setState({productId: event.target.value});
    }

    handleProductQty(event) {
        this.setState({productQty: event.target.value});
    }

    handleOrderSum(event) {
        this.setState({OrderSum: event.target.value});
    }

    handleSubmit(event) {
        fetch(`http://skateboard.test/api/store-orders`, {
            method:'post',
            headers:{'Content-Type':'application/json'},
            body:JSON.stringify(this.state)
        }).then(response => response.json()).then(results => console.log(results));
        event.preventDefault();
    }

    render() {
        return (
            <form onSubmit={this.handleSubmit}>
                <label>
                    Buyer Name:
                    <input type="text" value={this.state.buyerName} onChange={this.handleBuyerName} />
                </label>
                <label>
                    Buyer Surname:
                    <input type="text" value={this.state.buyerSurname} onChange={this.handleBuyerSurname} />
                </label>
                <label>
                    Buyer Address:
                    <input type="text" value={this.state.buyerAddress} onChange={this.handleBuyerAddress} />
                </label>
                <label>
                    Product ID:
                    <input type="text" value={this.state.productId} onChange={this.handleProductId} />
                </label>
                <label>
                    Product Quantity:
                    <input type="text" value={this.state.productQty} onChange={this.handleProductQty} />
                </label>
                <label>
                    Order Sum:
                    <input type="text" value={this.state.OrderSum} onChange={this.handleOrderSum} />
                </label>
                <input type="submit" value="Submit" />
            </form>
        );
    }
}

export default Orders;