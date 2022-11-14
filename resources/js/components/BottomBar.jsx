import { bottom } from "@popperjs/core";
import { useEffect, useRef, useState } from "react";

function BottomBar({children}) {
    const bottomBar = useRef();
    const [bottomBarHeight, setBottomBarHeight] = useState(bottomBar.current.clientHeight);

    useEffect(() => {
        // Get Bottom Bar Height
        document.body.style.paddingBottom = bottomBar.current.clientHeight + 'px';
    });

    return (
        <div ref={bottomBar} className="w-100 position-fixed bottom-0 bg-white" style={{boxShadow: '0px -4px 13px rgb(240 240 240)'}}>
            {children}
        </div>
    )
}

export default BottomBar;