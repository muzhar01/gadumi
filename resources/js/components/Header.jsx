import { useEffect, useRef, useState } from "react";

function Header({children, className = ''}) {
    const header = useRef();
    const [headerHeight, setHeaderHeight] = useState(header.current? header.current.clientHeight: 0);;
    let resizeObserver;

    useEffect(() => {
        if (resizeObserver === undefined) {
            resizeObserver = new ResizeObserver(entries => {
                if (header.current === null) return;
                setHeaderHeight(header.current.clientHeight)
            });
            // start observing a DOM node
            resizeObserver.observe(header.current);
        }

        // Get Top Bar Height
        const root = document.querySelector('#root');
        root.style.marginTop = (headerHeight === 0? headerHeight: header.current.clientHeight) + 'px';
    });
    
    return (
        <header ref={header} className={"header position-fixed w-100 top-0 bg-white " + className} style={{zIndex: 100}}>
            <div className="container">
                <nav className="navbar navbar-expand-lg">
                    {children}
                </nav>
            </div>
            {/* <div className="border-bottom mt-2"></div> */}
        </header>
    )
}

export default Header;