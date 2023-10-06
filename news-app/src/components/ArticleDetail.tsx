import React from "react";
import { useParams } from "react-router-dom";

const ArticleDetail: React.FC = () => {
  const { articleId } = useParams<{ articleId: string }>();

  return <div>Article Detail for ID: {articleId}</div>;
};

export default ArticleDetail;
