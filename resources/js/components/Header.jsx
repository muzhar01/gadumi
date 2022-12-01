import { useEffect, useRef, useState } from "react";

function Header({children}) {
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

        // Get Bottom Bar Height
        const root = document.querySelector('#root');
        root.style.marginTop = (headerHeight === 0? headerHeight: header.current.clientHeight) + 'px';
    });
    
    return (
        <header ref={header} className="position-fixed w-100 top-0 bg-white" style={{zIndex: 100}}>
            <div className="container">
            <nav className="navbar navbar-expand-lg">
                <div className="container-fluid">
                {children}
                </div>
            </nav>
            </div>
            <div className="border-bottom mt-2"></div>
        </header>
    )
}

export default Header;