<template>
    <div>
 <div class="auth">
   <div class="auth_left">
      <div class="card">
         <div class="card-body">
            <div class="display-3 text-muted mb-5"><i class="si si-exclamation"></i> 404</div>
            <h1 class="h3 mb-3">Oops.. You just found an error page..</h1>
            <p class="h6 text-muted font-weight-normal mb-3">We are sorry but our service is currently not available&hellip;</p>
            <a class="btn btn-primary" href="javascript:history.back()"><i class="fe fe-arrow-left mr-2"></i>Go back</a>
         </div>
      </div>
   </div>
   <div class="auth_right">
      <div class="carousel slide" data-ride="carousel" data-interval="3000">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="assets/images/slider1.svg" class="img-fluid" alt="login page" />
               <div class="px-4 mt-4">
                  <h4>Fully Responsive</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="assets/images/slider2.svg" class="img-fluid" alt="login page" />
               <div class="px-4 mt-4">
                  <h4>Quality Code and Easy Customizability</h4>
                  <p>There are many variations of passages of Lorem Ipsum available.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="assets/images/slider3.svg" class="img-fluid" alt="login page" />
               <div class="px-4 mt-4">
                  <h4>Cross Browser Compatibility</h4>
                  <p>Overview We're a group of women who want to learn JavaScript.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="css" scoped>
.auth .auth_left {
    background: #eaeae8;
}
</style>
