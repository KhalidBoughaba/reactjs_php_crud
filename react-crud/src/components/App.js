import React from "react";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Header from "./Header";
import ListStudents from "./ListStudents";

function App() {
  return (
    <BrowserRouter>
      <Header />
      <Routes>
        <Route path="/" element={<ListStudents />} />
      </Routes>
    </BrowserRouter>
  );
}
export default App;
