
function BottomBar({children}) {
    return (
        <div className="w-100 position-fixed bottom-0" style={{boxShadow: '0px -4px 13px rgb(240 240 240)'}}>
            {children}
        </div>
    )
}

export default BottomBar;