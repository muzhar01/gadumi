import React from 'react'
import Footer from './Footer'
import Header from './Header'
import Logo from './Logo'

export default function Contact() {
  return (
    <>
      <Header>
        <Logo />
      </Header>
      <div className="container pt-4">
        <h4 className='heading'>Contact</h4>
            <p style={{ fontSize:"20.5px" }}>Have additional questions?</p>
            <p style={{ fontSize:"20.5px" }}> Want to report a bug or a problem?</p>
            <p style={{ fontSize:"20.5px" }}>  Or maybe you would like to establish cooperation with us?</p>
        <div className='contact-footer-section'>
          <span style={{ fontSize:"22px" }}>Send us a message at:</span>
          <span className='mail' style={{ fontWeight:500 }}>biuro@gadumi.pl</span>
          <span>We will respond to your message within 48 hours</span>
        </div>
      </div>
      <Footer className='contactFooter'/>
    </>
  )
}
