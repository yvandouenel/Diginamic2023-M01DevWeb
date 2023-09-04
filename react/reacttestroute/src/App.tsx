
import './App.css';
import {Outlet, Link} from "react-router-dom";
function App() {
  return (
    <div className="App">
      <header>
       <nav>
        <div><Link to="/">Accueil</Link></div>
        <div><Link to="/articles">Articles</Link></div>
       </nav>
      </header>
      <main>
        <Outlet />
      </main>
    </div>
  );
}

export default App;
