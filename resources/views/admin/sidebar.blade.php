 <div class="d-flex align-items-stretch">
   <!-- Sidebar Navigation-->
   <nav id="sidebar">
     <!-- Sidebar Header-->
     <div class="sidebar-header d-flex align-items-center">
       <div class="avatar">
         <img src="{{asset('logo/aishop.jpg')}}" alt="..." class="img-fluid rounded-circle">
       </div>
       <div class="title">
         <h1 class="h5">Admin Wisata</h1>
         <p>Abdul Mujib Supardin</p>
       </div>
     </div>
     <!-- Sidebar Navidation Menus-->
     <span class="heading">Main</span>
     <ul class="list-unstyled">
       <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Halaman Utama</a></li>
       <li><a href="{{url('view_category')}}"> <i class="icon-home"></i>Kategori</a></li>
       <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Produk </a>
         <ul id="exampledropdownDropdown" class="collapse list-unstyled text-white">
           <li><a href="{{url('add_product')}}">Tambah Produk</a></li>
           <li><a href="{{url('view_product')}}">Lihat Produk</a></li>
         </ul>
       </li>
       <li>
         <a href="{{url('view_orders')}}"> <i class="icon-grid"></i>Orderan
         </a>
       </li>
       <li><a href="{{ url('wisataAdmin') }}"> <i class="icon-map"></i>Wisata </a></li>

     </ul>
   </nav>