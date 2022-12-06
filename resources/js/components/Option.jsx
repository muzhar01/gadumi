function Option({children, className}) {
    return (
        <div className={'option w-100 text-center p-3 ' + className}>
            {children}
        </div>
    )
}

export default Option;