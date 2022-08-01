
import React, {useState, userEffect} from "react";
import axios from "axios";

const Login = ()=>{
    let[token, setToken]= useState("");
    let[username, setUname] = useState("");
    let[password, setPassword] =useState("");

    const loginSubmit= ()=>{
        var obj = {username: username, password: password};
        axios.post("http://127.0.0.1:8000/api/login",obj)
        .then(resp=>{
            var token = resp.data;
            console.log(token);
            var pharmacy = {prmId: token.id, access_token:token.token};
            localStorage.setItem('pharmacy',JSON.stringify(pharmacy));
            // console.log(localStorage.getItem('user'));
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        <div>
            <form>
                <input type="text" value={username} onChange={(e)=>setUname(e.target.value)}></input>
                <input type="password" value={password} onChange={(e)=>setPassword(e.target.value)}></input>

            </form>
                <button onClick={loginSubmit}>Login</button>
        </div>

    )
}
export default Login;