import React, { useEffect, useState } from "react";
import Form from 'react-bootstrap/Form'
import Button from 'react-bootstrap/Button';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import { useNavigate, useParams } from 'react-router-dom'
import axios from 'axios';
import Swal from 'sweetalert2';

export default function EditUser() {
  const navigate = useNavigate();

  const { id } = useParams()

  const [name, setName] = useState("")
  const [amount, setAmount] = useState("")
  const [address, setAddress] = useState("")
  const [time, setTime] = useState("")
  const [validationError,setValidationError] = useState({})

  useEffect(()=>{
    fetchProduct()
  },[])

  var obj={id:id, name:"napa"}

  const fetchProduct = async () => {
    await axios.post(`/changeinfo`, obj).then(({data})=>{
      const { name, amount, address, time } = data.history
      setName(name)
      setAmount(amount)
      setAddress(address)
      setTime(time)
      console.log(data.history);
    }).catch(({response:{data}})=>{
      Swal.fire({
        text:data.message,
        icon:"error"
      })
    })
  }

 
  const updateProduct = async (e) => {
    e.preventDefault();

    const formData = new FormData()
    formData.append('_method', 'PATCH');
    formData.append('name', name)
    formData.append('amount', amount)
    formData.append('address', address)
    formData.append('time', time)
    

    await axios.post(`http://localhost:8000/api/changeinfo/${id}`, formData).then(({data})=>{
      Swal.fire({
        icon:"success",
        text:data.message
      })
      navigate("/")
    }).catch(({response})=>{
      if(response.status===422){
        setValidationError(response.data.errors)
      }else{
        Swal.fire({
          text:response.data.message,
          icon:"error"
        })
      }
    })
  }

  return (
    <div className="container">
      <div className="row justify-content-center">
        <div className="col-12 col-sm-12 col-md-6">
          <div className="card">
            <div className="card-body">
              <h4 className="card-title">Order Details</h4>
              <hr />
              <div className="form-wrapper">
                {
                  Object.keys(validationError).length > 0 && (
                    <div className="row">
                      <div className="col-12">
                        <div className="alert alert-danger">
                          <ul className="mb-0">
                            {
                              Object.entries(validationError).map(([key, value])=>(
                                <li key={key}>{value}</li>   
                              ))
                            }
                          </ul>
                        </div>
                      </div>
                    </div>
                  )
                }
                <Form onSubmit={updateProduct}>
                  <Row> 
                      <Col>
                        <Form.Group controlId="Name">
                            <Form.Label>Name</Form.Label>
                            <Form.Control type="text" value={name} onChange={(event)=>{
                              setName(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>  
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Amount">
                            <Form.Label>Amount</Form.Label>
                            <Form.Control type="text" rows={3} value={amount} onChange={(event)=>{
                              setAmount(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Address">
                            <Form.Label>Address</Form.Label>
                            <Form.Control type="text" rows={3} value={address} onChange={(event)=>{
                              setAddress(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Time">
                            <Form.Label>Time</Form.Label>
                            <Form.Control type="text" rows={3} value={time} onChange={(event)=>{
                              setTime(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>
                  </Row>
                  <Button variant="primary" className="mt-2" size="lg" block="block" type="submit">
                    Update
                  </Button>
                </Form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}

// import react from "react";
// import { useParams } from "react-router-dom";
// import React, { useState, useEffect } from "react";
// import "bootstrap/dist/css/bootstrap.min.css";

// import axios from "axios";
// import { useHistory } from "react-router";

// const SingleOrderDetails = () => {
//   const { id } = useParams();
//   // const history = useHistory();
//   let [pass, setPass] = useState([]);
//   let [name, setName] = useState("");
//   let [amount, setAmount] = useState("");
//   let [address, setAddress] = useState("");
//   let [time, setTime] = useState("");
//   let [error, setError] = useState("");

//   useEffect(() => {
//     if (localStorage.getItem("user")) {
//       var obj = JSON.parse(localStorage.getItem("user"));
//       setPass(obj);
//       console.log(obj);
//     }
//     var obj= {id:2 , name: "Napa"};

//     axios
//       .post("/changeinfo", obj)
//       .then((resp) => {
//         // setName(resp.data.name);
//         // setAmount(resp.data.amount);
//         // setAddress(resp.data.address);
//         // setTime(resp.data.time);

//         console.log(resp.data);
//       })
//       .catch((err) => {
//         console.log(err);
//       });
//   }, []);

//   const EditSubmit = () => {
//     // var obj = {
//     //   name: name,
//     //   amount: amount,
//     //   address: address,
//     // };
//     // console.log(obj);
//     // axios
//     //   .post("/changeorder", obj)
//     //   .then((resp) => {
//     //     // history.push("/");
//     //     console.log(resp.data);
//     //   })
//     //   .catch((err) => {
//     //     console.log(err);
//     //   });
//   };

//   return (
//     <div>
//       <div className="signin-container">
//         <form>
//           <div class="form-outline">
//             <label class="form-label" for="formControlLg">
//               Name
//             </label>
//             <input
//               className="form-control form-control-lg"
//               type="text"
//               value={name}
//               onChange={(e) => setName(e.target.value)}
//             />
//           </div>

//           <div class="form-outline">
//             <label class="form-label" for="formControlLg">
//               Amount:
//             </label>
//             <input
//               className="form-control form-control-lg"
//               type="text"
//               value={amount}
//               onChange={(e) => setAmount(e.target.value)}
//             />
//           </div>
//           <div class="form-outline">
//             <label class="form-label" for="formControlLg">
//               Address:
//             </label>
//             <input
//               className="form-control form-control-lg"
//               type="text"
//               value={address}
//               onChange={(e) => setAddress(e.target.value)}
//             />
//           </div>
//           <div class="form-outline">
//             <label class="form-label" for="formControlLg">
//               Time:
//             </label>
//             <input
//               className="form-control form-control-lg"
//               type="datetime-local"
//               value={time}
//               onChange={(e) => setTime(e.target.value)}
//             />
//           </div>
//         </form>
//         <br></br>
//         <button className="btn btn-primary" onClick={EditSubmit}>
//           Update
//         </button>
//         <br />
//         <br />
//         {error ? <div className="alert alert-danger">{error}</div> : ""}
//       </div>
//     </div>
//   );
// };
// export default SingleOrderDetails;
