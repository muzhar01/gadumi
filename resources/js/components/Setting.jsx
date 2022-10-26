import React, {useState,useEffect} from 'react'
import { Link,useNavigate  } from 'react-router-dom';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import HeaderListing from './HeaderListing'
import ListingSidebar from './ListingSidebar'

export default function Setting() {
  const [user,setUser]=useState("")
  const [name,setName]=useState("")
  const [email,setEmail]=useState("")
  const [address,setAddress]=useState("")
  var [errors,setErrors]=useState("")
  const token=localStorage.getItem('token');
  const config = {
    headers: { Authorization: `Bearer ${token}` }
  };
  React.useEffect(() => {
    axios.get("http://localhost:8000/api/userData/",config).then((response) => {
      let userData=response.data.data;
      setName(userData.name);
      setEmail(userData.email);
      setAddress(userData.address);
    });
  }, []);
  async function updateProfile(){
    const token1=localStorage.getItem('token');
    let item={name,email,address}
    let result = await fetch("http://localhost:8000/api/updateProfile",{
      method:"POST",
      body:JSON.stringify(item),
      headers:{
        "Content-Type":'application/json',
        "Accept":'application/json',
        "Authorization": `Bearer ${token1}`

      },
      body:JSON.stringify(item)
    })
    result = await result.json()
    if(result && result.success==true){
      toast.success(result.message);
    }else if(result.errors){
      setErrors(result.errors)
    }else{
      toast.error(result.message);
    }
}
  return (
    <>
    <HeaderListing/>
    <div className="container">
      <div className="container-fluid mt-5">
        <div className="row">
          <ListingSidebar/>
          <div className="col-lg-8">
            <form method="POST">
              <div className="row">
                  <div className="col-12 mb-3">
                    <div className="form-group">
                    <label htmlFor="name">Name</label>
                      <input type="text" id="name" onChange={(e)=>setName(e.target.value)} className={`form-control ${!! errors.name && "border-danger"}`} name="name" placeholder="Name" required="required" value={name} />
                      <span className='text-danger'>{errors.name}</span>
                    </div>
                  </div>
                  <div className="col-12 mb-3">
                    <div className="form-group">
                    <label htmlFor="email">Email</label>
                      <input type="email" id="email" onChange={(e)=>setEmail(e.target.value)} className={`form-control ${!! errors.email && "border-danger"}`} name="email" placeholder="Email" required="required" value={email} />
                      <span className='text-danger'>{errors.email}</span>
                    </div>
                  </div>
                  <div className="col-12">
                    <div className="form-group">
                      <label htmlFor="address">Address</label>
                      <div className="input-group">
                        <input id="address" type="address" value={address} onChange={(e)=>setAddress(e.target.value)} className={`form-control ${!! errors.address && "border-danger"}`} name="address" placeholder="Enter Address" required="required" />
                        <i toggle="#password" className="fa fa-fw fa-eye toggle-password field-icon"></i>
                      </div>
                      <span className='text-danger'>{errors.address}</span>
                    </div>
                  </div>
                  <div className="col-12 mb-3">
                    <div className="form-group">

                    </div>
                  </div>
                  <div className="col-12">
                      <div className="form-group">
                          <button type="button" onClick={updateProfile} className="btn btn-primary">Change</button>
                      </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
        <ToastContainer />
    </div>
  </>
  )
}

