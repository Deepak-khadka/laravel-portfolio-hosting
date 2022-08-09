import React from "react";
import Profile from "../../images/deepak-image.jpg";
import {Route, Routes} from "react-router-dom";
import Aboutus from "../page/Aboutus";
import Main from "../page/Main";
import Skills from "../page/Skills";
import Service from "../page/Service";
import Experience from "../page/Experience";

function Sidebar() {
    return (
        <section>

            <div className="container">
                <div className="row">
                    <div className="col-lg-4 d-none d-lg-block ">
                        <div className="img">
                            <img src={Profile} alt="me image"
                                 className="img-fluid profile_img"/>
                        </div>
                        <div className="box-color m-0 p-0 ">
                            <div className="row gen center">
                                <p className="fs-2 fw-bold mb-4 text-center text-white mt-4">General
                                    Information</p>
                                <div className="row gen-info-content mb-3">
                                    <div className="col-2 ">
                                        <div className="text-end">
                                            <img
                                                src="https://preview.colorlib.com/theme/vcard2/images/xicon_1.png.pagespeed.ic.W3Kdj3mRjR.webp"
                                                alt="" className=""/>
                                        </div>
                                    </div>
                                    <div className="col-10">
                                        <div className="ms-xl-3">
                                            <div className="info-box">
                                                <p className="d-flex text-center mb-0 title">Name:<span
                                                    className="ms-2 value">Deepak Khadka
                                                        </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="row gen-info-content mb-3">
                                    <div className="col-2">
                                        <div className="text-end">
                                            <img
                                                src="https://preview.colorlib.com/theme/vcard2/images/icon_2.png.webp"
                                                alt=""
                                                className=""/>
                                        </div>
                                    </div>
                                    <div className="col-10">
                                        <div className="ms-xl-3">
                                            <div className="info-box">
                                                <p className="d-flex text-center title mb-0">Date of Birth:<span
                                                    className="ms-2 value">1998-11-30
                                                        </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="row gen-info-content mb-3">
                                    <div className="col-2">
                                        <div className="text-end">
                                            <img
                                                src="https://preview.colorlib.com/theme/vcard2/images/xicon_3.png.pagespeed.ic.7gX_3UP2Du.webp"
                                                alt="" className=""/>
                                        </div>
                                    </div>
                                    <div className="col-10">
                                        <div className="ms-xl-3">
                                            <div className="info-box">
                                                <p className="d-flex mx-auto title mb-0">Mail:<span
                                                    className="ms-2 value">
                                                            rozankhadka159@gmail.com
                                                        </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="row gen-info-content mb-3">
                                    <div className="col-2">
                                        <div className="text-end">
                                            <img
                                                src="https://preview.colorlib.com/theme/vcard2/images/xicon_4.png.pagespeed.ic.GehJAnOSHc.webp"
                                                alt="" className=""/>
                                        </div>
                                    </div>
                                    <div className="col-10">
                                        <div className="ms-xl-3">
                                            <div className="info-box">
                                                <p className="d-flex mx-auto title mb-0">Phone Number:<span
                                                    className="ms-2 fs-6 value">
                                                             9868284426
                                                        </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="row gen-info-content mb-3">
                                    <div className="col-2">
                                        <div className="text-end">
                                            <img
                                                src="https://preview.colorlib.com/theme/vcard2/images/xicon_5.png.pagespeed.ic.A5Xrzq2S8n.webp"
                                                alt="" className=""/>
                                        </div>
                                    </div>
                                    <div className="col-10">
                                        <div className="ms-xl-3">
                                            <div className="info-box">
                                                <p className="d-flex mx-auto title mb-0">Website:<a href="#"
                                                                                                    className=" text-decoration-none  ms-2 fs-6 value">
                                                    deepak-khadka.com.np
                                                </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div
                                        className="d-flex justify-content-end align-items-center text-secondary px-4 my-4">
                                        <a href="" className="d-inline-block ms-4 social-links">
                                            <i className="fa-brands fa-facebook-square fa-2x"></i>
                                        </a>
                                        <a href="" className="d-inline-block ms-4 social-links">
                                            <i className="fa-brands fa-telegram fa-2x"></i>
                                        </a>
                                        <a href="" className="d-inline-block ms-4 social-links">
                                            <i className="fa-brands fa-whatsapp-square fa-2x"></i>
                                        </a>
                                        <a href="" className="d-inline-block ms-4 social-links">
                                            <i className="fa-brands fa-linkedin fa-2x"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-8 col-md-12">
                        <Routes>
                            <Route path="/react/about-us" element={<Aboutus />} />
                            <Route path="/react/home" element={<Main />} />
                            <Route path="/react/skills" element={<Skills />} />
                            <Route path="/react/service" element={<Service />} />
                            <Route path="/react/experience" element={<Experience />} />
                        </Routes>
                    </div>

                </div>
            </div>

        </section>
    )
}

export default Sidebar;