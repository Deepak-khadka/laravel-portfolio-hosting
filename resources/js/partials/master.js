import React from "react";
import ReactDOM from "react-dom";
import Navbar from "./Navbar";
import Sidebar from "./Sidebar";
import {
    BrowserRouter,
} from "react-router-dom";


function Master() {
    return (
        <>
            <BrowserRouter>

                <div className="container">

                    <Navbar/>

                    <Sidebar/>

                </div>

            </BrowserRouter>
        </>
    )
}

export default Master;

ReactDOM.render(<Master/>, document.getElementById('master-panel'));