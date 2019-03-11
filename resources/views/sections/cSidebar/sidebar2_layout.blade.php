      <div class="cSidebar" >
        <div class=" col-12 dropdown container-fluid" style="position:relative; top: -20px; left: 0px; margin:0px; padding:0px 0px 0px 5px;">
          <button class="btn btn-secondary dropdown-toggle btn-lg show" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 100%; height: 100%; margin-top: 0px; ">
            {{$item['name']}}
          </button>
          <div class="col-12 dropdown dropdown-menu container-fluid show" style="position: relative; top: 0px;" aria-labelledby="dropdownMenu">
            <div class="list-group list-group-flush" >
              @foreach ($item['links'] as $link)
                @component('sections.cSidebar.sidebarItem' , ['links' => [] ])
                    @slot('backgroundImage')
                            {{ $item['bgImage'] }}
                    @endslot
                    @slot('sidebarTitle')
                            {{$link['name']}}
                    @endslot
                @endcomponent
              @endforeach             
            </div>
          </div>
        </div>
      </div>
<div class="sidebarContentArea" style="position:relative; margin-left:300px;" ></div>
