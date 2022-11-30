import React from 'react'
import BottomBar from "./BottomBar";
import Header from "./Header";
import Logo from "./Logo";
import MobileMenu from "./MobileMenu";
export default function Congrats() {
  return (
    <>
        <Header>
            <Logo />
            <MobileMenu />
        </Header>    
        <div className="container">
            <div className="container-fluid mt-5">
                <div style={{width: '366px', borderRadius: '15px'}} className="mb-1 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
                    <img style={{height: '100px', borderRadius: '50%'}} src="/images/congratulation.svg" />
                </div>
                <h4 className="text-center congrats-title">Great!</h4>
                <div style={{width: '450px'}} className="mx-auto">
                    <h2 className="text-center mb-1 congrats-desc">Lesson 1 has been completed</h2>
                    <p>Remember that only through regular study can you quickly become fluent in speaking English. Sample text Remember that only through regular study can you quickly become fluent in speaking English. Sample text</p>
                </div>
            </div>
        </div>
        <BottomBar>
            <div className="text-center p-4">
                <button className="btn btn-primary" onClick={(event) => event.target.style.height = (event.target.clientHeight + 100) + 'px'}>Next</button>
            </div>
        </BottomBar>
    </>
)
}
