
<x-app-layout>
    <x-slot name="header">
        <x-nav-links.agency></x-nav-links.agency>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-slate-200 border-b border-gray-200 ">




                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('valmaster.agency.update', $agency->id) }}">
                                @method('PATCH')
                            @csrf

                            <!-- Name -->
                            {{--this section for client details--}}


                                  <div class="pt-6">
                                      <div class="grid grid-cols-4 gap-4 ">

                                          {{--job number--}}
                                          <div>
                                              <x-label for="job_number"
                                                       :value="__('JOB NUMBER')" />

                                              <x-input id="job_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="job_number"
                                                       value="{{$agency->job_number}}" required autofocus />
                                          </div>

                                          <!-- Select Branch -->
                                          <div>
                                              <x-label for="rent_sale"
                                                       :value="__('RENT/SALE')" />
                                              <select name="rent_sale"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="rent_sale">
                                                  <option value="SALE" {{$agency->rent_sale == "SALE" ? 'selected': ''}}>Sale</option>
                                                  <option value="RENT" {{$agency->rent_sale == "RENT" ? 'selected': ''}}>Rent</option>
                                              </select>
                                          </div>


                                            <!--WEB -->
                                          <div>
                                              <x-label for="web"
                                                       :value="__('WEB')" />

                                              <x-input id="web"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="web"
                                                       value="{{$agency->web}}" required autofocus />
                                          </div>

                                          <!-- AGENT IN CHARGE -->
                                          <div>
                                              <x-label for="agent_in_charge"
                                                       :value="__('AGENT IN CHARGE')" />

                                              <x-input id="agent_in_charge"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="agent_in_charge"
                                                       value="{{$agency->agent_in_charge}}" required autofocus />
                                          </div>


                                          <!-- Service Line -->
                                          <div>
                                              <x-label for="service_line"
                                                       :value="__('SERVICE LINE')" />
                                              <select name="service_line"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="service_line" >
                                                      <option value="ESTATE AGENCY" {{$agency->service_line == "ESTATE AGENCY" ? 'selected': ''}}>Estate Agency</option>
                                                      <option value="VALUATION" {{$agency->service_line == "VALUATION" ? 'selected': ''}}>Valuation</option>
                                                      <option value="PROPERTY MGT" {{$agency->service_line == "PROPERTY MGT" ? 'selected': ''}}>Property MGT</option>
                                                      <option value="CONSULTANCY" {{$agency->service_line == "CONSULTANCY" ? 'selected': ''}}>Consultancy</option>

                                              </select>
                                          </div>


                                          <!-- DATE OF INSTRUCTION-->
                                          <div>
                                              <x-label for="date_of_instruction"
                                                       :value="__('DATE OF INSTRUCTION')" />

                                              <x-input id="date_of_instruction"
                                                       class="block mt-1 w-full"
                                                       type="date"
                                                       name="date_of_instruction"
                                                       value="{{$agency->date_of_instruction}}" required autofocus />
                                          </div>


                                          <!-- Client Name -->
                                          <div>
                                              <x-label for="client_name"
                                                       :value="__('CLIENT NAME')" />

                                              <x-input id="client_name"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="client_name"
                                                       value="{{$agency->client_name}}" required autofocus />
                                          </div>


                                          <!-- Client Contact Number -->
                                          <div>
                                              <x-label for="client_contact_number"
                                                       :value="__('CLIENT CONTACT NUMBER')" />

                                              <x-input id="client_contact_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="client_contact_number"
                                                       value="{{$agency->client_contact_number}}" required autofocus />
                                          </div>


                                          <!-- Email -->
                                          <div>
                                              <x-label for="email"
                                                       :value="__('EMAIL')" />

                                              <x-input id="email"
                                                       class="block mt-1 w-full"
                                                       type="email"
                                                       name="email"
                                                       value="{{$agency->email}}" required autofocus />
                                          </div>
                                      </div>
                                  </div>

                                {{-- Contact Person Details--}}

                                    <div class="pt-8">

                                      <div class="grid grid-cols-4 gap-4">

                                          {{-- Property Address--}}
                                              <div>
                                                  <x-label for="property_address"
                                                           :value="__('PROPERTY ADDRESS')" />

                                                  <x-input id="property_address"
                                                           class="block mt-1 w-full"
                                                           type="text"
                                                           name="property_address"
                                                           value="{{$agency->property_address}}" required autofocus />
                                              </div>

                                          {{-- Property Address--}}
                                          <div>
                                              <x-label for="google_cordinates"
                                                       :value="__('GOOGLE CORDINATES')" />

                                              <x-input id="google_cordinates"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="google_cordinates"
                                                       value="{{$agency->google_cordinates}}" required autofocus />
                                          </div>


                                          <!-- TYPE OF PROPERTY -->
                                          <div>
                                              <x-label for="type_of_property"
                                                       :value="__('TYPE OF PROPERTY')" />
                                              <select id="type_of_property"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="type_of_property">
                                                      <option value="Residential" {{$agency->type_of_property == "Residential" ? 'selected': ''}}>Residential</option>
                                                      <option value="Commercial" {{$agency->type_of_property == "Commercial" ? 'selected': ''}}>Commercial</option>
                                                      <option value="Industrial" {{$agency->type_of_property == "Industrial" ? 'selected': ''}}>Industrial</option>
                                                      <option value="Bare Land" {{$agency->type_of_property == "Bare Land" ? 'selected': ''}}>Bare Land</option>
                                              </select>
                                          </div>

                                          <!-- TYPE OF BUILDING -->
                                          <div>
                                              <x-label for="type_of_building"
                                                       :value="__('TYPE OF BUILDING')" />
                                              <select id="type_of_building"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="type_of_building">
                                                      <option value="HOUSE" {{$agency->type_of_building == "HOUSE" ? 'selected': ''}}>HOUSE</option>
                                                      <option value="APARTMENT" {{$agency->type_of_building == "APARTMENT" ? 'selected': ''}}>APARTMENT</option>
                                                      <option value="FLATS" {{$agency->type_of_building == "FLATS" ? 'selected': ''}}>FLATS</option>
                                                      <option value="OFFICES" {{$agency->type_of_building == "OFFICES" ? 'selected': ''}}>OFFICES</option>
                                                      <option value="RETAIL" {{$agency->type_of_building == "RETAIL" ? 'selected': ''}}>RETAIL</option>
                                                      <option value="SHOWROOM" {{$agency->type_of_building == "SHOWROOM" ? 'selected': ''}}>SHOWROOM</option>
                                                      <option value="WAREHOUSE" {{$agency->type_of_building == "WAREHOUSE" ? 'selected': ''}}>WAREHOUSE</option>
                                                      <option value="FACTORY" {{$agency->type_of_building == "FACTORY" ? 'selected': ''}}>FACTORY</option>
                                              </select>

                                          </div>

                                               <!-- TYPE OF BUILDING 2 -->
                                          <div>
                                              <x-label for="type_of_building_2"
                                                       :value="__('TYPE OF BUILDING 2')" />
                                              <select id="type_of_building_2"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="type_of_building_2">
                                                      <option value="STAND ALONE" {{$agency->type_of_building_2 == "STAND ALONE" ? 'selected': ''}}>STAND ALONE</option>
                                                      <option value="COMPLEX" {{$agency->type_of_building_2 == "COMPLEX" ? 'selected': ''}}>COMPLEX</option>
                                                      <option value="FLATS" {{$agency->type_of_building_2 == "FLATS" ? 'selected': ''}}>FLATS</option>
                                              </select>


                                          </div>


                                          <!-- BUILDING HEIGHT -->
                                          <div>
                                              <x-label for="building_height"
                                                       :value="__('BUILDING HEIGHT')" />
                                              <select id="building_height"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="building_height">
                                                      <option value="SINGLE STORY" {{$agency->building_height == "SINGLE STORY" ? 'selected': ''}}>SINGLE STORY</option>
                                                      <option value="DOUBLE STORY" {{$agency->building_height == "DOUBLE STORY" ? 'selected': ''}}>DOUBLE STORY</option>
                                                      <option value="GROUND FLOOR" {{$agency->building_height == "GROUND FLOOR" ? 'selected': ''}}>GROUND FLOOR</option>
                                                      <option value="UPPER FLOOR" {{$agency->building_height == "UPPER FLOOR" ? 'selected': ''}}>UPPER FLOOR</option>
                                              </select>
                                          </div>

                                          {{-- NUMBER OF BEDROOMS--}}
                                          <div>
                                              <x-label for="number_of_bedrooms"
                                                       :value="__('NUMBER OF BEDROOMS')" />

                                              <x-input id="number_of_bedrooms"
                                                       class="block mt-1 w-full"
                                                       type="number"
                                                       name="number_of_bedrooms"
                                                       value="{{$agency->number_of_bathrooms}}" required autofocus />
                                          </div>

                                          <!-- SIZE OF ROOMS -->
                                          <div>
                                              <x-label for="size_of_rooms"
                                                       :value="__('SIZE OF ROOMS')" />
                                              <select id="size_of_rooms"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="size_of_rooms">
                                                      <option value="BIG" {{$agency->size_of_rooms == "BIG" ? 'selected': ''}}>BIG</option>
                                                      <option value="MEDIUM" {{$agency->size_of_rooms == "MEDIUM" ? 'selected': ''}}>MEDIUM</option>
                                                      <option value="SMALL" {{$agency->size_of_rooms == "SMALL" ? 'selected': ''}}>SMALL</option>
                                              </select>
                                          </div>

                                      </div>
                                    </div>


                                <div class="pt-8">

                                    <div class="grid grid-cols-4 gap-4">

                                        {{-- NUMBER OF BATHROOMS--}}
                                        <div>
                                            <x-label for="number_of_bathrooms"
                                                     :value="__('NUMBER OF BATHROOMS')" />

                                            <x-input id="number_of_bathrooms"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="number_of_bathrooms"
                                                     value="{{$agency->number_of_bathrooms}}" required autofocus />
                                        </div>


                                        {{-- MASTER SELF CONTAINED--}}
                                        <div>
                                            <x-label for="master_self_contained"
                                                     :value="__('MASTER SELF CONTAINED')" />

                                            <x-input id="master_self_contained"
                                                     class="block mt-1 w-full"
                                                     type="text"
                                                     name="master_self_contained"
                                                     value="{{$agency->master_self_contained}}" required autofocus />
                                        </div>


                                        <!-- FURNISHED -->
                                        <div>
                                            <x-label for="furnished"
                                                     :value="__('FURNISHED')" />
                                            <select id="furnished"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="furnished">
                                                    <option value="FURNISHED" {{$agency->furnished == "FURNISHED" ? 'selected': ''}}>FURNISHED</option>
                                                    <option value="UNFURNISHED" {{$agency->furnished == "UNFURNISHED" ? 'selected': ''}}>UNFURNISHED</option>
                                            </select>
                                        </div>

                                         <!-- QUALITY OF FINISHES -->
                                        <div>
                                            <x-label for="quality_of_finishes"
                                                     :value="__('QUALITY OF FINISHES')" />
                                            <select id="quality_of_finishes"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="quality_of_finishes">
                                                    <option value="ULTRA MODERN" {{$agency->quality_of_finishes == "ULTRA MODERN" ? 'selected': ''}}>ULTRA MODERN</option>
                                                    <option value="MODERN" {{$agency->quality_of_finishes == "MODERN" ? 'selected': ''}}>MODERN</option>
                                                    <option value="MODERATE" {{$agency->quality_of_finishes == "MODERATE" ? 'selected': ''}}>MODERATE</option>
                                                    <option value="OLD" {{$agency->quality_of_finishes == "OLD" ? 'selected': ''}}>OLD</option>
                                            </select>
                                        </div>


                                        {{-- LAND SIZE--}}
                                        <div>
                                            <x-label for="land_size"
                                                     :value="__('LAND SIZE')" />

                                            <x-input id="land_size"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="land_size"
                                                     value="{{$agency->land_size}}" required autofocus />
                                        </div>


                                        <!-- ADDITIONAL BUILDINGS -->
                                        <div>
                                            <x-label for="additional_buildings"
                                                     :value="__('ADDITIONAL BUILDINGS')" />
                                            <select id="additional_buildings"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="additional_buildings">
                                                    <option value="GUEST HOUSE" {{$agency->additional_buildings == "GUEST HOUSE" ? 'selected': ''}}>GUEST HOUSE</option>
                                                    <option value="WORKERS" {{$agency->additional_buildings == "WORKERS" ? 'selected': ''}}>WORKERS</option>
                                                    <option value="QUARTERS" {{$agency->additional_buildings == "QUARTERS" ? 'selected': ''}}>QUARTERS</option>
                                                    <option value="GARAGE" {{$agency->additional_buildings == "GARAGE" ? 'selected': ''}}>GARAGE</option>
                                            </select>
                                        </div>

                                        <!-- SWIMMING POOL -->
                                        <div>
                                            <x-label for="SWIMMING POOL"
                                                     :value="__('ADDITIONAL BUILDINGS')" />
                                            <select id="swimming_pool"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="swimming_pool">
                                                    <option value="POOL" {{$agency->swimming_pool == "POOL" ? 'selected': ''}}>POOL</option>
                                                    <option value="NO POOL" {{$agency->swimming_pool == "NO POOL" ? 'selected': ''}}>NO POOL</option>
                                            </select>
                                        </div>


                                        <!-- LAYOUT OF OFFICE SPACE -->
                                        <div>
                                            <x-label for="layout_of_office_space"
                                                     :value="__('LAYOUT OF OFFICE SPACE')" />
                                            <select id="layout_of_office_space"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="layout_of_office_space">
                                                    <option value="PARTIONED" {{$agency->layout_of_office_space == "PARTIONED" ? 'selected': ''}}>PARTIONED</option>
                                                    <option value="OPEN SPACE" {{$agency->layout_of_office_space == "OPEN SPACE" ? 'selected': ''}}>OPEN SPACE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



{{--this is a date and Time Section        --}}

                                <div class="pt-6">
                                    <div class="grid grid-cols-5 gap-4">

                                        <!-- PARKING -->
                                        <div>
                                            <x-label for="parking"
                                                     :value="__('PARKING')" />
                                            <select id="parking"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="parking">
                                                    <option value="PLENTY" {{$agency->parking == "PLENTY" ? 'selected': ''}}>PLENTY</option>
                                                    <option value="MODERATE" {{$agency->parking == "MODERATE" ? 'selected': ''}}>MODERATE</option>
                                                    <option value="LITTLE" {{$agency->parking == "LITTLE" ? 'selected': ''}}>LITTLE</option>
                                                    <option value="NO PARKING" {{$agency->parking == "NO PARKING" ? 'selected': ''}}>NO PARKING</option>
                                            </select>
                                        </div>

                                         <!-- PETS -->
                                        <div>
                                            <x-label for="pets"
                                                     :value="__('PETS')" />
                                            <select id="pets"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="pets">
                                                    <option value="PET FRIENDLY" {{$agency->pets == "PET FRIENDLY" ? 'selected': ''}}>PET FRIENDLY</option>
                                                    <option value="NO PET" {{$agency->pets == "NO PET" ? 'selected': ''}}>NO PET</option>
                                            </select>
                                        </div>

                                        <!-- ELECTRICITY / WATER -->
                                        <div>
                                            <x-label for="electricity"
                                                     :value="__('ELECTRICITY')" />
                                            <select id="electricity"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="electricity">
                                                    <option value="BACKUP POWER" {{$agency->electricity == "BACKUP POWER" ? 'selected': ''}}>BACKUP POWER</option>
                                                    <option value="NO BACKUP POWER" {{$agency->electricity == "NO BACKUP POWER" ? 'selected': ''}}>NO BACKUP POWER</option>
                                            </select>

                                            <x-label for="water"
                                                     :value="__('WATER')" />
                                            <select id="water"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="water">
                                                    <option value="BOREHOLE" {{$agency->water == "BOREHOLE" ? 'selected': ''}}>BOREHOLE</option>
                                                    <option value="COUNCIL WATER" {{$agency->water == "COUNCIL WATER" ? 'selected': ''}}>COUNCIL WATER</option>
                                                    <option value="WELL" {{$agency->water == "WELL" ? 'selected': ''}}>WELL</option>
                                                    <option value="COMMUNAL WATER" {{$agency->water == "COMMUNAL WATER" ? 'selected': ''}}>COMMUNAL WATER</option>
                                                    <option value="NO WATER" {{$agency->water == "NO WATER" ? 'selected': ''}}>NO WATER</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="pt-6">
                                    <div class="grid grid-cols-3 gap-4">

                                        <!-- surrounding and facilities -->
                                        <div>
                                            <x-label for="surroundings"
                                                     :value="__('SURROUNDINGS')" />
                                            <select id="surroundings"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings">
                                                    <option value="GARDENS" {{$agency->surroundings == "GARDENS" ? 'selected': ''}}>GARDENS</option>
                                                    <option value="PRIVATE BACKYARD" {{$agency->surroundings == "PRIVATE BACKYARD" ? 'selected': ''}}>PRIVATE BACKYARD</option>
                                                    <option value="NO BACKYARD" {{$agency->surroundings == "NO BACKYARD" ? 'selected': ''}}>NO BACKYARD</option>
                                            </select>

                                            <!-- surrounding facilities 1-->
                                            <x-label for="surroundings_facilities_1"
                                                     :value="__('SURROUNDING FACILITIES 1')" />
                                            <select id="surroundings_facilities_1"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_1">
                                                    <option value="NEARBY SOCIAL AMENITIES" {{$agency->surroundings_facilities_1 == "NEARBY SOCIAL AMENITIES" ? 'selected': ''}}>NEARBY SOCIAL AMENITIES</option>
                                                    <option value="NO NEARBY SOCIAL AMENITIES" {{$agency->surroundings_facilities_1 == "NO NEARBY SOCIAL AMENITIES" ? 'selected': ''}}>NO NEARBY SOCIAL AMENITIES</option>
                                            </select>

                                            <!-- surrounding facilities 2-->
                                            <x-label for="surroundings_facilities_2"
                                                     :value="__('SURROUNDING FACILITIES 2')" />
                                            <select id="surroundings_facilities_2"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_2">
                                                    <option value="SHOPPING MALL" {{$agency->surroundings_facilities_2 == "SHOPPING MALL" ? 'selected': ''}}>SHOPPING MALL</option>
                                                    <option value="SHOPPING CENTRE" {{$agency->surroundings_facilities_2 == "SHOPPING CENTRE" ? 'selected': ''}}>SHOPPING CENTRE</option>
                                                    <option value="STAND ALONE SHOP" {{$agency->surroundings_facilities_2 == "STAND ALONE SHOP" ? 'selected': ''}}>STAND ALONE SHOP</option>
                                            </select>

                                            <!-- surrounding facilities 3-->
                                            <x-label for="surroundings_facilities_3"
                                                     :value="__('SURROUNDING FACILITIES 3')" />
                                            <select id="surroundings_facilities_3"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_3">
                                                    <option value="SCHOOL" {{$agency->surroundings_facilities_3 == "SCHOOL" ? 'selected': ''}}>SCHOOL</option>
                                                    <option value="NO SCHOOL" {{$agency->surroundings_facilities_3 == "NO SCHOOL" ? 'selected': ''}}>NO SCHOOL</option>
                                            </select>

                                            <!-- surrounding facilities 4 -->
                                            <x-label for="surroundings_facilities_4"
                                                     :value="__('SURROUNDING FACILITIES 4')" />
                                            <select id="surroundings_facilities_4"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_4">
                                                    <option value="OFFICE BUILDINGS" {{$agency->surroundings_facilities_4 == "OFFICE BUILDINGS" ? 'selected': ''}}>OFFICE BUILDINGS</option>
                                                    <option value="NO OFFICE BUILDINGS" {{$agency->surroundings_facilities_4 == "NO OFFICE BUILDINGS" ? 'selected': ''}}>NO OFFICE BUILDINGS</option>
                                            </select>

                                            <!-- surrounding facilities 5-->
                                            <x-label for="surroundings_facilities_5"
                                                     :value="__('SURROUNDING FACILITIES 5')" />
                                            <select id="surroundings_facilities_5"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings_facilities_5">
                                                    <option value="BUS STATION" {{$agency->surroundings_facilities_5 == "BUS STATION" ? 'selected': ''}}>BUS STATION</option>
                                                    <option value="NO BUS STATION" {{$agency->surroundings_facilities_5 == "NO BUS STATION" ? 'selected': ''}}>NO BUS STATION</option>
                                                    <option value="TAXI RANK" {{$agency->surroundings_facilities_5 == "TAXI RANK" ? 'selected': ''}}>TAXI RANK</option>
                                                    <option value="NO TAXI RANK" {{$agency->surroundings_facilities_5 == "NO TAXI RANK" ? 'selected': ''}}>NO TAXI RANK</option>
                                            </select>
                                        </div>

                                        <div>
                                            {{-- RENT PRICE / SALE PRICE MARKET VALUE--}}
                                            <div>
                                                <x-label for="rent_price_k"
                                                         :value="__('RENT PRICE (K)')" />

                                                <x-input id="rent_price_k"
                                                         class="block mt-1 w-full"
                                                         type="number"
                                                         name="rent_price_k"
                                                         value="{{$agency->rent_price_k}}" required autofocus />

                                                <x-label for="sale_price_market_value_k"
                                                         :value="__('SALE PRICE MARKET VALUE (K)')" />

                                                <x-input id="sale_price_market_value_k"
                                                         class="block mt-1 w-full"
                                                         type="number"
                                                         name="sale_price_market_value_k"
                                                         value="{{$agency->sale_price_market_value_k}}" required autofocus />
                                            </div>

                                        </div>


                                        <div>
                                            {{-- RENT PRICE / SALE PRICE MARKET VALUE--}}
                                            <div>
                                                <x-label for="rent_price_usd"
                                                         :value="__('RENT PRICE ($)')" />

                                                <x-input id="rent_price_usd"
                                                         class="block mt-1 w-full"
                                                         type="number"
                                                         name="rent_price_usd"
                                                         value="{{$agency->rent_price_usd}}" required autofocus />

                                                <x-label for="sale_price_market_value_usd"
                                                         :value="__('SALE PRICE MARKET VALUE ($)')" />

                                                <x-input id="sale_price_market_value_usd"
                                                         class="block mt-1 w-full"
                                                         type="number"
                                                         name="sale_price_market_value_usd"
                                                         value="{{$agency->sale_price_market_value_usd}}" required autofocus />
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- Add Button-->
                                <div class="flex items-center justify-end mt-4 ">

                                    <x-button class="cursor-pointer ml-4">
                                        {{ __('SAVE') }}
                                    </x-button>
                                </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>