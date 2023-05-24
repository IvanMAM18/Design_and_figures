<template>
<div class="container-fluid fondo">
  <div class="row">
    <div class="col-md-5" style="width:100px;"><img src="../assets/logoDyF.png" class="logo"/></div>
    <div class="col-md-3 ms-auto fondoColUser">
        <p class="col letras">Usuario</p>
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
                  <a class="dropdown-item " href="#" style="font-weight: bold;">
                    Create <i class="material-icons rigth position-absolute end-0 text-end" style="font-size: 1.5em; top:12px; margin-right:10px;">add</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        <button type="button" class="col styleUser "><i class="row icono material-icons">person</i></button>
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: 'MyHeader',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .fondo{
    background: #C3FFC9;
    border-bottom: solid #68D16C;
    border-width: 1.5px;
    height: 40px;
  }
  .logo{
    margin-top: 5px;
    height: 35px;
    width: 80px;
    margin-top:2px;
  }
  .fondoColUser{
    height: 40px;
    width: 142px;
  }
  .letras{
   font-size:12.5px;
   font-family: Lexend Deca;
   margin-top: 10px;
  }
  .styleUser{
    background: #A8F0AF;
    height:30px;
    width:30px;
    border: solid #68D16C;
    border-width: 3px;
    border-radius: 10px;
    margin-top: 5px;
  }
  .icono{
    color: #68D16C;
  }
</style>
