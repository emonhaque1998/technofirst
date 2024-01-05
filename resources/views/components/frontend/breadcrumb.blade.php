 <div class="breadcrumb-area">
     <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95"
         style="background-image:url(assets/img/bg/breadcrumb-bg.jpg);">
         <div class="container">
             <h2>{{ $pageName }}</h2>
             <p>{{ $subTitle }}</p>
         </div>
     </div>
     <div class="breadcrumb-bottom">
         <div class="container">
             <ul>
                 <li><a href="{{ route('home') }}">Home</a> <span><i
                             class="fa fa-angle-double-right"></i>{{ $linkOfCurrentPage }}</span></li>
             </ul>
         </div>
     </div>
 </div>
