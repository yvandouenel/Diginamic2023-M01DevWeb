import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar } from '@ionic/react';
import './Home.css';
import TaskList from '../components/TaskList';
import { useState, useEffect } from 'react';
import JsonServer from '../services/JsonServer';
import { TaskInterface } from '../interfaces/TaskInterface';

const Home: React.FC = () => {
  const [tasks, setTasks] = useState<TaskInterface[]>([]);
  useEffect(() => {
    (async () => {
      const tasks = await JsonServer.loadData();
      setTasks(tasks);
      console.log(`tasks : `, tasks);
    })();
  },[]);
  return (
    <IonPage>
      <IonHeader>
        <IonToolbar>
          <IonTitle>Gestion des tâches</IonTitle>
        </IonToolbar>
      </IonHeader>
      <IonContent fullscreen>
        <IonHeader collapse="condense">
          <IonToolbar>
            <IonTitle size="large"></IonTitle>
          </IonToolbar>
        </IonHeader>
        <TaskList tasks={tasks} />
      </IonContent>
    </IonPage>
  );
};

export default Home;
