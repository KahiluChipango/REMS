<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $agencies = Agency::where('job_number', 'LIKE', '%'.$search.'%')
                ->orWhere('rent_sale', 'LIKE', '%'.$search.'%')
                ->orWhere('web', 'LIKE', '%'.$search.'%')
                ->orWhere('agent_in_charge', 'LIKE', '%'.$search.'%')
                ->orWhere('service_line', 'LIKE', '%'.$search.'%')
                ->orWhere('date_of_instruction', 'LIKE', '%'.$search.'%')
                ->orWhere('client_name', 'LIKE', '%'.$search.'%')
                ->orWhere('client_contact_number', 'LIKE', '%'.$search.'%')
                ->orWhere('email', 'LIKE', '%'.$search.'%')
                ->orWhere('property_address', 'LIKE', '%'.$search.'%')
                ->orWhere('google_cordinates', 'LIKE', '%'.$search.'%')
                ->orWhere('type_of_property', 'LIKE', '%'.$search.'%')
                ->orWhere('type_of_building', 'LIKE', '%'.$search.'%')
                ->orWhere('type_of_building_2', 'LIKE', '%'.$search.'%')
                ->orWhere('building_height', 'LIKE', '%'.$search.'%')
                ->orWhere('number_of_bedrooms', 'LIKE', '%'.$search.'%')
                ->orWhere('size_of_rooms', 'LIKE', '%'.$search.'%')
                ->orWhere('number_of_bathrooms', 'LIKE', '%'.$search.'%')
                ->orWhere('master_self_contained', 'LIKE', '%'.$search.'%')
                ->orWhere('furnished', 'LIKE', '%'.$search.'%')
                ->orWhere('quality_of_finishes', 'LIKE', '%'.$search.'%')
                ->orWhere('land_size', 'LIKE', '%'.$search.'%')
                ->orWhere('guest_house', 'LIKE', '%'.$search.'%')
                ->orWhere('pool_house_club', 'LIKE', '%'.$search.'%')
                ->orWhere('gym', 'LIKE', '%'.$search.'%')
                ->orWhere('guard_house', 'LIKE', '%'.$search.'%')
                ->orWhere('workers_quarters', 'LIKE', '%'.$search.'%')
                ->orWhere('garage', 'LIKE', '%'.$search.'%')
                ->orWhere('swimming_pool', 'LIKE', '%'.$search.'%')
                ->orWhere('layout_of_office_space', 'LIKE', '%'.$search.'%')
                ->orWhere('parking', 'LIKE', '%'.$search.'%')
                ->orWhere('pets', 'LIKE', '%'.$search.'%')
                ->orWhere('electricity', 'LIKE', '%'.$search.'%')
                ->orWhere('water', 'LIKE', '%'.$search.'%')
                ->orWhere('surroundings', 'LIKE', '%'.$search.'%')
                ->orWhere('recreational_facilities', 'LIKE', '%'.$search.'%')
                ->orWhere('shopping', 'LIKE', '%'.$search.'%')
                ->orWhere('schools', 'LIKE', '%'.$search.'%')
                ->orWhere('nearby_offices', 'LIKE', '%'.$search.'%')
                ->orWhere('transport', 'LIKE', '%'.$search.'%')
                ->orWhere('rent_price_k', 'LIKE', '%'.$search.'%')
                ->orWhere('rent_price_usd', 'LIKE', '%'.$search.'%')
                ->orWhere('rent_price_usd', 'LIKE', '%'.$search.'%')
                ->orWhere('sale_price_market_value_usd', 'LIKE', '%'.$search.'%')
                ->orWhere('status', 'LIKE', '%'.$search.'%')
                ->orWhere('sold_let', 'LIKE', '%'.$search.'%')
                ->orWhere('name_of_new_owner_tenant', 'LIKE', '%'.$search.'%')
                ->orWhere('phone_number', 'LIKE', '%'.$search.'%')
                ->orWhere('email_address', 'LIKE', '%'.$search.'%')
                ->orWhere('sale_date_lease_start_date', 'LIKE', '%'.$search.'%')
                ->paginate(20);

        } else {
            $agencies = Agency::paginate(10);

        }
        return view("valmaster.agency.index")
            ->with('agencies', $agencies);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('valmaster.agency.create-record');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'job_number' => ['required', 'string'],
           'rent_sale' => ['required'],
           'web' => ['required'],
           'agent_in_charge' => ['required'],
           'service_line' => ['required'],
           'date_of_instruction' => ['required'],
           'client_name' => ['required'],
           'client_contact_number' => ['required'],
           'email' => ['required'],
           'property_address' => ['required'],
           'google_cordinates' => ['required'],
           'type_of_property' => ['required'],
           'type_of_building' => ['required'],
           'type_of_building_2' => ['required'],
           'building_height' => ['required'],
           'number_of_bedrooms' => ['required'],
           'size_of_rooms' => ['required'],
           'number_of_bathrooms' => ['required'],
           'master_self_contained' => ['required'],
           'furnished' => ['required'],
           'quality_of_finishes' => ['required'],
           'land_size' => ['required'],
           'pool_house_club'=> ['required'],
           'gym'=> ['required'],
           'guard_house'=> ['required'],
           'workers_quarters'=> ['required'],
           'garage'=> ['required'],
           'guest_house' => ['required'],
           'swimming_pool' => ['required'],
           'layout_of_office_space' => ['required'],
           'parking' => ['required'],
           'pets' => ['required'],
           'electricity' => ['required'],
           'water' => ['required'],
           'surroundings' => ['required'],
           'recreational_facilities' => ['required'],
           'shopping' => ['required'],
           'schools' => ['required'],
           'nearby_offices' => ['required'],
           'transport' => ['required'],
           'rent_price_k' => ['required'],
           'rent_price_usd' => ['required'],
           'sale_price_market_value_k' => ['required'],
           'sale_price_market_value_usd' => ['required'],
           'status' => ['required'],
           'sold_let' => ['required'],
           'name_of_new_owner_tenant' => ['required'],
           'phone_number' => ['required'],
           'email_address' => ['required'],
           'sale_date_lease_start_date' => ['required'],
       ]);

       /*dd($request->all());*/
       $agency = new Agency();
       $agency->fill($request->all());
       $agency->save();

       return redirect(route('valmaster.agency.index'))->with('Add', 'Record has been saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('valmaster.agency.summary-templete',
            [
                'agency' => Agency::find($id)
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('valmaster.agency.edit',
            [
                'agency' => Agency::find($id)
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agency = Agency::findOrFail($id);

        $agency->update($request->all());
        return redirect(route('valmaster.agency.index'))->with('Update', 'You Have Successfully Updated '.$agency->client_name.' Job #: '.$agency->job_number);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agency::destroy($id);
        return redirect(route("valmaster.agency.index"))->with('delete', 'Record has Been Deleted ');
    }

    public function showSearch()
    {
        return view('valmaster.agency.advanced-search');
    }


    public function advanceSearch(Request $request)
    {
         /*$request ?? "";*/
        if ($request != "") {
            $agencies = Agency::where('job_number', 'LIKE', '%'.$request['job_number'].'%')
                ->Where('rent_sale', 'LIKE', '%'.$request['rent_sale'].'%')
                ->Where('web', 'LIKE', '%'.$request['web'].'%')
                ->Where('agent_in_charge', 'LIKE', '%'.$request['agent_in_charge'].'%')
                ->Where('service_line', 'LIKE', '%'.$request['service_line'].'%')
                ->Where('date_of_instruction', 'LIKE', '%'.$request['date_of_instruction'].'%')
                ->Where('client_name', 'LIKE', '%'.$request['client_name'].'%')
                ->Where('client_contact_number', 'LIKE', '%'.$request['client_contact_number'].'%')
                ->Where('email', 'LIKE', '%'.$request['email'].'%')
                ->Where('property_address', 'LIKE', '%'.$request['property_address'].'%')
                ->Where('google_cordinates', 'LIKE', '%'.$request['google_cordinates'].'%')
                ->Where('type_of_property', 'LIKE', '%'.$request['type_of_property'].'%')
                ->Where('type_of_building', 'LIKE', '%'.$request['type_of_building'].'%')
                ->Where('type_of_building_2', 'LIKE', '%'.$request['type_of_building_2'].'%')
                ->Where('building_height', 'LIKE', '%'.$request['building_height'].'%')
                ->Where('number_of_bedrooms', 'LIKE', '%'.$request['number_of_bedrooms'].'%')
                ->Where('size_of_rooms', 'LIKE', '%'.$request['size_of_rooms'].'%')
                ->Where('number_of_bathrooms', 'LIKE', '%'.$request['number_of_bathrooms'].'%')
                ->Where('master_self_contained', 'LIKE', '%'.$request['master_self_contained'].'%')
                ->Where('furnished', 'LIKE', '%'.$request['master_self_contained'].'%')
                ->Where('quality_of_finishes', 'LIKE', '%'.$request['quality_of_finishes'].'%')
                ->Where('land_size', 'LIKE', '%'.$request['land_size'].'%')
                ->Where('guest_house', 'LIKE', '%'.$request['guest_house'].'%')
                ->Where('pool_house_club', 'LIKE', '%'.$request['pool_house_club'].'%')
                ->Where('gym', 'LIKE', '%'.$request['gym'].'%')
                ->Where('guard_house', 'LIKE', '%'.$request['guard_house'].'%')
                ->Where('workers_quarters', 'LIKE', '%'.$request['workers_quarters'].'%')
                ->Where('garage', 'LIKE', '%'.$request['garage'].'%')
                ->Where('swimming_pool', 'LIKE', '%'.$request['swimming_pool'].'%')
                ->Where('layout_of_office_space', 'LIKE', '%'.$request['layout_of_office_space'].'%')
                ->Where('parking', 'LIKE', '%'.$request['parking'].'%')
                ->Where('pets', 'LIKE', '%'.$request['pets'].'%')
                ->Where('electricity', 'LIKE', '%'.$request['electricity'].'%')
                ->Where('water', 'LIKE', '%'.$request['water'].'%')
                ->Where('surroundings', 'LIKE', '%'.$request['surroundings'].'%')
                ->Where('recreational_facilities', 'LIKE', '%'.$request['recreational_facilities'].'%')
                ->Where('shopping', 'LIKE', '%'.$request['shopping'].'%')
                ->Where('schools', 'LIKE', '%'.$request['schools'].'%')
                ->Where('nearby_offices', 'LIKE', '%'.$request['nearby_offices'].'%')
                ->Where('transport', 'LIKE', '%'.$request['transport'].'%')
                ->Where('rent_price_k', 'LIKE', '%'.$request['rent_price_k'].'%')
                ->Where('rent_price_usd', 'LIKE', '%'.$request['rent_price_usd'].'%')
                ->Where('rent_price_usd', 'LIKE', '%'.$request['rent_price_usd'].'%')
                ->Where('sale_price_market_value_usd', 'LIKE', '%'.$request['sale_price_market_value_usd'].'%')
                ->Where('status', 'LIKE', '%'.$request['status'].'%')
                ->Where('sold_let', 'LIKE', '%'.$request['sold_let'].'%')
                ->Where('name_of_new_owner_tenant', 'LIKE', '%'.$request['name_of_new_owner_tenant'].'%')
                ->Where('phone_number', 'LIKE', '%'.$request['phone_number'].'%')
                ->Where('email_address', 'LIKE', '%'.$request['email_address'].'%')
                ->Where('sale_date_lease_start_date', 'LIKE', '%'.$request['sale_date_lease_start_date'].'%')
                ->paginate(20);

        } else {
            $agencies = Agency::paginate(10);

        }
        return view("valmaster.agency.index")
            ->with('agencies', $agencies);
    }

    public function saveSummary($id){
        $agency = Agency::find($id);
        $pdf = PDF::loadView('valmaster.agency.summary', [
            'agency' => Agency::find($id)
        ]);
        return $pdf->download( 'Summary - '.$agency->id.'.'.$agency->job_number.'.pdf');
    }

    public function sendSummary($id){
        $agency = Agency::find($id);
        $pdf = PDF::loadView('valmaster.agency.receipt.summury',  [
            'agency' => Agency::find($id),
            'user' => auth()->user()->name
        ]);

        $data["title"] = "Sherwood Greene Properties Limited";

        Mail::send('valmaster.agency.send.emails.summury',  $data, function($message)use($agency, $pdf) {
            $message->to($agency->agency_email)
                ->subject('Receipt')
                ->attachData($pdf->output(), 'Receipt - '.$agency->branch.$agency->id.'.pdf');
        });
    }
}
