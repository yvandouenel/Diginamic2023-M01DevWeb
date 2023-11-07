import { TaskInterface } from "../interfaces/TaskInterface";
interface ContainerProps { 
  task: TaskInterface
}
const Task: React.FC<ContainerProps> = ({task}) => {
  return (
    <section>
      <h2>{task.title}</h2>
      <button>Valider</button>
      <button>Supprimer</button>

    </section>
  );
}

export default Task;