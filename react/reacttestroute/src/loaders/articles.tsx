import Data from "../services/Data";

export const loader = async () => {
  const hd = Data.getInstance();
  return hd.loadArticles();
}