// BikeManagement.js

import React from 'react';
import BikeList from './components/BikeList';
import BikeForm from './BikeForm'; // Importez le composant BikeForm

const BikeManagement = () => {
    return (
        <div>
            <h2>Gestion des vélos</h2>
            <BikeForm /> {/* Intégrez le composant BikeForm ici */}
            <BikeList />
        </div>
    );
};

export default BikeManagement;
