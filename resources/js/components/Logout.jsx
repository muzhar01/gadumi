import React from 'react'

import {useNavigate  } from 'react-router-dom';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
export default function Logout() {
  localStorage.removeItem("token")
  toast.success("Logout Successfully");
  setTimeout(() => window.location.href = "/portal", 1000);
  const navigate =useNavigate();
  return (
    <div><ToastContainer /></div>
  )
}
