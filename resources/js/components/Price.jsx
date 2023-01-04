import React from "react";
import Footer from "./Footer";
import Header from "./Header";
import Logo from "./Logo";

export default function Price() {
    return (
        <>
            <Header>
                <Logo />
            </Header>
            <div className="container pt-4">
                <h4 className="price-heading text-center">
                    Access the full course capabilities
                </h4>
                <div className="row price-list-item">
                    <div className="col-lg-6 d-flex">
                        <div>
                          <img src="/images/tick-mark.svg" alt="" />
                        </div>
                        <div className="price-list-text pt-3">Dostęp do wszystkich opracowanych lekcji</div>
                    </div>
                    <div className="col-lg-6 d-flex">
                        <div>
                          <img src="/images/tick-mark.svg" alt="" />
                        </div>
                        <div className="price-list-text pt-3">Lekcje gramatyki</div>
                    </div>
                    <div className="col-lg-6 d-flex">
                        <div>
                          <img src="/images/tick-mark.svg" alt="" />
                        </div>
                        <div className="price-list-text pt-3">
                          Ponad 1000 nowych słów tylko na poziomie "Początkujący A1"
                        </div>
                    </div>
                    <div className="col-lg-6 d-flex">
                        <div>
                            <img src="/images/tick-mark.svg" alt="" />
                        </div>
                        <div className="price-list-text pt-3">
                          Nowe lekcje każdego tygodnia aż do ukończenia poziomu "Zaawansowany C1"
                        </div>
                    </div>
                </div>
                <div className="price-footer mt-4">
                    <p className="first-span">
                        Now Premium Account at a reduced price!
                    </p>
                    <span className="second-span">
                        Until the Gadumi team completes the "Advanced C1" level,
                        access to the Premium Account at one low price!
                    </span>
                </div>
                <div className="price-box justify-content-center mt-5">
                    <div className="w-100">
                        <div className="row">
                            <div className="col-6">
                                <h4>24 miesiące</h4>
                                <p>
                                    tylko <strong>x zł/ mies</strong>
                                </p>
                            </div>
                            <div className="col-3 m-auto">
                                <a href="" className="btn price-btn">
                                    Wybieram
                                </a>
                            </div>
                            <p>x zł za cały okres dostępu do Konta Premium</p>
                        </div>
                    </div>
                </div>
            </div>
            <Footer className="priceFooter" />
        </>
    );
}
