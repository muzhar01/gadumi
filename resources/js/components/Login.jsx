import React, {useState,useEffect} from 'react'
import { Link,useNavigate  } from 'react-router-dom';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

export default function Login({setToken}) {
    const [email,setEmail]=useState("")
    const [password,setPassword]=useState("")
    var [errors,setErrors]=useState("")
    const navigate =useNavigate();
    async function login(){
        let item={email,password}
        let result = await fetch("http://localhost:8000/api/login",{
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
            console.log(result.token);
            setToken(token[1]);
            navigate('/portal');
            //setTimeout(() => navigate("/portal/courses"), 1000);
          }else if(result.errors){
            setErrors(result.errors)
        }else{
            toast.error(result.message);
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
                        <li className='list-group-item border-bottom-not-active'>
                            <Link to="/portal/register" className='m-auto text-center'>Zarejestruj się</Link>
                        </li>
                        <li className='list-group-item border-bottom-active'>
                            <Link to="/portal/login" className='m-auto text-center active'>Zaloguj sie</Link>
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
                        <button onClick={login}  type="button"  className='btn btn-primary form-control'>Zaloguj sie</button>
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
                    </div>
                </form>
            </div>
        </div>
        <ToastContainer />
    </div>
    </>
      
      
  );
}
