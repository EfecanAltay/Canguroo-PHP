      <div class="col-sm-12 col-md-3 col-lg-3 container-fluid" style="padding:0px; ">
        <div class=" col-12 dropdown container-fluid" style="position:relative; top: -20px; left: 0px; margin:0px; padding:0px 0px 0px 5px;">
          <button class="btn btn-secondary dropdown-toggle btn-lg show" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="position: relative; width: 100%; height: 100%; margin: 0px; ">
            Tüm Kategoriler
          </button>
          <div class="col-12 dropdown dropdown-menu container-fluid show" style="position: relative; top: 0px;" aria-labelledby="dropdownMenu">
            <div class="list-group list-group-flush">
              <?php

                $links = [

                  [
                        'url' => 'asd',
                        'name' => 'asd'
                  ],
                  [
                        'url' => 'dfg',
                        'name' => 'dgf'
                  ]          
                ];
              $links =[ ['url' => "asd" , 'name' => "asd" ] ,['url' => "asd" , 'name' => "asd" ] ,['url' => "asd" , 'name' => "asd" ] ];

              ?>
              
              @component('sections.sidebarItem' , ['links' => $links ])
                @slot('backgroundImage')
                  imgs/home_evroment_sidebarcontent_background.jpg
                @endslot
                 @slot('sidebarTitle')
                 Elektronik
                @endslot
              @endcomponent
              <!--
              @component('sections.sidebarItem',['links' => 'links'])
                @slot('backgroundImage')
                  imgs/home_evroment_sidebarcontent_background.jpg
                @endslot
                 @slot('sidebarTitle')
                 Ev Eşyası
                @endslot
              @endcomponent
              @component('sections.sidebarItem' ,['links' => 'links'])
                @slot('backgroundImage')
                  imgs/clothes_sidebarcontent_background.jpg
                @endslot
                 @slot('sidebarTitle')
                 Giyim & Ayakkabı
                @endslot
              @endcomponent
              @component('sections.sidebarItem' ,['links' => 'links'])
                @slot('backgroundImage')
                  imgs/mom_and_baby_sidebarcontent_background.jpg
                @endslot
                 @slot('sidebarTitle')
                 Anne & Bebek
                @endslot
              @endcomponent
              @component('sections.sidebarItem' , ['links' => 'links'])
                @slot('backgroundImage')
                  imgs/cosmetic_sidebarcontent_background.jpg
                @endslot
                 @slot('sidebarTitle')
                 Kozmetik & Kişisel Bakım
                @endslot
              @endcomponent
              @component('sections.sidebarItem' , ['links' => 'links'])
                @slot('backgroundImage')
                  imgs/sports_sidebarcontent_background.jpg
                @endslot
                 @slot('sidebarTitle')
                 Spor
                @endslot
              @endcomponent
              @component('sections.sidebarItem' ,['links' => 'links'])
                @slot('backgroundImage')
                  imgs/music_sidebarcontent_background.jpg
                @endslot
                 @slot('sidebarTitle')
                 Müzik ,Kitap ,Film ,Oyun
                @endslot
              @endcomponent
              @component('sections.sidebarItem' , ['links' => 'links'])
                @slot('backgroundImage')
                  imgs/holiday_sidebarcontent_background.jpg
                @endslot
                @slot('sidebarTitle')
                 Bilet , Tatil ve Eğlence
                @endslot
              @endcomponent
            -->
            </div>
          </div>
        </div>
      </div>