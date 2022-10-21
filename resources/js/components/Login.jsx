import React, {useState} from 'react'
import { Link } from 'react-router-dom';

export default function Login() {
    const [email,setEmail]=useState("")
    const [password,setPassword]=useState("")
    async function login(){
        let item={email,password}
        let result = await fetch("http://localhost:8000/api/login",{
            method:"POST",
            body:JSON.stringify(item),
            headers:{
              "Content-Type":'application/json',
              "Accept":'application/json'
            },
            body:JSON.stringify(item)
          })
          result = await result.json()
          if(result.token){
            let token = result.token.split("|");
            localStorage.setItem('token', token[1]);
            console.log(result.token);
          }else{
            console.log(result);
          }
    }
  return (
      <section className="fxt-template-animation fxt-template-layout31">
        <span className="fxt-shape fxt-animation-active"></span>
        <div className="fxt-content-wrap">
            <div className="fxt-heading-content">
                <div className="fxt-inner-wrap">
                    <div className="fxt-transformY-50 fxt-transition-delay-3">
                        <h1 className="fxt-main-title">GADUMI</h1>
                    </div>
                    <div className="fxt-transformY-50 fxt-transition-delay-4">
                        <h1 className="fxt-main-title">Your English Course.</h1>
                    </div>
                </div>
            </div>
            <div className="fxt-form-content">
                <div className="fxt-page-switcher">
                    <h2 className="fxt-page-title mr-3">Login</h2>
                    <ul className="fxt-switcher-wrap">
                        <li><Link to="/login" className="fxt-switcher-btn active">Login</Link></li>
                        <li><Link to="/register" className="fxt-switcher-btn">Register</Link></li>
                    </ul>
                </div>
                <div className="fxt-main-form">
                    <div className="fxt-inner-wrap">
                        <form method="POST">
                            <div className="row">
                                <div className="col-12">
                                    <div className="form-group">
                                        <input type="email" id="email" onChange={(e)=>setEmail(e.target.value)} className="form-control" name="email" placeholder="Email" required="required" />
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="form-group">
                                        <input id="password" onChange={(e)=>setPassword(e.target.value)} type="password" className="form-control" name="password" placeholder="Password" required="required" />
                                        <i toggle="#password" className="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="form-group">
                                        <div className="fxt-checkbox-wrap">
                                            <div className="fxt-checkbox-box mr-3">
                                                <input id="checkbox1" type="checkbox" />
                                                <label htmlFor="checkbox1" className="ps-4">Keep me logged in</label>
                                            </div>
                                            <a href="/" className="fxt-switcher-text">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="form-group">
                                        <button type="button" onClick={login} className="fxt-btn-fill">Log in</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </section>
  );
}
