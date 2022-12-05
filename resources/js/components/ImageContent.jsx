
function ImageContent({children, src, className, style, width, height}) {
    if (!className) className = '';
    className += (children !== undefined? ' has-text': '');

    return (
        <div className={'image-content ' + className} style={{...style, width: width}}>
            <div className="image d-flex justify-content-center align-items-center" style={{height: height}}>
                <img src={src} alt="" />
            </div>
            { children !== undefined &&
                <div className="text">
                    {children}
                </div>
            }
        </div>
    )
}

export default ImageContent;