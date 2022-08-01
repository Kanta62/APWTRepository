import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';

export default function List() {

    const [products, setProducts] = useState([])

    useEffect(()=>{
        fetchProducts() 
    },[])

    const fetchProducts = async () => {
        await axios.get(`http://127.0.0.1:8000/api/products/list`).then(({data})=>{
            setProducts(data)
        })
    }

    return (
      <div className="container">
          <div className="row">
            <div className='col-12'>
                <Link className='btn btn-primary mb-2 float-end' to={"/PlaceOrder"}>
                    Place Order
                </Link>
            </div>
            <div className="col-12">
                <div className="card card-body">
                    <div className="table-responsive">
                        <table className="table table-bordered mb-0 text-center">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Amount</th>
                                    <th>Address</th>
                                    <th>Order Time</th>
                                    <th>Order Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    products.length > 0 && (
                                        products.map((row, key)=>(
                                            <tr key={key}>
                                                <td>{row.name}</td>
                                                <td>{row.amount}</td>
                                                <td>{row.address}</td>
                                                <td>{row.created_at}</td>
                                                <td>
                                                    <Link to={"/SingleOrderDetails/" + row.id } className='btn btn-success me-2'>
                                                        VIEW
                                                    </Link>     
                                                </td>
                                            </tr>
                                        ))
                                    )
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
    )
}