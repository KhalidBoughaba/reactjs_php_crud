import React from "react";
import { Link } from "react-router-dom";

const Header = () => {
  return (
    <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
      <p className="navbar-brand">All Students</p>

      <ul className="navbar-nav">
        <li className="nav-item">
            <Link to="/" className="nav-link">Home</Link>
        </li>
     
      </ul>
    </nav>
  );
};
export default Header;