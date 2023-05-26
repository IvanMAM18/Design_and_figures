<template>
<footer class="container-fluid fondo ">
  <div class="row mb-0">
    <div class="col-12"><img src="../assets/logoDyF.png" class="logo"/></div>
    <div class="col-md-12" style="margin-top: 10px;">
        <div class="col-6" style="margin-left: 10px;">
            <p class="letras">
                Integrantes:<br> 
                Ivan Martin Aviles Moreira <br>
                Guadalupe Eridani Lucero Cota <br>
                Litzy Ivonne Escalera Silva <br>
                Michelle Yareni Torres Quintero
            </p>
        </div>
        <div class="col-6 ms-auto">
            <p class="position-relative text-end letras" >UABCS - 20 Diciembre de 2023</p>
        </div>
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
    background: #406543;
    border-top: solid #68D16C;
    border-width: 1.5px;
  }
</style>
