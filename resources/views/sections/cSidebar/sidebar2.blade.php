      <div >
        <div class=" col-12 dropdown container-fluid" style="position:relative;">
          <div class="col-12 dropdown dropdown-menu container-fluid show" style="position: relative; top: 0px;" aria-labelledby="dropdownMenu">
            <div class="list-group list-group-flush" >
              <?php

                $link =['url' => "asd" , 'title' => "Akıllı Telefon"  ];
                
                
              ?>
              
              @component('sections.cSidebar.sidebarItem2' , ['links' => $link ])
              @endcomponent
               @component('sections.cSidebar.sidebarItem2' , ['links' => $link ])
              @endcomponent
            </div>
          </div>
        </div>
      </div>