<x-app-layout>
    <x-slot name="header">
        <x-nav-links.agency></x-nav-links.agency>
    </x-slot>

    <div class="flex flex-col pt-4">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class=" divide-y divide-dashed shadow overflow-hidden border border-indigo-400 sm:rounded-lg ">


                    <x-table.table>
                        <x-slot name="header">
                            <x-table.header>#</x-table.header>
                            <x-table.header>Job #</x-table.header>
                            <x-table.header>Rent/Sale</x-table.header>
                            <x-table.header>Web</x-table.header>
                            <x-table.header>Agent in Charge</x-table.header>
                            <x-table.header>Service Line</x-table.header>
                            <x-table.header>Date of Instruction</x-table.header>
                            <x-table.header>Client Name</x-table.header>
                            <x-table.header>Client Contact Number</x-table.header>
                            <x-table.header>Email</x-table.header>
                            <x-table.header>Property Address</x-table.header>
                            <x-table.header>Google Cordinates</x-table.header>
                            <x-table.header>Type of Property</x-table.header>
                            <x-table.header>Type of Building 1</x-table.header>
                            <x-table.header>Type of Building 2</x-table.header>
                            <x-table.header>Building Height</x-table.header>
                            <x-table.header>Number of Bedrooms</x-table.header>
                            <x-table.header>Size of Rooms</x-table.header>
                            <x-table.header>Number of Bathrooms</x-table.header>
                            <x-table.header>Master Self Contained</x-table.header>
                            <x-table.header>Furnished</x-table.header>
                            <x-table.header>Quality of Finishes</x-table.header>
                            <x-table.header>Land Size</x-table.header>
                            <x-table.header>Additional Buildings</x-table.header>
                            <x-table.header>Swimming Pool</x-table.header>
                            <x-table.header>Layout of Office Space</x-table.header>
                            <x-table.header>Parking</x-table.header>
                            <x-table.header>Pets</x-table.header>
                            <x-table.header>Electricity</x-table.header>
                            <x-table.header>Water</x-table.header>
                            <x-table.header>Surroundings</x-table.header>
                            <x-table.header>Surroundings Facilities 1</x-table.header>
                            <x-table.header>Surroundings Facilities 2</x-table.header>
                            <x-table.header>Surroundings Facilities 3</x-table.header>
                            <x-table.header>Surroundings Facilities 4</x-table.header>
                            <x-table.header>Surroundings Facilities 5</x-table.header>
                            <x-table.header>Rent Price K</x-table.header>
                            <x-table.header>Rent Price $</x-table.header>
                            <x-table.header>Sale Price/ Market Value K</x-table.header>
                            <x-table.header>Sale Price/ Market Value $</x-table.header>
                            <x-table.header>Action</x-table.header>

                        </x-slot>
                        <?php $i = 0?>
                        @foreach($agencies as $agency)
                             <tr>

                                <x-table.column>{{++$i}}</x-table.column>
                                <x-table.column>{{$agency->job_number}}</x-table.column>
                                <x-table.column>{{$agency->rent_sale}}</x-table.column>
                                <x-table.column>
                                    <a href="https://{{$agency->web}}">
                                        {{$agency->web}}
                                    </a>
                                </x-table.column>
                                <x-table.column>{{$agency->agent_in_charge}}</x-table.column>
                                <x-table.column>{{$agency->service_line}}</x-table.column>
                                <x-table.column>{{$agency->date_of_instruction}}</x-table.column>
                                <x-table.column>{{$agency->client_name}}</x-table.column>
                                <x-table.column>{{$agency->client_contact_number}}</x-table.column>
                                <x-table.column>{{$agency->email}}</x-table.column>
                                <x-table.column>{{$agency->property_address}}</x-table.column>
                                <x-table.column>{{$agency->google_cordinates}}</x-table.column>
                                <x-table.column>{{$agency->type_of_property}}</x-table.column>
                                <x-table.column>{{$agency->type_of_building}}</x-table.column>
                                <x-table.column>{{$agency->type_of_building_2}}</x-table.column>
                                <x-table.column>{{$agency->building_height}}</x-table.column>
                                <x-table.column>{{$agency->number_of_bedrooms}}</x-table.column>
                                <x-table.column>{{$agency->size_of_rooms}}</x-table.column>
                                <x-table.column>{{$agency->number_of_bathrooms}}</x-table.column>
                                <x-table.column>{{$agency->master_self_contained}}</x-table.column>
                                <x-table.column>{{$agency->furnished}}</x-table.column>
                                <x-table.column>{{$agency->quality_of_finishes}}</x-table.column>
                                <x-table.column>{{$agency->land_size}}</x-table.column>
                                <x-table.column>{{$agency->additional_buildings}}</x-table.column>
                                <x-table.column>{{$agency->swimming_pool}}</x-table.column>
                                <x-table.column>{{$agency->layout_of_office_space}}</x-table.column>
                                <x-table.column>{{$agency->parking}}</x-table.column>
                                <x-table.column>{{$agency->pets}}</x-table.column>
                                <x-table.column>{{$agency->electricity}}</x-table.column>
                                <x-table.column>{{$agency->water}}</x-table.column>
                                <x-table.column>{{$agency->surroundings}}</x-table.column>
                                <x-table.column>{{$agency->surroundings_facilities_1}}</x-table.column>
                                <x-table.column>{{$agency->surroundings_facilities_2}}</x-table.column>
                                <x-table.column>{{$agency->surroundings_facilities_3}}</x-table.column>
                                <x-table.column>{{$agency->surroundings_facilities_4}}</x-table.column>
                                <x-table.column>{{$agency->surroundings_facilities_5}}</x-table.column>
                                <x-table.column>K{{$agency->rent_price_k}}</x-table.column>
                                <x-table.column>${{$agency->rent_price_usd}}</x-table.column>
                                <x-table.column>K{{$agency->sale_price_market_value_k}}</x-table.column>
                                <x-table.column>${{$agency->sale_price_market_value_usd}}</x-table.column>
                                <x-table.column>
                                    {{--Edit Button--}}
                                    <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                       href="{{ route('valmaster.agency.edit', $agency->id) }}"
                                       role="button">
                                        Edit
                                    </a>

                                    {{--Delete Button--}}
                                    <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500/75 hover:bg-red-500/100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            onclick="event.preventDefault();
                                                document.getElementById('delete-user-form-{{$agency->id}}').submit()">
                                        DELETE
                                    </button>

                                    <form id="delete-user-form-{{ $agency->id }}" action="{{ route('valmaster.agency.destroy', $agency->id) }}" method="POST" style="display: none">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </x-table.column>

                            </tr>
                        @endforeach
                    </x-table.table>
                    {{$agencies->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
