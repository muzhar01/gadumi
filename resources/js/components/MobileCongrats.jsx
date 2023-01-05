import React from 'react'
import { Link } from 'react-router-dom';
import Logo from './Logo';

export default function MobileCongrats() {
    document.getElementsByTagName("body")[0].style.background = "#1076fe";

  return (
    <>
        <div className="container" style={{  marginTop: "8rem" }}>
            <div className="container-fluid">
                <div className="row justify-content-center congrats-main">
                    <div className="col-lg-6">
                        <div style={{borderRadius: '15px', maxWidth: '100%'}} className="mb-1 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
                            <img style={{height: '100px', borderRadius: '26%'}} src="/images/congratulation.svg" />
                        </div>
                        <h4 className="text-center congrats-title text-white" style={{ fontSize:"38px", fontWeight:700 }}>Great!</h4>
                        <div className="mx-auto">
                            <h2 className="text-center text-white congrats-h2">Lesson 1 has been completed</h2>
                            <p className="congrats-desc text-white">Remember that only through regular study can you quickly become fluent in speaking English. Sample text Remember that only through regular study can you quickly become fluent in speaking English. Sample text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div className="w-100 position-fixed bottom-0 is-mbl-link-button">
            <div className="text-center p-4">
                <Link to='/portal' className="btn btn-primary congrats-btn">Continue</Link>
            </div>
        </div>
        </>
)
}
