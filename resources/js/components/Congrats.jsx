import React from 'react'
import BottomBar from "./BottomBar";
import Header from "./Header";
import Logo from "./Logo";
import MobileMenu from "./MobileMenu";
export default function Congrats() {
  return (
    <> 
        <div className="container-fluid">
            <div style={{width: '366px', borderRadius: '15px', maxWidth: '100%'}} className="mb-1 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
                <img style={{height: '100px', borderRadius: '50%'}} src="/images/congratulation.svg" />
            </div>
            <h4 className="text-center congrats-title">Great!</h4>
            <div style={{width: '450px', maxWidth: '100%'}} className="mx-auto">
                <h2 className="text-center mb-1 congrats-desc">Lesson 1 has been completed</h2>
                <p>Remember that only through regular study can you quickly become fluent in speaking English. Sample text Remember that only through regular study can you quickly become fluent in speaking English. Sample text</p>
            </div>
        </div>
    </>
)
}
