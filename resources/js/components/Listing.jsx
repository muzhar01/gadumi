import React from 'react'
import HeaderListing from './HeaderListing'
import ListingSidebar from './ListingSidebar'

export default function Listing() {
  return (
    <>
      <HeaderListing/>
      <div className="container">
        <div className="container-fluid mt-5">
          <div className="row">
            <ListingSidebar/>
            <div className="col-lg-8">
              <div className="overflow-auto">
                <ul className="list-group">
                  <li className="list-group-item course-listing">
                    <div className="row border-bottom pb-2">
                      <div className="col-9 course-list">
                        <div className="row">
                          <div className="col-4 col-md-2 col-lg-2">
                            
                            <img src="../images/profile1.png" alt="" srcset=""/>
                          </div>
                          <div className="col-6 col-md-9 col-lg-9 ms-4">
                            
                            <a href="#" className="lesson-heading">1. Hello!</a>
                            <span className="d-block text-muted">lesson time: 7 min</span><br/>
                          </div>
                        </div>
                        <p>Greetings in English</p>
                      </div>
                      <div className="col-3 d-block check-image">
                        <img src="../images/check.svg" alt=""/>
                      </div>
                    </div>
                  </li>
                  <li className="list-group-item course-listing">
                    <div className="row border-bottom pb-2">
                      <div className="col-9 course-list">
                        <div className="row">
                          <div className="col-4 col-md-2 col-lg-2">
                            
                            <img src="../images/profile2.png" alt="" srcset=""/>
                          </div>
                          <div className="col-6 col-md-9 col-lg-9 ms-4">
                            
                            <a href="#" className="lesson-heading">2. How are you?</a>
                            <span className="d-block text-muted">lesson time: 7 min</span><br/>
                          </div>
                        </div>
                        <p>Questions about well-being</p>
                      </div>
                      <div className="col-3 d-block check-image">
                        <img src="../images/check.svg" alt=""/>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}
