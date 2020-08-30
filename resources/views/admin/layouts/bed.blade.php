<li class="nav-item  ">
   <a href="#" class="nav-link nav-toggle"> <i class="material-icons">hotel</i>
      <span class="title">Bed</span> <span class="arrow"></span>
   </a>
   <ul class="sub-menu">
      <li class="nav-item  ">
         <a href="{{route('bed')}}" class="nav-link "> <span class="title">All
               Bed</span>
         </a>
      </li>
      <li class="nav-item  ">
      <a href="{{route('add.bed')}}" class="nav-link "> <span class="title">Add
            Bed</span>
         </a>
      </li>
      <li class="nav-item  ">
         <a href="{{URL::to('category')}}" class="nav-link "> <span class="title">All
               Category</span>
         </a>
      </li>
      <li class="nav-item  ">
      <a href="{{URL::to('category/create')}}" class="nav-link "> <span class="title">Add
            Category</span>
         </a>
      </li>
      <li class="nav-item  ">
         <a href="{{route('bedtype')}}" class="nav-link "> <span class="title">All
               Bed Type</span>
            </a>
         </li>
         <li class="nav-item  ">
            <a href="{{route('add.bedtype')}}" class="nav-link "> <span class="title">Add
                  Bed Type</span>
               </a>
            </li>
            <li class="nav-item  ">
               <a href="{{route('ward')}}" class="nav-link "> <span class="title">All
                     Ward</span>
                  </a>
               </li>
               <li class="nav-item  ">
                  <a href="{{route('add.ward')}}" class="nav-link "> <span class="title">Add
                        Ward</span>
                     </a>
                  </li>
   
   </ul>
</li>