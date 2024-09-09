<template>
  <div>
    <h1>Home Page</h1>
    <p>Welcome to the home page of the Vue.js app!</p>

    <h2>Ciudades</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="ciudad in ciudades" :key="ciudad.id">
          <td>{{ ciudad.id }}</td>
          <td>{{ ciudad.nombre }}</td>
        </tr>
      </tbody>
    </table>

    <h2>Agregar Ciudad</h2>
    <form @submit.prevent="addCiudad">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" v-model="newCiudad.nombre" required>
      <button type="submit">Agregar</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';
import '../css/Home.css';

export default {
  name: 'Home',
  data() {
    return {
      ciudades: [],
      newCiudad: {
        nombre: '',
      },
    };
  },
  created() {
    this.fetchCiudades();
  },
  methods: {
    async fetchCiudades() {
      try {
        const response = await axios.get('http://localhost:8000/ciudades');
        this.ciudades = response.data;
      } catch (error) {
        console.error('Error fetching ciudades:', error);
      }
    },
    async addCiudad() {
      try {
        await axios.post('http://localhost:8000/ciudades', this.newCiudad);
        this.newCiudad.nombre = ''; // Clear the input field
        this.fetchCiudades(); // Refresh the list
      } catch (error) {
        console.error('Error adding ciudad:', error);
      }
    },
  },
};
</script>
