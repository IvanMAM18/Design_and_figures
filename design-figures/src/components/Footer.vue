<template>
<footer class="container-fluid fondo ">
  <div class="row">
    <div class="col-2"><img src="../assets/logoDyF.png" class="logo"/></div>
  </div>
  <div class="row mb-0">
    <div class="col-md-2" style="width:210px;">
        <p class="col letras">
            Integrantes:<br> 
            Ivan Martin Aviles Moreira <br>
            Guadalupe Eridani Lucero Cota <br>
            Litzy Ivonne Escalera Silva <br>
            Michelle Yareni Torres Quintero
        </p>
    </div>
    <div class="col-md-2 ms-auto" style="margin-top:70px; height:40px; width:190px;">
        <p class="col letras">UABCS - 20 Junio de 2023</p>
    </div>
  </div>
</footer>
</template>

<script>
export default {
  name: 'MyFooter',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .letras{
    color: white;
    font-family: Lexend Deca;
    font-size:12.5px;
  }
  .logo{
    margin-top: 5px;
    border: solid #68D16C;
    border-width: 1.5px;
    border-radius: 4px;
    height: 35px;
    width: 80px;
    margin-top: 10px;
    margin-left: 10px;
  }
  .fondo{
    background: black;
    height: 175px;
  }
</style>
