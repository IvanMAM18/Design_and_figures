<template>
  <div class="container-fluid" >
    <div class="row mb-0">
        <Header msg="Hola header"></Header> 
        <div class="col-12 fondo">
          <button class="boton" type="button"><p class="col letrasBoton">Desings </p><i class="iconoBoton material-icons rigth">expand_more</i></button>
          <br><br>
          <div class="row">
            <div v-for="i in 8" :key="i" class="col-sm-3">
                <div class="card-body fondoCard ">
                  <p class="letrasBoton card-title">Title Desing</p>
                  <img src="./assets/actividadEjemplo.png" class="card-img-top imagenCard" alt="...">
                </div>
            </div>
          </div>
        </div>
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
}
.boton{
  width:135px;
  height:40px;
  background:#89CD90;
  border: solid #A8F0AF;
  border-width: 3px;
  border-radius: 10px;
  margin-top:15px;
}
.letrasBoton{
  font-weight: 100;
  font-size:22px;
  font-family: Lexend Deca;
}
.iconoBoton{
  margin-top:5px;
}
.fondoCard{
  background: #89CD90;
}
.imagenCard{
  background: #89CD90;
  border: solid #A8F0AF;
  border-width: 3px;
  border-radius: 10px;
}

</style>
