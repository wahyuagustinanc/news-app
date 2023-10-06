import React from 'react';
import { render } from '@testing-library/react';
import ArticleDetail from './ArticleDetail';
import { MemoryRouter, Route } from 'react-router-dom';

test('renders article detail', () => {
  const { getByText } = render(
    <MemoryRouter initialEntries={['/article/1']}>
      <Route path="/article/:id" element={ArticleDetail} />
    </MemoryRouter>
  );
  const titleElement = getByText(/Article Detail/i);
  expect(titleElement).toBeInTheDocument();
});
