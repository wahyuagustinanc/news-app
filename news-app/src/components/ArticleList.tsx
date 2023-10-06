import React, { useState, useEffect } from "react";
import axios from "axios";
import { List } from "antd";

interface Article {
  title: string;
  description: string;
  url: string;
  author: string;
  urlToImage: string;
  publishedAt: string;
}

const ArticleList: React.FC = () => {
  const [articles, setArticles] = useState<Article[]>([]);

  useEffect(() => {
    // Fetch data from NewsAPI and update the articles state
    const fetchArticles = async () => {
      try {
        const response = await axios.get(
          "https://newsapi.org/v2/top-headlines?country=us&category=sport&apiKey=8ee785a1ff4c45d99cf4ecb973ac0679"
        );
        setArticles(response.data.articles);
      } catch (error) {
        console.error("Error fetching articles:", error);
      }
    };

    fetchArticles();
  }, []);

  return (
    <List
      itemLayout="vertical"
      size="large"
      pagination={{
        onChange: (page) => {
          console.log(page);
        },
        pageSize: 10,
      }}
      dataSource={articles}

      renderItem={(item) => (
        <List.Item
          key={item.title}
          extra={
            <img 
            width={272}
              src={item.urlToImage}
            />
          }
        >
          <List.Item.Meta
            title={<a href={item.url} target="_blank" rel="noopener noreferrer">
            {item.title}</a>}
            description={item.author}
          />
          {item.description}
        </List.Item>
      )}
    />
  );
};

export default ArticleList;
