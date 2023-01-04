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
        <ul className='contact-list-item pl-0 pb-1'>
          <li>
            Have additional questions?
          </li>
          <li>
            Want to report a bug or a problem?
          </li>
          <li>
            Or maybe you would like to establish cooperation with us?
          </li>
        </ul>
        <div className='contact-footer-section'>
          <span>Send us a message at:</span>
          <span className='mail'>biuro@gadumi.pl</span>
          <span>We will respond to your message within 48 hours</span>
        </div>
      </div>
      <Footer className='contactFooter'/>
    </>
  )
}
