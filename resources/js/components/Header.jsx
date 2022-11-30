function Header({children}) {
    return (
        <>
            <div className="container">
            <nav className="navbar navbar-expand-lg">
                <div className="container-fluid">
                {children}
                </div>
            </nav>
            </div>
            <div className="border-bottom mt-2"></div>
        </>
    )
}

export default Header;