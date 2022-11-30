import React, {useState,useEffect} from 'react'
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import Header from './Header';
import LessonMenu from './LessonMenu';
import LessonProgress from './LessonProgress';
import LevelSelect from './LevelSelect';
import Logo from './Logo';
import Menu from './Menu';
import MobileMenu from './MobileMenu';
import Sidebar from './Sidebar';

export default function Setting() {
  let [current_password,setCurrentPassword]=useState("")
  let [new_password,setNewPassword]=useState("")
  let [confirm_password,setConfirmPassword]=useState("")
  let [delete_password,setDeletePassword]=useState("")
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
  async function changePassword(){
    const token1=localStorage.getItem('token');
    let item={current_password,new_password,confirm_password}
    let result = await fetch("http://localhost:8000/api/changePassword",{
      method:"POST",
      body:JSON.stringify(item),
      headers:{
        "Content-Type":'application/json',
        "Accept":'application/json',
        "Authorization": `Bearer ${token1}`

      }
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
      }
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
  async function deleteAccount(){
    const token1=localStorage.getItem('token');
    let item={delete_password}
    let result = await fetch("http://localhost:8000/api/deleteAccount",{
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
    <Header>
      <Logo />
      <MobileMenu />
      <LessonProgress />
    </Header>
    <div className="container">
      <div className="container-fluid mt-5">
        <div className="row">
          <Sidebar>
            <LessonMenu />
            <LevelSelect />
            <Menu />
          </Sidebar>
          <div className="col-lg-8">
          <ul className="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li className="nav-item">
              <a className="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
            </li>
            <li className="nav-item">
              <a className="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Change Password</a>
            </li>
            <li className="nav-item">
              <a className="nav-link text-danger" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Delete Account</a>
            </li>
          </ul>
          <div className="tab-content" id="myTabContent">
            <div className="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                            <button type="button" onClick={updateProfile} className="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
            <div className="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              
            <form method="POST">
                <div className="row">
                  <div className="col-12 mb-3">
                    <div className="form-group">
                      <label htmlFor="current_password">Current Password</label>
                      <input type="password" id="current_password" onChange={(e)=>setCurrentPassword(e.target.value)} className={`form-control ${!! errors.current_password && "border-danger"}`} name="current_password" placeholder="********" required="required"  />
                      <span className='text-danger'>{errors.current_password}</span>
                    </div>
                  </div>
                  <div className="col-12 mb-3">
                    <div className="form-group">
                      <label htmlFor="new_password">New Password</label>
                      <input type="password" id="new_password" onChange={(e)=>setNewPassword(e.target.value)} className={`form-control ${!! errors.new_password && "border-danger"}`} name="new_password" placeholder="********" required="required" />
                      <span className='text-danger'>{errors.new_password}</span>
                    </div>
                  </div>
                  <div className="col-12 mb-3">
                    <div className="form-group">
                      <label htmlFor="confirm_password">Confirm Password</label>
                      <input type="password" id="confirm_password" onChange={(e)=>setConfirmPassword(e.target.value)} className={`form-control ${!! errors.confirm_password && "border-danger"}`} name="confirm_password" placeholder="********" required="required" />
                      <span className='text-danger'>{errors.confirm_password}</span>
                    </div>
                  </div>
                  <div className="col-12">
                      <div className="form-group">
                          <button type="button" onClick={changePassword} className="btn btn-outline-primary">Change Password</button>
                      </div>
                  </div>
                </div>
              </form>
            </div>
            <div className="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div className="card">
                <div className="card-body">
                  <form method="POST">
                    <div className="row">
                      <div className="col-12 mb-3">
                        <div className="form-group">
                          <label htmlFor="delete_password">Password</label>
                          <input type="password" id="delete_password" onChange={(e)=>setDeletePassword(e.target.value)} className={`form-control ${!! errors.delete_password && "border-danger"}`} name="delete_password" placeholder="********" required="required"  />
                          <span className='text-danger'>{errors.delete_password}</span>
                        </div>
                      </div>
                      <div className="col-12">
                        <div className="form-group">
                          <button type="button" onClick={deleteAccount} className="btn btn-outline-danger">Delete</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
        <ToastContainer />
    </div>
  </>
  )
}

