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
        height:35px;
        width:75px;
    } 
    td,th{
        padding:10px;
        border:3px solid rgba(25,25,25,0.999);
    }

    .viewer button {
        border:2px solid #cda45c;
        height:50px;
        width:85px;
        margin-top: -12px;
        color:white;
        border-radius:25px;
        padding: 10px;
        background: black;
    }
    .viewer button:hover{
        background:#cda45c;
    }

         
    
    .viewer a{
        
        border:2px solid #cda45c;
        height:35px;
        width:75px;
        color:white;
        border-radius:25px;
        padding: 10px;
        
    }
    .viewer a:hover{
        
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
  
   /*width: 400px; /* Revert to the original width *
  height: 400px; 
  border-radius: 0; 
  margin-top: -10px;
  transform: scale(1.1); */

}
#hiddenDiv {
  
      display: none;
      background-color:black;
      border: 2px solid #cda45c;
      width:400px;
      height:700px;
      border-radius: 30px;
      padding: 10px;
      position: absolute;
      top: 20%;
      left: 60%;
      transform: translate(-50%, -50%);
      z-index: 9999;
    }

    #overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.75);
      z-index: 9998;
    }
   

.descript{
    border:2 px solid #cda45c;
    border-radius: 10px;
    background: black;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    color:#cda45c;
    transition:0.5s;
    left:50%;

}

.descript h3{

  color:white;
  font-size: 25px;
}
.descript p{
    color:#cda45c;
    margin-left:-90px;
    margin-top:35px;
    font-family: "Playfair Display", serif;
    font-weight:300;
  font-size: 20px;
}




.descript p:hover {
    color:white;
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
                              @if (count($data) === 0)
                                <div class="container" data-aos="fade-up">
                                    <br>
                                    {{ 'Dear,' }}{{ Auth::user()->name }}{{ ', you have no previous orders. Create new orders.' }}
                                </div>
                            @else
                                <div class="container" data-aos="fade-up">
                                    <br>
                                    {{ Auth::user()->name }}{{ ', you have created an order.' }}<br>
                                    <br>
                                    {{ 'Please wait for updates on your order.' }}
                             
                                                           
                                
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                             <th>#</th>
                                            <th>ORDER NAME</th>
                                            <th>ORDER DETAIL</th>
                                            <th>IMAGE</th>
                                            <th>CREATED AT</th>
                                            <th></th>
                                            <th>VIEW</th>
                                            <th></th>
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
                                <div class="viewer">
                               <center>                                                  
                                                    
                         <button id="showButton">Order Description</button>
                       <div id="hiddenDiv">
                        <h2>ORDER MADE</h2>
                        <br>
                        <br>
                            <img src="{{ asset('uploads/' . $val->fileUpload)}}" style="height:80px; width:80px;" class="menu-img" alt="">
                           
                              <div class="descript">
                               <h3> Order No:           {{ $index + 1 }}</h3><br>
                               <p> Printing Category:{{ $val->field1 }}</p><br>
                               <p> Printing Type:     {{ $val->field2 }}</p><br>
                                <p>Material:           {{ $val->field3 }}</p><br>                            
                               <p> Weight(g):         {{ $val->field4 }}</p><br>
                               <p> Size:               {{ $val->field5 }}</p><br>
                                <p>Number of copies:   {{ $val->field6 }}</p><br>
                                <p>Description:        {{ $val->detail }}</p>

                            
                              </div>
                              
                            
                       
                          
                             </div>
                          <div id="overlay"></div> 
                               </center>
                                 </div>
                                </td> 
                                                  <td> <div class="viewer"><center> <a href="{{ route('orderUpdates', ['orderId' => $val->id])}}">Updates</a></center></div></td>
                                                   <td> <div class="viewer"><center>  <a href="{{ route('invoices.show', ['invoiceId' => $val->id]) }}">Invoice</a></center></div>
                                                
                                                </div>
                                                </td> <!-- Replace 'order.view' with the actual route name for viewing an order -->
                                            </tr>
                                        @endforeach
                                            </tbody>
                                    </table>
                                </div>
                                @endif
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

      <script>
        const showButton = document.getElementById("showButton");
        const hiddenDiv = document.getElementById("hiddenDiv");
        const overlay = document.getElementById("overlay");
    
        showButton.addEventListener("click", function() {
          hiddenDiv.style.display = "block";
          overlay.style.display = "block";
        });
    
        overlay.addEventListener("click", function() {
          hiddenDiv.style.display = "none";
          overlay.style.display = "none";
        });
      </script>

</main>

</body>

</html>
