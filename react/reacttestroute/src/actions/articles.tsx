import { ActionFunctionArgs } from "react-router-dom";
import ManageData from "../services/Data";
export const actionAdd = async ({ request }: ActionFunctionArgs) => {
  console.log(`Dans action de article`);
  const formData = await request.formData();
  const article_name = formData.get("article_name") as string;
  console.log(`article_name`, article_name);
  const mg = ManageData.getInstance();
  await mg.addArticle(article_name);
  return null;
};
export const actionValidate = async ({ request }: ActionFunctionArgs) => {
  console.log(`Dans actionValidate de article`);
  const formData = await request.formData();
  const validated = formData.get("validated") as string;
  const article_id = formData.get("article_id") as string;
  console.log(`validated, article_id`, validated, article_id);
  const mg = ManageData.getInstance();
  await mg.validateArticle(article_id, validated);
  return null;
};