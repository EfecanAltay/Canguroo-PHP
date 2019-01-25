      <div class="cSidebar" >
        <div class=" col-12 dropdown container-fluid" style="position:relative; top: -20px; left: 0px; margin:0px; padding:0px 0px 0px 5px;">
          <button class="btn btn-secondary dropdown-toggle btn-lg show" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 100%; height: 100%; margin-top: 0px; ">
            Tüm Kategoriler
          </button>
          <div class="col-12 dropdown dropdown-menu container-fluid show" style="position: relative; top: 0px;" aria-labelledby="dropdownMenu">
            <div class="list-group list-group-flush" >
              <?php

                $electronicBg = asset('imgs/electronic_sidebarcontent_background.jpg');
                $homeEvromentBg = asset('imgs/home_evroment_sidebarcontent_background.jpg');
                $clothingBg = asset('imgs/clothes_sidebarcontent_background.jpg');
                

                $elektronikLinks =[ ['url' => "asd" , 'name' => "Akıllı Telefon" ] ,['url' => "asd" , 'name' => "Bilgisayar" ] ,['url' => "asd" , 'name' => "Elektronik Cihazlar" ] ];
                $homeEvromentLinks =[ ['url' => "asd" , 'name' => "asd" ] ,['url' => "asd" , 'name' => "asd" ] ,['url' => "asd" , 'name' => "asd" ] ];
                $clothingBgLinks =[ ['url' => "asd" , 'name' => "asd" ] ,['url' => "asd" , 'name' => "asd" ] ,['url' => "asd" , 'name' => "asd" ] ];
                
              ?>
              
              @component('sections.cSidebar.sidebarItem' , ['links' => $elektronikLinks ])
                @slot('backgroundImage')
                  {{ $electronicBg }}
                @endslot
                 @slot('sidebarTitle')
                 Elektronik
                @endslot
              @endcomponent

              @component('sections.cSidebar.sidebarItem' , ['links' => $homeEvromentLinks ])
                @slot('backgroundImage')
                  {{ $homeEvromentBg }}
                @endslot
                 @slot('sidebarTitle')
                 Ev Eşyası
                @endslot
              @endcomponent

              @component('sections.cSidebar.sidebarItem' , ['links' => $clothingBgLinks ])
                @slot('backgroundImage')
                  {{ $clothingBg }}
                @endslot
                 @slot('sidebarTitle')
                 Giyim ve Ayakkabı
                @endslot
              @endcomponent
              
              @component('sections.cSidebar.sidebarItem' , ['links' => $clothingBgLinks ])
                @slot('backgroundImage')
                  {{ $clothingBg }}
                @endslot
                 @slot('sidebarTitle')
                 Giyim ve Ayakkabı
                @endslot
              @endcomponent
              
              @component('sections.cSidebar.sidebarItem' , ['links' => $clothingBgLinks ])
                @slot('backgroundImage')
                  {{ $clothingBg }}
                @endslot
                 @slot('sidebarTitle')
                 Giyim ve Ayakkabı
                @endslot
              @endcomponent

            </div>
          </div>
        </div>
      </div>