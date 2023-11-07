import { TaskInterface } from "../interfaces/TaskInterface";
import { IonList, IonHeader, IonPage, IonTitle, IonToolbar } from '@ionic/react';
import Task from "./Task";
import './TaskList.css';

interface ContainerProps {
  tasks: TaskInterface[]
}
const TaskList: React.FC<ContainerProps> = ({ tasks }) => {
  return (
    <>
      <IonTitle>Liste des tâches</IonTitle>
      <IonList>
       {tasks.map((task: TaskInterface) => <Task key={task.id} task={task} />)}
      </IonList>
    </>
  );
}

export default TaskList;