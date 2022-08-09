import React from "react";
import {Link} from "react-router-dom";

function Navbar() {

    return (
        <>
            <div className="py-2 py-sm-4 py-4">
                <div className="row">
                    <div className="col-sm-2">
                        <div className="logo">
                            <Link to="/react/home"
                               className="h3 fw-bolder d-none d-lg-inline fs-1 text-secondary-color text-decoration-none">Deepak Khadka</Link>
                            <div className="d-flex align-items-center justify-content-between d-lg-none">
                                <a href="" className="d-inline-block">
                                    <img src="" alt=""
                                         className="img-flid logo_sm_img" />
                                </a>
                                <button data-bs-toggle="offcanvas" href="#offcanvasExample"
                                        className="bg-transparent p-0 border-0">
                                    <div className="bar1"></div>
                                    <div className="bar2"></div>
                                    <div className="bar3"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div className="d-none d-lg-block col-lg-10">
                        <div className="d-flex align-items-center justify-content-between">
                            <ul className="nav ul-bg nav-pills justify-content-start" role="tablist">

                                <li className="nav-item border-end" role="presentation">
                                    <Link to='/react/about-us' className="nav-link" type="button" role="tab" aria-controls="pills-about" aria-selected="true">About Us</Link>
                                    {/*<a href=""*/}
                                    {/*   className="nav-link {{ request()->is('') ? 'active' : '' }}"*/}
                                    {/*   type="button" role="tab" aria-controls="pills-about" aria-selected="true">About*/}
                                    {/*    Me</a>*/}
                                </li>
                                <li className="nav-item border-end" role="presentation">
                                    <Link to="/react/skills"
                                       className="nav-link"
                                       type="button" role="tab"
                                       aria-controls="pills-skills" aria-selected="false">Skills</Link>
                                </li>
                                <li className="nav-item border-end" role="presentation">
                                    <Link to="/react/service"
                                       className="nav-link"
                                       type="button" role="tab"
                                       aria-controls="pills-Services" aria-selected="false">Services</Link>
                                </li>
                                <li className="nav-item border-end" role="presentation">
                                    <Link to="/react/experience"
                                       className="nav-link"
                                       type="button" role="tab"
                                       aria-controls="pills-experience" aria-selected="false">Experience</Link>
                                </li>
                                <li className="nav-item border-end" role="presentation">
                                    <a href=""
                                       className="nav-link {{ request()->is('pages/education') ? 'active' : '' }}"
                                       type="button" role="tab"
                                       aria-controls="pills-Education" aria-selected="false">Education</a>
                                </li>
                                <li className="nav-item border-end" role="presentation">
                                </li>
                                <li className="nav-item border-end" role="presentation">
                                    <a href=""
                                       className="nav-link {{ request()->is('pages/blogs') ? 'active' : '' }}"
                                       type="button" role="tab"
                                       aria-controls="pills-Testimonials" aria-selected="false">Blogs</a>
                                </li>
                                <li className="nav-item border-end" role="presentation">
                                    <a href=""
                                       className="nav-link {{ request()->is('/pages/contact') ? 'active' : '' }}"
                                       type="button" role="tab"
                                       aria-controls="pills-Contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div className="text-end">
                                <div className=" btn-group btn-hover-shadow">
                                    <button
                                        className="btn quote-button shadow-none text-decoration-none p-1 text-end m-0">
                                        DownLoad CV
                                    </button>
                                    <a href="" className="btn dark_color" download>
                                        <i className="fa-solid fa-download text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Navbar;