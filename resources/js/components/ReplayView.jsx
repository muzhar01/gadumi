import React from 'react'
import { Link } from 'react-router-dom'
import Header from './Header'
import ListingSidebarWithoutFilter from './ListingSidebarWithoutFilter'
import Logo from './Logo'
import MobileBottomSidebar from './MobileBottomSidebar'
import MobileMenu from './MobileMenu'

export default function ReplayView() {
  return (
    <>
      <Header>
        <Logo />
        <MobileMenu />
      </Header>
      <div className="container">
        <div className="container-fluid mt-5">
          <div className="row justify-content-center">
            <div className="col-lg-8">
            <img src="/images/reset.svg" alt="" style={{height: '36px',background:'rgb(0, 131, 255)'}}/>
              <div className="overflow-auto h-100">
                <div className='row'>
                  <div className="col-10 align-content-center">
                    <p className='text-center replay-heading'>W jaki sposób chcesz powtarzać?</p>
                  </div>
                  <div className="col-2 align-content-center">
                    <Link to="/portal/replay">
                      <img src="/images/cross.svg" alt="" style={{height: '36px'}}/>
                    </Link>
                  </div>
                </div>
                <div className='mt-5'>
                  <ul>
                      <li style={{borderBottom: '1px solid rgb(230, 230, 230)'}} className="d-flex gap-4 mb-2 pb-2 mb-3">
                          <div className="flex-grow-1">
                              <p className="m-0">cześć</p>
                          </div>
                          
                          <div className="d-flex align-items-center">
                              <span style={{width: '32px', height: '32px'}}>
                                  <img style={{width: '100%'}} src="/images/bulb.svg" />
                              </span>
                          </div>
                      </li>
                      <li style={{borderBottom: '1px solid rgb(230, 230, 230)'}} className="d-flex gap-4 mb-2 pb-2  mb-3">
                          <div className="flex-grow-1">
                              <p className="m-0">wspaniały</p>
                          </div>
                          
                          <div className="d-flex align-items-center">
                              <span style={{width: '32px', height: '32px'}}>
                                  <img style={{width: '100%'}} src="/images/bulb.svg" />
                              </span>
                          </div>
                      </li>
                      <li style={{borderBottom: '1px solid rgb(230, 230, 230)'}} className="d-flex gap-4 mb-2 pb-2  mb-3">
                          <div className="flex-grow-1">
                              <p className="m-0">ryba</p>
                          </div>
                          
                          <div className="d-flex align-items-center">
                              <span style={{width: '32px', height: '32px'}}>
                                  <img style={{width: '100%'}} src="/images/bulb.svg" />
                              </span>
                          </div>
                      </li>
                      <li style={{borderBottom: '1px solid rgb(230, 230, 230)'}} className="d-flex gap-4 mb-2 pb-2  mb-3">
                          <div className="flex-grow-1">
                              <p className="m-0">dom</p>
                          </div>
                          
                          <div className="d-flex align-items-center">
                              <span style={{width: '32px', height: '32px'}}>
                                  <img style={{width: '100%'}} src="/images/bulb.svg" />
                              </span>
                          </div>
                      </li>
                      <li style={{borderBottom: '1px solid rgb(230, 230, 230)'}} className="d-flex gap-4 mb-2 pb-2 mb-3">
                          <div className="flex-grow-1">
                              <p className="m-0">cześć</p>
                          </div>
                          
                          <div className="d-flex align-items-center">
                              <span style={{width: '32px', height: '32px'}}>
                                  <img style={{width: '100%'}} src="/images/bulb.svg" />
                              </span>
                          </div>
                      </li>
                      <li style={{borderBottom: '1px solid rgb(230, 230, 230)'}} className="d-flex gap-4 mb-2 pb-2 mb-3">
                          <div className="flex-grow-1">
                              <p className="m-0">wspaniały</p>
                          </div>
                          
                          <div className="d-flex align-items-center">
                              <span style={{width: '32px', height: '32px'}}>
                                  <img style={{width: '100%'}} src="/images/bulb.svg" />
                              </span>
                          </div>
                      </li>
                      <li style={{borderBottom: '1px solid rgb(230, 230, 230)'}} className="d-flex gap-4 mb-2 pb-2 mb-3">
                          <div className="flex-grow-1">
                              <p className="m-0">ryba</p>
                          </div>
                          
                          <div className="d-flex align-items-center">
                              <span style={{width: '32px', height: '32px'}}>
                                  <img style={{width: '100%'}} src="/images/bulb.svg" />
                              </span>
                          </div>
                      </li>
                      <li style={{borderBottom: '1px solid rgb(230, 230, 230)'}} className="d-flex gap-4 mb-2 pb-2 mb-3">
                          <div className="flex-grow-1">
                              <p className="m-0">dom</p>
                          </div>
                          
                          <div className="d-flex align-items-center">
                              <span style={{width: '32px', height: '32px'}}>
                                  <img style={{width: '100%'}} src="/images/bulb.svg" />
                              </span>
                          </div>
                      </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <MobileBottomSidebar/>
    </>
  )
}
