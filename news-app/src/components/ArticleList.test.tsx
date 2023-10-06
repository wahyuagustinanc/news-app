import React from 'react';
import { render } from '@testing-library/react';
import ArticleList from './ArticleList';

test('renders article list', () => {
  const { getByText } = render(<ArticleList />);
  const titleElement = getByText(/Article List/i);
  expect(titleElement).toBeInTheDocument();
});
