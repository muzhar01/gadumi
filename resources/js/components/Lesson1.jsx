import HeaderLogoOnly from "./HeaderLogoOnly";
import BottomBar from "./BottomBar";

function Lesson1() {
    return (
        <>
            <HeaderLogoOnly/>
            <div className="container">
                <div className="container-fluid mt-5">
                    <h4 className="text-center" style={{color: '#0b7cfe'}}>Odsłuchaj i powtórz za lektorem</h4>
                    <div style={{width: '366px', height: '221px', borderRadius: '15px'}} className="mb-3 d-flex align-items-center justify-content-center mx-auto overflow-hidden">
                        <img style={{minWidth: '100%', minHeight: '100%', borderRadius: '15px'}} src="https://media.istockphoto.com/id/1322277517/photo/wild-grass-in-the-mountains-at-sunset.jpg?s=612x612&w=0&k=20&c=6mItwwFFGqKNKEAzv0mv6TaxhLN3zSE43bWmFN--J5w=" />
                    </div>
                    <div style={{width: '366px'}} className="mx-auto">
                        <h2 className="text-center mb-1">hi, hello</h2>
                        <p className="text-center">cześć</p>
                        <div className="mb-4">
                            <span style={{width: '50px', height: '50px'}} className="d-block mx-auto">
                                <img style={{width: '100%'}} src="https://gadumi.pl/lib/glcqhy/glosniczek-maly-powtorki-l9zfjbve.svg" />
                            </span>
                        </div>
                        <p>Hi lub hello powiemy, kiedy będziemy chcieli się z kimś przywitać 🤝</p>
                    </div>
                </div>
            </div>
            <BottomBar>
                <div className="text-center p-4">
                    <button className="btn btn-primary" onClick={(event) => event.target.style.height = '100px'}>Next</button>
                </div>
            </BottomBar>
        </>
    )
}

export default Lesson1;