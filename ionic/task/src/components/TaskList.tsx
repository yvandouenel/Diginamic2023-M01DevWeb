import { TaskInterface } from "../interfaces/TaskInterface";
import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar } from '@ionic/react';
import Task from "./Task";

interface ContainerProps {
  tasks: TaskInterface[]
}
const TaskList: React.FC<ContainerProps> = ({ tasks }) => {
  return (
    <>
      <IonTitle>Liste des tâches</IonTitle>
      {tasks.map((task: TaskInterface) => <Task key={task.id} task={task} />)}
    </>
  );
}

export default TaskList;