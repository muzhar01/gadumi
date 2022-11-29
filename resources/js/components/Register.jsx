import React, {useState,useEffect} from 'react'

import { Link,useNavigate  } from 'react-router-dom';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
export default function Register() {
//   const [name,setName]=useState("")
  const [password,setPassword]=useState("")
  const [password_confirmation,setPassword2]=useState("")
  const [email,setEmail]=useState("")
  var [errors,setErrors]=useState("")
  const navigate =useNavigate();
  async function signUp(){
    let item={email,password,password_confirmation}
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
      setTimeout(() => navigate("/login", "test"), 1000);
    }else if(result.errors){
        setErrors(result.errors)
    }
    else{
        toast.success("Your account is registered. You can now login!");
        setTimeout(() => navigate("/portal/login"), 3000);
        //setTimeout(() => navigate("/portal/courses"), 1000);
    }
  }
  return (
    <>
    <div className="container">
        <div className="row justify-content-center align-items-center">
            <div className='col-12 col-md-10 col-lg-4'>
                <div className='d-flex justify-content-center align-items-center mt-5'>
                    <img src="/images/logo.svg" style={{height:'40px'}} className='mx-2'/>
                    <span className='logo-heading'>Hello!</span>
                </div>
                <h1 className='text-center mt-3 login-h1'>Witaj na Gadumi</h1>
                <div className='d-flex justify-content-center align-content-center mt-4'>
                    <ul className='list-group list-group-horizontal login-collaps'>
                        <li className='list-group-item border-bottom-active'>
                            <Link to="/portal/register" className='m-auto text-center active'>Zarejestruj się</Link>
                        </li>
                        <li className='list-group-item border-bottom-not-active'>
                            <Link to="/portal/login" className='m-auto text-center '>Zaloguj sie</Link>
                        </li>
                    </ul>
                </div>
                <form>
                    <div className="form-group mt-4">
                        <label htmlFor="">E-mail</label>
                        <input type="email" value={email} onChange={(e)=>setEmail(e.target.value)} className={`form-control bg-light ${!! errors.email && "border-danger"}`} name="email"></input>
                        <span className='text-danger'>{errors.email}</span>
                    </div>
                    <div className="form-group mt-4">
                        <label htmlFor="">Hasło</label>
                        <input type="password"  value={password} onChange={(e)=>setPassword(e.target.value)} className={`form-control ${!! errors.password && "border-danger"} bg-light`} name="password"></input>
                        <span className='text-danger'>{errors.password}</span>
                    </div>
                    <div className="form-group mt-4">
                        <button  onClick={signUp} type="button"  className='btn btn-primary form-control'>Zarejestruj się</button>
                    </div>
                    <div className='row  mt-4'>
                        <span className='col m-0 p-0'><hr/></span>
                        <span className='col text-center m-0 p-0'>lub</span>
                        <span className='col m-0 p-0'><hr/></span>
                    </div>
                    <div className="form-group mt-4">
                        <button type="submit" className='btn btn-light form-control google-btn'>
                            <img src="/images/google1.png" alt="" className='google-icon'/>
                            kontynuuj prezez konto Google
                        </button>
                        <span className='privacy-policy-btn'>Rejestrując się oświadczasz, że znasz i akceptujesz dokumenty, <strong>regulaminy</strong> i <strong> politykę prywatności</strong></span>
                    </div>
                </form>
            </div>
        </div>
        <ToastContainer />
    </div>
    </>
  )
}
