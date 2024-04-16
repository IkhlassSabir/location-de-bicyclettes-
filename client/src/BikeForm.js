import React, { useState, useEffect } from 'react';

const BikeForm = () => {
    const [formData, setFormData] = useState({
        type: '',
        size: '',
        material: '',
        status: '',
        price_per_hour: '',
    });

    const [csrfToken, setCsrfToken] = useState('');

    useEffect(() => {
        fetch('/csrf-token')
            .then(response => response.json())
            .then(data => setCsrfToken(data.csrf_token))
            .catch(error => console.error('Error fetching CSRF token:', error));
    }, []);

    const handleChange = (e) => {
        setFormData({ ...formData, [e.target.name]: e.target.value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const response = await fetch('/api/bikes', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken, // Inclure le jeton CSRF dans les en-têtes de la requête
                },
                body: JSON.stringify(formData),
            });
            // Gérer la réponse de la requête POST...
            if (response.ok) {
                alert('Vélo ajouté avec succès !');
            } else {
                alert('Une erreur s\'est produite lors de l\'ajout du vélo.');
            }
        } catch (error) {
            console.error('Error adding bike:', error);
        }
    };

    return (
        <form onSubmit={handleSubmit}>
            <label>
                Type:
                <input type="text" name="type" value={formData.type} onChange={handleChange} />
            </label>
            <label>
                Taille:
                <input type="text" name="size" value={formData.size} onChange={handleChange} />
            </label>
            <label>
                Matériau:
                <input type="text" name="material" value={formData.material} onChange={handleChange} />
            </label>
            <label>
                Statut:
                <input type="text" name="status" value={formData.status} onChange={handleChange} />
            </label>
            <label>
                Prix par heure:
                <input type="text" name="price_per_hour" value={formData.price_per_hour} onChange={handleChange} />
            </label>
            <button type="submit">Ajouter vélo</button>
        </form>
    );
};

export default BikeForm;
