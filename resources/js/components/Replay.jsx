import React from 'react'
import HeaderListing from './HeaderListing'
import ListingSidebar from './ListingSidebar'
import MobileBottomSidebar from './MobileBottomSidebar'

export default function Replay() {
  return (
    <>
      <HeaderListing/>
      <div className="container">
        <div className="container-fluid mt-5">
          <div className="row">
            <ListingSidebar/>
            <div className="col-lg-8">
              <div className="overflow-auto h-100">
                <p className='text-center replay-heading'>W jaki sposób chcesz powtarzać?</p>
                <div className='justify-content-center align-content-center'>
                  <ul class="list-group list-group-horizontal justify-content-center align-content-center">
                    <li class="list-group-item">
                      <img src="/images/replay/reply_image1.png" className='replay-image' />
                      <span className='replay-img-text text-center'>Fiszki</span>
                    </li>
                    <li class="list-group-item">
                      <img src="/images/replay/reply_image2.png" className='replay-image' />
                      <span className='replay-img-text text-center'>Odkryj</span>
                    </li>
                  </ul>
                </div>
                <div className='mt-5 replay-listing-heading'>
                  <p className=''>ilość słówek: 17</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div className="d-flex">
                        <div className="">
                          <p>hello</p>
                          <span>cześć</span>
                        </div>
                        <div className="replay-listing-img">
                          <img src="/images/replay/bin.svg" alt="" />
                          <img src="/images/replay/speaker.svg" alt="" />
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div className="d-flex">
                        <div className="">
                          <p>hello</p>
                          <span>cześć</span>
                        </div>
                        <div className="replay-listing-img">
                          <img src="/images/replay/bin.svg" alt="" />
                          <img src="/images/replay/speaker.svg" alt="" />
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div className="d-flex">
                        <div className="">
                          <p>hello</p>
                          <span>cześć</span>
                        </div>
                        <div className="replay-listing-img">
                          <img src="/images/replay/bin.svg" alt="" />
                          <img src="/images/replay/speaker.svg" alt="" />
                        </div>
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
