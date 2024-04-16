import React from 'react';
import BikeList from './components/BikeList';
import BikeManagement from './BikeManagement.js'; // Correction de l'import

const App = () => {
  return (
    <div>
      <h1>Gestion de la location de vélos</h1>
      <BikeList />
      <BikeManagement />
    </div>
  );
};

export default App;
