import React, { Component } from "react";
import API from "../axios/Api";
import DataTable from "./DataTable";

export class ListStudents extends Component {
  state = {
    students: [],
  };

  componentDidMount = async () => {
    await API.get("/viewdata.php").then((response) => {
      this.setState({ students: response.data.students });
      console.log(response.data.students);

      // console.log(this.state.students);
    });
  };

  render() {
    const renderData = this.state.students.map((students) => {
      return (
        <DataTable
          students={students}
          key={students.id}
          refresh={this.componentDidMount}
        />
      );
    });

    return (
      <div className="container" style={{ marginTop: "20px" }}>
        <div className="row">
          <div className="col-lg-12">
            <table className="table table-bordered">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Class</th>
                  <th>Phone</th>
                  <th>Editing</th>
                </tr>
              </thead>
              <tbody>{renderData}</tbody>
            </table>
          </div>
        </div>
      </div>
    );
  }
}

export default ListStudents;
