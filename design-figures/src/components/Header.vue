<template>
<div class="container-fluid fondo">
  <div class="row">
    <div class="col-md-5" style="width:100px;"><img src="../assets/logoDyF.png" class="logo"/></div>
    <div class="col-md-3 ms-auto fondoColUser">
        <p class="col letras"><router-link to="/Login">Iniciar sesion</router-link></p>
        <div class="col styleUser "><i class="row icono material-icons">person</i></div>
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
