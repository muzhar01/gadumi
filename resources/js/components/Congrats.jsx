import React from 'react'
import { Link } from 'react-router-dom';
import BottomBar from "./BottomBar";
import Header from "./Header";
import Logo from "./Logo";
import MobileMenu from "./MobileMenu";
export default function Congrats() {
  return (
    <>
        {/* <Header>
            <Logo />
            <MobileMenu />
        </Header>     */}
        <div className="container">
            <div className="container-fluid mt-5">
                <div className="row justify-content-center">
                    <div className="col-lg-6">
                        <div style={{borderRadius: '15px', maxWidth: '100%'}} className="mb-1 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
                            <img style={{height: '100px', borderRadius: '50%'}} src="/images/congratulation.svg" />
                        </div>
                        <h4 className="text-center congrats-title">Great!</h4>
                        <div className="mx-auto">
                            <h2 className="text-center mb-1 congrats-desc">Lesson 1 has been completed</h2>
                            <p>Remember that only through regular study can you quickly become fluent in speaking English. Sample text Remember that only through regular study can you quickly become fluent in speaking English. Sample text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <BottomBar>
            <div className="text-center p-4">
            <Link to='/portal' className="btn btn-primary congrats-btn">Continue</Link>
            </div>
        </BottomBar>
    </>
)
}
