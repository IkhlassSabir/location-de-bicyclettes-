// src/components/BikeList.js

import React, { useEffect, useState } from 'react';
import axios from 'axios';

const BikeList = () => {
  const [bikes, setBikes] = useState([]);

  useEffect(() => {
    axios.get('http://localhost:8000/api/bikes')
      .then(response => {
        setBikes(response.data);
      })
      .catch(error => {
        console.error('Error fetching bikes:', error);
      });
  }, []);

  return (
    <div>
      <h2>Liste des vélos disponibles :</h2>
      <ul>
        {bikes.map(bike => (
          <li key={bike.id}>{bike.type} - {bike.size}</li>
        ))}
      </ul>
    </div>
  );
};

export default BikeList;
