import './App.css';
import * as React from "react";
import Navbar from "react-bootstrap/Navbar";
import Container from "react-bootstrap/Container";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";
import 'bootstrap/dist/css/bootstrap.css';

import { BrowserRouter as Router , Routes, Route, Link } from "react-router-dom";

import LoginAPI from "./Components/Login";

function App() {
  const myStyle = {
    color: "white",
    backgroundColor: "#3399FF",
    padding: "10px",
    fontFamily: "Sans-Serif"
  };
  return (
    <Router>
    
    {/* Header */}
    
    <Navbar bg="primary">
      <Container>
        <Link to={"#"} className="navbar-brand text-white">
          Sanofy.com
        </Link>
        <span style={myStyle}>
        <Link to={"/login"} className="navbar-brand text-white">
          Login
        </Link>
        <Link to={"/"} className="navbar-brand text-white">
          Logout
        </Link>
        </span>

        
      </Container>     
    </Navbar>
    
    <Container className="mt-5">
      <Row>
        <Col md={12}>
          <Routes>
          {/* <Route exact path="/PlaceOrder" element={<PlaceOrder />} /> */}
            <Route exact path='/login' element={<LoginAPI />} />
            {/* <Route exact path="/SingleOrderDetails/:id" component={EditOrder} /> */}
            {/* <Route exact path='/SingleOrderDetails/:id' render={(props) => <EditOrder {...props}/>}/> */}
            {/* <Route exact path='/SingleOrderDetails' element={<EditOrder />} /> */}
          </Routes>
        </Col>
      </Row>
    </Container>

  </Router>
  );
}

export default App;
