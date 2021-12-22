import React from "react";
import { Link } from "react-router-dom";
import API from "../axios/Api";

const DataTable = (students, refresh) => {
  return (
    <tr>
      <td>{students.f_name}</td>
      <td>{students.class}</td>
      <td>{students.phone}</td>
      <td>
        {/* <Link to={"/edit/" + students.id}>
          <i className="fa fa-pencil-square-o"></i>
        </Link>
        ||
        <Link>
          <i className="fa fa-trash"></i>
        </Link> */}
      </td>
    </tr>
  );
};
export default DataTable;
