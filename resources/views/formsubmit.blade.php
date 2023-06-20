<x-app-layout>
<style>
    table{
        background:black;
        margin-left:40px;
        margin-top:20px;
        height:400px;
        width:950px;
        border: 2px solid #cda45c;
        border-radius:10px;


        font-family: "Open Sans", sans-serif;
    }
    .viewer{
        border:2px solid #cda45c;
        height:35px;
        width:75px;
        color:white;
        border-radius:25px;
        padding: 10px;
    } 
    td,th{
        padding:10px;
        border:3px solid rgba(25,25,25,0.999);
    }

         
    
    .viewer a{
        color:white;
        
    }
    .viewer:hover{
        
        background:#cda45c;
    }
    .sup{
        display: flex;
        padding:5px;
        
    }

    .circle-image {
  width: 100px; 
  height: 100px;
  border-radius: 50%; 
  object-fit: cover; 
  transition: transform 0.3s, margin-top 0.3s;
}


.container{
 position:relative;   
}


.image-wrapper{
    position: relative;
  width: 100px; /* Same as the image width */
  height: 100px; /* Same as the image height */
  
}
.image-wrapper:hover .circle-image {
  
  width: 400px; /* Revert to the original width */
  height: 400px; 
  border-radius: 0; 
  margin-top: -10px;
  transform: scale(1.1);

}
    


</style>
    <x-slot name="header">
        
                <section id="menu" class="menu section-bg">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                           
                            <h2 >{{ __('Make Order') }}</h2>      
                        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                           <div class="col-lg-6 menu-item filter-specialty">
                             <div class="btns" >
                             <a href="{{ route('customer') }}" class="btn-menu" style=" margin-right:500px; padding:20px 50px;" >NEW</a>
                               <div class="container" data-aos="fade-up">
                                <br>
                                {{ Auth::user()->name }}
                                {{ ', You have created an Order'}}<br>
                                <br>
                                {{ ' Please wait for Updates on your order'}}
                               
                                
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                             <th>#</th>
                                            <th>ORDER NAME</th>
                                            <th>ORDER DETAIL</th>
                                            <th>IMAGE</th>
                                            <th>CREATED AT</th>
                                            <th>VIEW</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data as $index => $val)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $val->field1 }}</td>
                                                <td>{{ $val->field2 }}</td>
                                                <td>
                                                 <div class="container">
                                                    <div class="image-wrapper">
                                                 <img src="{{ asset('uploads/' . $val->fileUpload)}}" class="circle-image">
                                                    </div>
                                                </div>   
                                                </td>
                                                 <td>{{ $val->created_at }}</td>
                                                <td>
                                                    <div class="sup">
                                                    <div class="viewer"><center><a href="{{ route('order.view', ['id' => $val->id]) }}">Order Description</a></center></div>
                                                   <div class="viewer"><center> <a href="{{ route('order.view', ['id' => $val->id]) }}">Updates</a></center></div>
                                                   <div class="viewer"><center> <a href="{{ route('order.view', ['id' => $val->id]) }}">Invoice</a></center></div>
                                                
                                                </div>
                                                </td> <!-- Replace 'order.view' with the actual route name for viewing an order -->
                                            </tr>
                                        @endforeach
                                            </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                            </div>
                            </div>
                        </div>
                      </section>
    </x-slot>
</x-app-layout>


     
  
     




<!-- ======= Menu Section ======= -->

  
 
      <!-- End Events Section -->



</main><!-- End #main -->

<!-- Vendor JS Files -->

</body>

</html>
