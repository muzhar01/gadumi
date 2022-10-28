import React from 'react'

export default function Protected(props) {
  let Component=props.Component;
  return (
    <div>
      <Component/>
    </div>
  )
}
