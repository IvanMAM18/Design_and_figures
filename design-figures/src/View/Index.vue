<template>
  <div class="container-fluid" >
    <div class="row mb-0">
        <Header msg="Hola header"></Header> 
        <div class="col-12 fondo">
          <div class="btn-group" role="group" aria-label="Button group dropdown">
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" class="boton" type="button" data-bs-toggle="dropdown" style="font-size:20px; margin-top: 30px; ">
                <p class="col letrasBoton">Designs </p> <i class="iconoBoton material-icons rigth">expand_more</i>
              </button>
              <ul class="dropdown-menu letrasBoton" style="background-color: #A8F0AF;" aria-labelledby="btnGroupDrop1">
                <li>
                  <a class="dropdown-item " href="#" style="font-weight: bold;">
                    Create <i class="material-icons rigth position-absolute end-0 text-end" style="font-size: 1.5em; top:12px; margin-right:10px;">add</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <br><br>
          <div class="row">
            <div v-for="i in 8" :key="i" class="col-sm-3 bg-transparent">
                <div class="card bg-transparent border-0 shadow-none">
                  <p class="letrasBoton" style="font-size:18px; text-align: justify;">Title Design</p>
                  <div style="position:relative; bottom:15px;">
                    <i class="alinearIconoCard position-absolute top-0 end-0 text-end material-icons rigth  ml-auto" style="font-size: 2em;">more_horiz</i>
                    <img  src="../assets/actividadEjemplo.png" class="card-img-top rounded imagenCard" alt="..." >
                    <div class="alinearIconoCard position-absolute bottom-0 end-0">
                      <i class="material-icons rigth">add_comment</i>
                      <i class="material-icons rigth">favorite</i>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <Footer msg="Hola header"></Footer> 
    </div>
  </div>
</template>

<script>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'

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
  background: #E7FFE9;
}
.boton{
  width:135px;
  height:40px;
  background:#C3FFC9;
  border: solid #89CD90;
  border-width: 3px;
  border-radius: 10px;
  margin-top:15px;
}
.boton:hover {
  background-color: #89CD90;
}
.letrasBoton{
  font-weight: 100;
  font-family: Lexend Deca;
  font-weight: bold;
}
.iconoBoton{
  margin-top:5px;
}
.imagenCard{
  background: #89CD90;
  border: solid #A8F0AF;
  border-width: 3px;
  border-radius: 10px;
}
.alinearIconoCard{
  padding-right: 5px;
}

</style>
