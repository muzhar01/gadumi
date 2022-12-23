import React from 'react'
import Footer from './Footer'
import Header from './Header'
import Logo from './Logo'

export default function Price() {
  return (
    <>
      <Header className="bordered">
        <Logo />
      </Header>
      <div className="container price-container">
        <h4 className='price-heading text-center'>Uzyskaj dostęp do pełnych możliwości kursu</h4>
        <div className="row price-list-item">
          <div className="col-lg-5">
            <img src="/images/tick-mark.svg" alt="" />
            <span>Dostęp do wszystkich opracowanych lekcji</span>
          </div>
          <div className="col-lg-5">
          <img src="/images/tick-mark.svg" alt="" />
            <span>Lekcje gramatyki</span>
          </div>
          <div className="col-lg-5">
            <img src="/images/tick-mark.svg" alt="" /> 
            <span>Ponad 1000 nowych słów tylko na poziomie "Początkujący A1"</span>
          </div>
          <div className="col-lg-5">
            <img src="/images/tick-mark.svg" alt="" /> 
            <span>Nowe lekcje każdego tygodnia aż do ukończenia poziomu "Zaawansowany C1"</span>
          </div>
        </div>
        <div className='price-footer mt-4'>
          <p className='first-span'>Teraz Konto Premium w obniżonej cenie!</p>
          <span className='second-span'>Do momentu ukończenia przez zespół Gadumi poziomu "Zaawansowany C1" dostęp do Konta Premium w jednej, niskiej cenie!</span>
        </div>
        <div className="price-box justify-content-center mt-5">
          <div className="w-100">
            <div className="row">
              <div className="col-6">
                <h4>24 miesiące</h4>
                <p>tylko <strong>x zł/ mies</strong></p>
              </div>
              <div className="col-3 m-auto">
                <a href="" className='btn price-btn'>Wybieram</a>
              </div>
              <p>x zł za cały okres dostępu do Konta Premium</p>
            </div>
          </div>
        </div>
      </div>
      <Footer className="footerPrice"/>
    </>
  )
}
