<template>
  <div class="container-fluid" >
    <div class="row mb-0">
        <Header msg="Hola header"></Header> 
        <div class="col-12 fondo"></div>
        <Footer msg="Hola header"></Footer> 
    </div>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'

export default {
  name: 'App',
  components: {
    Header,
    Footer,
  }
}
</script>

<style>
.fondo{
    background: #89CD90;
    height: 600px;
  }
</style>
