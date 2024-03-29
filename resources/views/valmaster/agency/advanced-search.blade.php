
<x-app-layout>
    <x-slot name="header">
        <x-nav-links.agency></x-nav-links.agency>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 justify-center py-2 px-2 mb-2 text-center text-3xl font-bold text-stone-200">
                    Advanced Search
                </div>
                <div class="p-6 bg-amber-200 border-b border-gray-200 ">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form  action="{{ route('valmaster.agency.advanced-search') }}">
                            @csrf
                            <!-- Name -->
                            {{--this section for client details--}}
                                  <div class="pt-6">
                                      <div class="grid grid-cols-4 gap-sm-2 ">
                                          {{--job number--}}
                                          <div>
                                              <x-label for="job_number"
                                                       :value="__('JOB NUMBER')" />

                                              <x-input id="job_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="job_number"/>
                                          </div>


                                          <!-- Select Branch -->
                                          <div>
                                              <x-label for="rent_sale"
                                                       :value="__('RENT/SALE')" />
                                              <select name="rent_sale"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="rent_sale">
                                                  <option value=""></option>
                                                  <option value="SALE">Sale</option>
                                                  <option value="RENT">Rent</option>
                                              </select>
                                          </div>


                                            <!--Web Reference Number -->
                                          <div>
                                              <x-label for="Web"
                                                       :value="__('Web Reference Number')" />

                                              <x-input id="web"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="web"/>
                                          </div>

                                          <!-- AGENT IN CHARGE -->
                                          <div>
                                              <x-label for="agent_in_charge"
                                                       :value="__('AGENT IN CHARGE')" />

                                              <x-input id="agent_in_charge"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="agent_in_charge"/>
                                          </div>


                                          <!-- Service Line -->
                                          <div>
                                              <x-label for="service_line"
                                                       :value="__('SERVICE LINE')" />
                                              <select name="service_line"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="service_line">
                                                  <option value=""></option>
                                                  <option value="N/A">N/A</option>
                                                  <option value="ESTATE AGENCY">Estate Agency</option>
                                                  <option value="VALUATION">Valuation</option>
                                                  <option value="PROPERTY MGT">Property MGT</option>
                                                  <option value="CONSULTANCY">Consultancy</option>
                                              </select>
                                          </div>


                                          <!-- DATE OF INSTRUCTION-->
                                          <div>
                                              <x-label for="date_of_instruction"
                                                       :value="__('DATE OF INSTRUCTION')" />

                                              <x-input id="date_of_instruction"
                                                       class="block mt-1 w-full"
                                                       type="date"
                                                       name="date_of_instruction" />
                                          </div>


                                          <!-- Client Name -->
                                          <div>
                                              <x-label for="client_name"
                                                       :value="__('CLIENT NAME')" />

                                              <x-input id="client_name"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="client_name"/>
                                          </div>


                                          <!-- Client Contact Number -->
                                          <div>
                                              <x-label for="client_contact_number"
                                                       :value="__('CLIENT CONTACT NUMBER')" />

                                              <x-input id="client_contact_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="client_contact_number" />
                                          </div>
                                      </div>
                                  </div>

                                {{--<div class="pt-8">
                                    <div class="grid grid-cols-4 gap-sm-2">

                                    </div>
                                </div>--}}
                                <div class="pt-8">
                                    <div class="grid grid-cols-4 gap-sm-2 ">
                                        <!-- Email -->
                                        <div>
                                            <x-label for="email"
                                                     :value="__('EMAIL')" />

                                            <x-input id="email"
                                                     class="block mt-1 w-full"
                                                     type="email"
                                                     name="email" />
                                        </div>
                                        {{-- Property Address--}}
                                        <div>
                                            <x-label for="property_address"
                                                     :value="__('PROPERTY ADDRESS')" />

                                            <x-input id="property_address"
                                                     class="block mt-1 w-full"
                                                     type="text"
                                                     name="property_address"/>
                                        </div>

                                        {{-- Property Address--}}
                                        <div>
                                            <x-label for="google_cordinates"
                                                     :value="__('GOOGLE CORDINATES')" />

                                            <x-input id="google_cordinates"
                                                     class="block mt-1 w-full"
                                                     type="text"
                                                     name="google_cordinates" />
                                        </div>


                                        <!-- TYPE OF PROPERTY -->
                                        <div>
                                            <x-label for="type_of_property"
                                                     :value="__('TYPE OF PROPERTY')" />
                                            <select id="type_of_property"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="type_of_property">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="Residential">Residential</option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Industrial">Industrial</option>
                                                <option value="Bare Land">Bare Land</option>
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
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="HOUSE">HOUSE</option>
                                                <option value="APARTMENT">APARTMENT</option>
                                                <option value="APARTMENTS">APARTMENTS</option>
                                                <option value="FLAT">FLAT</option>
                                                <option value="FLATS">FLATS</option>
                                                <option value="OFFICES">OFFICES</option>
                                                <option value="RETAIL">RETAIL</option>
                                                <option value="SHOWROOM">SHOWROOM</option>
                                                <option value="WAREHOUSE">WAREHOUSE</option>
                                                <option value="FACTORY">FACTORY</option>
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
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="STAND ALONE">STAND ALONE</option>
                                                <option value="COMPLEX">COMPLEX</option>
                                                <option value="FLATS">FLATS</option>
                                                <option value="SEMI DETACHED">SEMI DETACHED</option>
                                                <option value="BLOCK OF FLATS">BLOCK OF FLATS</option>
                                                <option value="BLOCK OF APARTMENTS">BLOCK OF APARTMENTS</option>
                                                <option value="COMPLEX OF HOUSES">COMPLEX OF HOUSES</option>
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
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="SINGLE STORY">SINGLE STORY</option>
                                                <option value="DOUBLE STORY">DOUBLE STORY</option>
                                                <option value="GROUND FLOOR">GROUND FLOOR</option>
                                                <option value="UPPER FLOOR">UPPER FLOOR</option>
                                                <option value="HIGHRISE">HIGHRISE</option>
                                            </select>
                                        </div>

                                        {{-- NUMBER OF BEDROOMS--}}
                                        <div>
                                            <x-label for="number_of_bedrooms"
                                                     :value="__('NUMBER OF BEDROOMS')" />

                                            <x-input id="number_of_bedrooms"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="number_of_bedrooms"/>
                                        </div>
                                    </div>
                                </div>


                                    <div class="pt-8">
                                      <div class="grid grid-cols-4 gap-sm-2">
                                          <!-- SIZE OF ROOMS -->
                                          <div>
                                              <x-label for="size_of_rooms"
                                                       :value="__('SIZE OF ROOMS')" />
                                              <select id="size_of_rooms"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="size_of_rooms">
                                                  <option value=""></option>
                                                  <option value="N/A">N/A</option>
                                                  <option value="BIG">BIG</option>
                                                  <option value="MEDIUM">MEDIUM</option>
                                                  <option value="SMALL">SMALL</option>
                                              </select>
                                          </div>

                                          {{-- NUMBER OF BATHROOMS--}}
                                          <div>
                                              <x-label for="number_of_bathrooms"
                                                       :value="__('NUMBER OF BATHROOMS')" />

                                              <x-input id="number_of_bathrooms"
                                                       class="block mt-1 w-full"
                                                       type="number"
                                                       name="number_of_bathrooms"/>
                                          </div>


                                          {{-- MASTER SELF CONTAINED--}}
                                          <div>
                                              <x-label for="master_self_contained"
                                                       :value="__('MASTER SELF CONTAINED (Yes/No)')" />

                                              <select id="master_self_contained"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="master_self_contained">
                                                  <option value=""></option>
                                                  <option value="N/A">N/A</option>
                                                  <option value="YES">YES</option>
                                                  <option value="NO">NO</option>
                                              </select>
                                          </div>


                                          <!-- FURNISHED -->
                                          <div>
                                              <x-label for="furnished"
                                                       :value="__('FURNISHED')" />
                                              <select id="furnished"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="furnished">
                                                  <option value=""></option>
                                                  <option value="N/A">N/A</option>
                                                  <option value="FURNISHED">FURNISHED</option>
                                                  <option value="UNFURNISHED">UNFURNISHED</option>
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
                                                  <option value=""></option>
                                                  <option value="N/A">N/A</option>
                                                  <option value="ULTRA MODERN">ULTRA MODERN</option>
                                                  <option value="MODERN">MODERN</option>
                                                  <option value="MODERATE">MODERATE</option>
                                                  <option value="OLD">OLD</option>

                                              </select>
                                          </div>


                                          {{-- LAND SIZE--}}
                                          <div>
                                              <x-label for="land_size"
                                                       :value="__('LAND SIZE (Acres)')" />

                                              <x-input id="land_size"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="land_size"/>
                                          </div>


                                          <!-- GUEST HOUSE -->
                                          <div>
                                              <x-label for="guest_house"
                                                       :value="__('GUEST HOUSE (Yes/No)')" />
                                              <select id="guest_house"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="guest_house">
                                                  <option value=""></option>
                                                  <option value="N/A">N/A</option>
                                                  <option value="YES">YES</option>
                                                  <option value="NO">NO</option>
                                              </select>
                                          </div>

                                          <!-- SWIMMING POOL -->
                                          <div>
                                              <x-label for="swimming_pool"
                                                       :value="__('SWIMMING POOL')" />
                                              <select id="swimming_pool"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="swimming_pool">
                                                  <option value=""></option>
                                                  <option value="N/A">N/A</option>
                                                  <option value="YES">YES</option>
                                                  <option value="NO">NO</option>
                                              </select>
                                          </div>
                                      </div>
                                    </div>


                                <div class="pt-8">
                                    <div class="grid grid-cols-4 gap-sm-2">
                                        <!-- POOL HOUSE/CLUB -->
                                        <div>
                                            <x-label for="pool_house_club"
                                                     :value="__('POOL HOUSE/CLUB (yes/no)')" />
                                            <select id="pool_house_club"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="pool_house_club">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- GYM -->
                                        <div>
                                            <x-label for="gym"
                                                     :value="__('GYM (yes/no)')" />
                                            <select id="gym"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="gym">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- GUARD HOUSE -->
                                        <div>
                                            <x-label for="guard_house"
                                                     :value="__('GUARD HOUSE (yes/no)')" />
                                            <select id="guard_house"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="guard_house">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- WORKERS QUARTERS -->
                                        <div>
                                            <x-label for="workers_quarters"
                                                     :value="__('WORKERS QUARTERS (yes/no)')" />
                                            <select id="workers_quarters"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="workers_quarters">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- GARAGE -->
                                        <div>
                                            <x-label for="garage"
                                                     :value="__('GARAGE (yes/no)')" />
                                            <select id="garage"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="garage">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                                <option value="LOCKABLE">LOCKABLE</option>
                                                <option value="CARPORT">CARPORT</option>
                                                <option value="BOTH">BOTH</option>
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
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="PARTIONED">PARTIONED</option>
                                                <option value="OPEN SPACE">OPEN SPACE</option>
                                            </select>
                                        </div>

                                        <!-- PARKING -->
                                        <div>
                                            <x-label for="parking"
                                                     :value="__('PARKING')" />
                                            <select id="parking"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="parking">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="PLENTY">PLENTY</option>
                                                <option value="MODERATE">MODERATE</option>
                                                <option value="LITTLE">LITTLE</option>
                                                <option value="NO PARKING">NO PARKING</option>
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
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="PET FRIENDLY">PET FRIENDLY</option>
                                                <option value="NO PETS">NO PETS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-8">
                                    <div class="grid grid-cols-4 gap-sm-2">
                                        <!-- ELECTRICITY / WATER -->
                                        <div>
                                            <x-label for="electricity"
                                                     :value="__('ELECTRICITY')" />
                                            <select id="electricity"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="electricity">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="BACKUP POWER">BACKUP POWER</option>
                                                <option value="NO BACKUP POWER">NO BACKUP POWER</option>
                                                <option value="ZESCO">ZESCO</option>
                                                <option value="BOTH">BOTH</option>
                                            </select>
                                        </div>

                                        <div>
                                            <x-label for="water"
                                                     :value="__('WATER')" />
                                            <select id="water"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="water">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="BOREHOLE">BOREHOLE</option>
                                                <option value="COUNCIL WATER">COUNCIL WATER</option>
                                                <option value="WELL">WELL</option>
                                                <option value="COMMUNAL WATER">COMMUNAL WATER</option>
                                                <option value="NO WATER">NO WATER</option>
                                            </select>
                                        </div>

                                        <div>
                                            <!-- surrounding  -->
                                            <x-label for="surroundings"
                                                     :value="__('SURROUNDINGS')" />
                                            <select id="surroundings"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="surroundings">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="GARDENS">GARDENS</option>
                                                <option value="PRIVATE BACKYARD">PRIVATE BACKYARD</option>
                                                <option value="NO BACKYARD">NO BACKYARD</option>
                                            </select>
                                        </div>

                                        <div>
                                            <!-- RECREATIONAL FACILITIES-->
                                            <x-label for="recreational_facilities"
                                                     :value="__('RECREATIONAL FACILITIES')" />
                                            <select id="recreational_facilities"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="recreational_facilities">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="NEARBY SOCIAL AMENITIES">NEARBY SOCIAL AMENITIES</option>
                                                <option value="NO NEARBY SOCIAL AMENITIES">NO NEARBY SOCIAL AMENITIES</option>
                                            </select>
                                        </div>

                                        <div>
                                            <!-- SHOPPING -->
                                            <x-label for="shopping"
                                                     :value="__('SHOPPING')" />
                                            <select id="shopping"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="shopping">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="SHOPPING MALL">SHOPPING MALL</option>
                                                <option value="SHOPPING CENTRE">SHOPPING CENTRE</option>
                                                <option value="STAND ALONE SHOP">STAND ALONE SHOP</option>
                                            </select>
                                        </div>

                                        <div>
                                            <!--SCHOOLS-->
                                            <x-label for="schools"
                                                     :value="__('SCHOOLS')" />
                                            <select id="schools"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="schools">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="SCHOOL">SCHOOL</option>
                                                <option value="NO SCHOOL">NO SCHOOL</option>
                                            </select>
                                        </div>

                                        <div>
                                            <!-- NEARBY OFFICES -->
                                            <x-label for="nearby_offices"
                                                     :value="__('NEARBY OFFICES')" />
                                            <select id="nearby_offices"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="nearby_offices">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="OFFICE BUILDINGS">OFFICE BUILDINGS</option>
                                                <option value="NO OFFICE BUILDINGS">NO OFFICE BUILDINGS</option>
                                            </select>
                                        </div>

                                        <div>
                                            <!-- TRANSPORT-->
                                            <x-label for="transport"
                                                     :value="__('TRANSPORT')" />
                                            <select id="transport"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="transport">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="BUS STATION">BUS STATION</option>
                                                <option value="NO BUS STATION">NO BUS STATION</option>
                                                <option value="TAXI RANK">TAXI RANK</option>
                                                <option value="NO TAXI RANK">NO TAXI RANK</option>
                                                <option value="BOTH">BOTH</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>


{{--this is a date and Time Section        --}}

                                <div class="pt-8">
                                    <div class="grid grid-cols-4 gap-sm-2">
                                        <div>
                                            <x-label for="rent_price_k"
                                                     :value="__('RENT PRICE (K)')" />

                                            <x-input id="rent_price_k"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="rent_price_k"/>
                                        </div>

                                        {{-- RENT PRICE / SALE PRICE MARKET VALUE--}}
                                        <div>
                                            <x-label for="sale_price_market_value_k"
                                                     :value="__('SALE PRICE/ MARKET VALUE (K)')" />

                                            <x-input id="sale_price_market_value_k"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="sale_price_market_value_k" />
                                        </div>

                                        <div>
                                            <x-label for="rent_price_usd"
                                                     :value="__('RENT PRICE ($)')" />

                                            <x-input id="rent_price_usd"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="rent_price_usd" />
                                        </div>

                                        {{-- RENT PRICE / SALE PRICE MARKET VALUE--}}
                                        <div>
                                            <x-label for="sale_price_market_value_usd"
                                                     :value="__('SALE PRICE/ MARKET VALUE ($)')" />
                                            <x-input id="sale_price_market_value_usd"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="sale_price_market_value_usd"/>
                                        </div>

                                        <div>
                                            <!-- STATUS-->
                                            <x-label for="status"
                                                     :value="__('STATUS')" />
                                            <select id="status"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="status">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="AVAILABLE">AVAILABLE</option>
                                                <option value="LET">LET</option>
                                                <option value="OFFER PENDING">OFFER PENDING</option>
                                                <option value="SOLD">SOLD</option>
                                            </select>
                                        </div>

                                        <div>
                                            <!-- SOLD LET-->
                                            <x-label for="sold_let"
                                                     :value="__('SOLD/LET')" />
                                            <select id="sold_let"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="sold_let">
                                                <option value=""></option>
                                                <option value="N/A">N/A</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        {{-- NAME OF NEW OWNER--}}
                                        <div>
                                            <x-label for="name_of_new_owner_tenant"
                                                     :value="__('NAME OF NEW OWNER')" />

                                            <x-input id="name_of_new_owner_tenant"
                                                     class="block mt-1 w-full"
                                                     type="text"
                                                     name="name_of_new_owner_tenant" />
                                        </div>

                                        {{-- PHONE NUMBER--}}
                                        <div>
                                            <x-label for="phone_number"
                                                     :value="__('PHONE NUMBER')" />
                                            <x-input id="phone_number"
                                                     class="block mt-1 w-full"
                                                     type="text"
                                                     name="phone_number"/>
                                        </div>

                                    </div>
                                </div>



                                {{--OWNER EMAIL AND SALEDATE/ LEASE START DATE--}}

                                <div class="pt-8">
                                    <div class="grid grid-cols-4 gap-sm-2">

                                        <!-- Email ADDRESS-->
                                        <div>
                                            <x-label for="email_address"
                                                     :value="__('EMAIL ADDRESS')" />

                                            <x-input id="email_address"
                                                     class="block mt-1 w-full"
                                                     type="email"
                                                     name="email_address" />
                                        </div>

                                        <!-- SALE DATE/LEASE START DATE-->
                                        <div>
                                            <x-label for="sale_date_lease_start_date"
                                                     :value="__('SALE DATE/LEASE START DATE')" />

                                            <x-input id="sale_date_lease_start_date"
                                                     class="block mt-1 w-full"
                                                     type="date"
                                                     name="sale_date_lease_start_date" />
                                        </div>


                                    </div>
                                </div>

                                <!-- Add Button-->
                                <div class="flex items-center justify-end mt-4">

                                    <x-button class="cursor-pointer ml-4">
                                        {{ __('Search') }}
                                    </x-button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
