import {Link} from "react-router-dom";
const Navbar = () => {
  return (
    <nav>
      <div><Link to="/">Accueil</Link></div>
      <div><Link to="/articles">Articles</Link></div>
    </nav>
  );
}

export default Navbar;