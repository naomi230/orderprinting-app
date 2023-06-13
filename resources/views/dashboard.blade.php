<x-app-layout>
    <x-slot name="header">
               
                <section id="menu" class="menu section-bg">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2 >
                                {{ __('Make Order') }}
                            </h2>      
                        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                           <div class="col-lg-6 menu-item filter-specialty">
                             <div class="btns" >
                             <a href="{{ route('customer') }}" class="btn-menu" style=" margin-right:500px; padding:20px 50px;" >NEW</a>
                             
                             <div class="container" data-aos="fade-up">
                                <br>
                                {{ 'Dear,'}}
                                {{ Auth::user()->name }}
                                {{ ' you have no previous orders Create new orders'}}
                              </div>           
                              </div>
                            </div>
                            </div>
                            </div>
                        </div>
                      
                        </div>
                   
                    
            </div>
        </div>
    </div>
</x-slot>
</x-app-layout>


     
  
     




<!-- ======= Menu Section ======= -->

  
 
      <!-- End Events Section -->



</main><!-- End #main -->

<!-- Vendor JS Files -->

</body>

</html>
