import { TaskInterface } from "../interfaces/TaskInterface";
import { IonList, IonItem, IonLabel, IonButton } from '@ionic/react';
interface ContainerProps {
  task: TaskInterface
}
const Task: React.FC<ContainerProps> = ({ task }) => {
  return (
    
      <IonItem>
        <IonLabel>{task.title}</IonLabel>
        <IonButton>Valider</IonButton>
        <IonButton color="danger">Supprimer</IonButton>
      </IonItem>


  );
}

export default Task;