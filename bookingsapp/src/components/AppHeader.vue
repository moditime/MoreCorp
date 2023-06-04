<template>
    <AppHeader>
      <img alt="Hotel Logo" src="../assets/hotel.png" height="50">
      <p>Reservations</p>
      <nav>
        <ul>
          <li><router-link to="/">Browse</router-link></li>
          <li><router-link to="/booked">Booked Reservations</router-link></li>
        </ul>
      </nav>
    </AppHeader>
  </template>

...
<style scoped>
  AppHeader {
    display: flex;
    border-bottom: 1px solid #ccc;
    padding: .5rem 1rem;

    p {
      margin-left: 1rem;
    }
  }

  nav {
    margin-left: auto;

    ul {
      list-style: none;
    }

    ul li {
      display: inline-flex;
      margin-left: 1rem;
    }
  }
</style>