import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import { createBrowserRouter, createRoutesFromElements, Route, RouterProvider, useParams } from 'react-router-dom';
import Articles from './components/Articles';
import Article from './components/Article';
import Home from './components/Home';
import { loader as articlesLoader } from './loaders/articles';
import {
  actionAdd as addArticle
} from "./actions/articles";

const root = ReactDOM.createRoot(
  document.getElementById('root') as HTMLElement
);
function UniqueArticle() {
  // Get the userId param from the URL.
  let { articleId } = useParams();
  return (
    <h1>Article unique {articleId}</h1>
  )
}

const router = createBrowserRouter(
  createRoutesFromElements(
    <>
      <Route path="/" element={<App />} >
        <Route path="" element={<Home />} />
        <Route path="articles/:articleId" element={<UniqueArticle />} />
        <Route path="articles" element={<Articles />} loader={articlesLoader} >
          
        </Route>
        <Route path="*" element={<Home />} />
      </Route>
      <Route path="/add/article" action={addArticle} />

    </>
  )
)
root.render(
  <React.StrictMode>
    <RouterProvider router={router} />
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
