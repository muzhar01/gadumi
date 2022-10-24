import React, {useState} from 'react'

import { Link,useNavigate  } from 'react-router-dom';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
export default function Register() {
  const [name,setName]=useState("")
  const [password,setPassword]=useState("")
  const [password_confirmation,setPassword2]=useState("")
  const [email,setEmail]=useState("")
  var [errors,setErrors]=useState("")
  const navigate =useNavigate();
  async function signUp(){
    let item={name,email,password,password_confirmation}
    let result = await fetch("http://localhost:8000/api/register",{
        method:"POST",
        body:JSON.stringify(item),
        headers:{
        "Content-Type":'application/json',
        "Accept":'application/json'
        }
    })
    result = await result.json()
    
    if(result.token){
      let token = result.token.split("|");
      localStorage.setItem('token', token[1]);
      toast.success("Register Successfully");
      setTimeout(() => navigate("/login"), 1000);
    }else if(result.errors){
        setErrors(result.errors)
    }
    else{
        toast.error("Failed to Register");
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
                    <h2 className="fxt-page-title mr-3">Register</h2>
                    <ul className="fxt-switcher-wrap">
                        <li><Link to="/portal/login" className="fxt-switcher-btn">Login</Link></li>
                        <li><Link to="/portal/register" className="fxt-switcher-btn active">Register</Link></li>
                    </ul>
                </div>
                <div className="fxt-main-form">
                    <div className="fxt-inner-wrap">
                        <form>
                            <div className="row">
                            <div className="col-12">
                                    <div className="form-group">
                                        <input type="text" id="name" value={name} onChange={(e)=>setName(e.target.value)} className={`form-control ${!! errors.name && "border-danger"}`} name="name" placeholder="Name" required="required" />
                                        <span className='text-danger'>{errors.name}</span>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="form-group">
                                        <input type="email" id="email" value={email} onChange={(e)=>setEmail(e.target.value)} className={`form-control ${!! errors.email && "border-danger"}`} name="email" placeholder="Email" required="required" />
                                        <span className='text-danger'>{errors.email}</span>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="form-group">
                                        <div className="input-group">
                                        <input id="password" type="password" value={password} onChange={(e)=>setPassword(e.target.value)} className={`form-control ${!! errors.password && "border-danger"}`} name="password" placeholder="Enter Password" required="required" />
                                        <i toggle="#password" className="fa fa-fw fa-eye toggle-password field-icon"></i>
                                        </div>
                                        <span className='text-danger'>{errors.password}</span>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="form-group">
                                        <div className="input-group">
                                        <input id="password_confirmation" type="password" value={password_confirmation} onChange={(e)=>setPassword2(e.target.value)} className={`form-control ${!! errors.password && "border-danger"}`} name="password_confirmation" placeholder="Confirm Password" required="required" />
                                        <i toggle="#password" className="fa fa-fw fa-eye toggle-password field-icon"></i>
                                        </div>
                                        <span className='text-danger'>{errors.password}</span>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="form-group">
                                        <button onClick={signUp} type="button" className="fxt-btn-fill">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <ToastContainer />
      </section>
      
  )
}
