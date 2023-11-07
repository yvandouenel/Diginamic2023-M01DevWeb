
import './App.css';
import { Outlet, Link } from "react-router-dom";
import Navbar from './components/Navbar';
function App() {
  return (
    <div className="App">
      <header>
        <h1>learn react</h1>
        
      </header>
      <main>
        <Outlet />
      </main>
    </div>
  );
}

export default App;
