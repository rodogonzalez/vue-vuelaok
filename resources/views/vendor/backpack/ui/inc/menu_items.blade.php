{{-- This file is used for menu items by any Backpack v6 theme --}}
<?php 
$current_menu_section = "";

$current_menu_section =  \Cookie::get('current_menu');
//dd($request_menu);
/*dd($request->session()->all());
if ($request->session()->exists('current_section')){
    $current_menu_section = $request->session()->get('current_section');
}
  */  
?>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-dropdown title="Estructura de Sitios" icon="la la-puzzle-piece">

    <x-backpack::menu-dropdown-item title="Paises" icon="la la-question" :link="backpack_url('country')" />
    <x-backpack::menu-dropdown-header title="Paises" />
    
    <x-backpack::menu-dropdown title="Estructura de Pais" icon="la la-puzzle-piece" nested="true" >
        <x-backpack::menu-dropdown-item title="Divisiones de Paises" icon="la la-question" :link="backpack_url('country-division')" />
        <x-theme-tabler::menu-dropdown-column>
            <x-backpack::menu-dropdown-item title="Country division parts" icon="la la-question" :link="backpack_url('country-division-part')" />
            <x-backpack::menu-dropdown-item title="Destinos" icon="la la-question" :link="backpack_url('country-division-part-destination')" />
        </x-theme-tabler::menu-dropdown-column>
    </x-backpack::menu-dropdown>
        
    <x-backpack::menu-dropdown-item title="Aerolineas" icon="la la-question" :link="backpack_url('airlines')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Add-ons" icon="la la-puzzle-piece">
    <x-backpack::menu-dropdown-header title="Authentication" />
    <x-backpack::menu-dropdown-item title="Users" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="Roles" icon="la la-group" :link="backpack_url('role')" />
    <x-backpack::menu-dropdown-item title="Permissions" icon="la la-key" :link="backpack_url('permission')" />
</x-backpack::menu-dropdown>