import React from 'react'

export default function Footer({className = ''}) {
  return (
    <>
      <footer className={"contact-footer " + className}>
        <div className="container-fluid">
          <div className="d-flex">
          <ul className='list-group list-group-horizontal'>
            <li className='list-group-item'>Gadumi</li>
            <li className='list-group-item'>Regulamin</li>
            <li className='list-group-item'>Polityka prywatności</li>
            <li className='list-group-item'>Kontakt</li>
          </ul>
          <span>Created with ❤️ by language lovers</span>
          </div>
        </div>
      </footer>
    </>
  )
}
