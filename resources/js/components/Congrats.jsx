import React from 'react'
import { Link } from 'react-router-dom';
import Logo from './Logo';
import MobileCongrats from './MobileCongrats';

export default function Congrats() {
    let is_mbl = false;
    if(window.matchMedia("(max-width: 767px)").matches){
        is_mbl = true;
    }

  return (
    
    <>
    {!is_mbl?
    <>
        <header className="position-fixed w-100 top-0 bg-white" style={{zIndex: 100}}>
            <div className="container">
            <nav className="navbar navbar-expand-lg">
                <div className="container-fluid">
                <Logo />
                </div>
            </nav>
            </div>
        </header>
        <div className="container" style={{  marginTop: "8rem" }}>
            <div className="container-fluid">
                <div className="row justify-content-center congrats-main">
                    <div className="col-lg-6">
                        <div style={{borderRadius: '15px', maxWidth: '100%'}} className="mb-1 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
                            <img style={{height: '100px', borderRadius: '26%'}} src="/images/congratulation.svg" />
                        </div>
                        <h4 className="text-center congrats-title" style={{ fontSize:"38px", fontWeight:700 }}>Great!</h4>
                        <div className="mx-auto">
                            <h2 className="text-center congrats-h2">Lesson 1 has been completed</h2>
                            <p className="congrats-desc">Remember that only through regular study can you quickly become fluent in speaking English. Sample text Remember that only through regular study can you quickly become fluent in speaking English. Sample text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div className="w-100 position-fixed bottom-0 bg-white">
            <div className="text-center p-4">
                <Link to='/portal' className="btn btn-primary congrats-btn">Continue</Link>
            </div>
        </div>
        </>
            :
            <>
            <MobileCongrats/>
            </>
            }
    </>
)
}
