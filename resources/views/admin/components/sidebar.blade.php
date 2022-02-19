 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#twelve" aria-expanded="false"
                 aria-controls="twelve">
                 <i class="mdi mdi-home menu-icon"></i>
                 <span class="menu-title">Tool Box</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="twelve">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{ route('toolbox.frontend') }}">
                             Front-end</a>
                     </li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('toolbox.backend') }}">
                             Back-end</a>
                     </li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('toolbox.general') }}">
                             General</a>
                     </li>

                 </ul>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#one" aria-expanded="false" aria-controls="one">
                 <i class="mdi mdi-home menu-icon"></i>
                 <span class="menu-title">Projects Category </span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="one">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{ route('project.category') }}">
                             All Projects Category </a>
                     </li>
                     <li class="nav-item"> <a class="nav-link"
                             href="{{ route('project.category.create') }}">
                             Add Projects category</a>
                     </li>

                 </ul>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#two" aria-expanded="false" aria-controls="two">
                 <i class="mdi mdi-home menu-icon"></i>
                 <span class="menu-title">Projects </span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="two">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{ route('myproject.index') }}">
                             All Projects </a>
                     </li>
                     <li class="nav-item"> <a class="nav-link" href="{{ route('myproject.create') }}">
                             Add Projects </a>
                     </li>

                 </ul>
             </div>
         </li>

     </ul>
 </nav>
 <!-- partial -->
