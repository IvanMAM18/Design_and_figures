<template>
   <div class="container-fluid" style="background:#C3FFC9; height:643px;">

        <div class="py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                
                <div class="col-lg-5">
                            
                    <div class="text-center">
                        <h2 >Sign in to</h2>
                        <img src="../assets/logoDyF.png" width="120px" alt="">
                    </div>
                    <br>
                    <form action="#">
                        <div class="mb-4">
                            <input type="email" class="form-control" name="email" placeholder="example@gmail.com" style="background-color:white; border-radius:5px; height:35px;">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" name="password" placeholder="Password" style="background-color:white; border-radius:5px; height:35px;">
                        </div>
                        
                        <div class="d-grid">
                            <button type="button" class="btn btn-dark">Log in</button>                    
                        </div>
                        <div class="my-4" style="color: rgb(60, 93, 61);">
                            <span style="font-weight: bold;">No account?</span>
                            <a href="./create.html" style="color: rgb(60, 93, 61);">Create One</a>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</template>

<script>
    export default {
        name:'MyLogin',
    }
</script>

<style>
.fondo{
  background: blue;
}

</style>