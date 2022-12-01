import { useEffect, useRef, useState } from "react";

function BottomBar({children}) {
    const bottomBar = useRef();
    const [bottomBarHeight, setBottomBarHeight] = useState(bottomBar.current? bottomBar.current.clientHeight: 0);;
    let resizeObserver;

    useEffect(() => {
        if (!bottomBar.current) return;

        if (resizeObserver === undefined) {
            resizeObserver = new ResizeObserver(entries => setBottomBarHeight(bottomBar.current.clientHeight));
            // start observing a DOM node
            resizeObserver.observe(bottomBar.current);
        }

        // Get Bottom Bar Height
        const root = document.querySelector('#root');
        root.style.paddingBottom = (bottomBarHeight === 0? bottomBarHeight: bottomBar.current.clientHeight) + 'px';
    });

    return (
        <div ref={bottomBar} className="w-100 position-fixed bottom-0 bg-white" style={{boxShadow: '0px -4px 13px rgb(240 240 240)'}}>
            {children}
        </div>
    )
}

export default BottomBar;