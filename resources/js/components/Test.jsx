import Header from "./Header";
import ImageContent from "./ImageContent";
import Logo from "./Logo";

function Test() {
    return (
        <>
            <Header>
                <Logo />
            </Header>
            <div className="container p-5">
                <div className="d-flex justify-content-around flex-wrap">
                    <ImageContent className="m-4"
                        src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTekNwXbDdaa2JEDqZMdmAEDKtEjHGbmqumIw&usqp=CAU'
                        width="400px" height="200px">
                            Whats in the image?
                    </ImageContent>
                </div>
            </div>
        </>
    )
}

export default Test;