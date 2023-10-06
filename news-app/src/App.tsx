import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import ArticleList from "./components/ArticleList";
import ArticleDetail from "./components/ArticleDetail";

const App: React.FC = () => {
  return (
    <Router>
      <Routes>
        "Hot News"
        <Route path="/" element={<ArticleList />} />
        <Route path="/article/:articleId" element={<ArticleDetail/>} />
      </Routes>
    </Router>
  );
};

export default App;
