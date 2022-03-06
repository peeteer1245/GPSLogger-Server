<?php

namespace App\Http\Controllers;

use App\Models\GPSEntry;
use Illuminate\Http\Request;

class GPSEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gps_entry = new GPSEntry;

        $gps_entry->user = $request->user()->id;

        foreach ($request->all() as $key => $value)
        {
            switch ($key)
            {
                case "lat":
                    $gps_entry->latitude = $value;
                    break;
                
                case "lon":
                    $gps_entry->longitude = $value;
                    break;
                
                case "sat":
                    $gps_entry->satellite_count = $value;
                    break;
                
                case "desc":
                    $gps_entry->description = $value;
                    break;
                
                case "alt":
                    $gps_entry->altitude = $value;
                    break;
                
                case "acc":
                    $gps_entry->accuracy = $value;
                    break;
                
                case "dir":
                    $gps_entry->direction = $value;
                    break;
                
                case "prov":
                    $gps_entry->provider = $value;
                    break;
                
                case "spd":
                    $gps_entry->speed = $value;
                    break;
                
                case "timestamp":
                    $gps_entry->timestamp = $value;
                    break;
                
                case "timeoffset":
                    $gps_entry->timeoffset = $value;
                    break;
                
                case "time":
                    $gps_entry->time = $value;
                    break;
                
                case "date":
                    $gps_entry->date = $value;
                    break;
                
                case "starttimestamp":
                    $gps_entry->starttimestamp = $value;
                    break;
                
                case "batt":
                    $gps_entry->battery_level = $value;
                    break;
                
                case "ischarging":
                    $gps_entry->is_charging = strtolower($value) == 'true';
                    break;
                
                case "aid":
                    $gps_entry->android_id = $value;
                    break;
                
                case "ser":
                    $gps_entry->build_serial = $value;
                    break;
                
                case "filename":
                    $gps_entry->filename = $value;
                    break;
                
                case "profile":
                    $gps_entry->profile = $value;
                    break;
                
                case "hdop":
                    $gps_entry->horizontal_dilution = $value;
                    break;
                
                case "vdop":
                    $gps_entry->vertical_dilution = $value;
                    break;
                
                case "pdop":
                    $gps_entry->positional_dilution = $value;
                    break;
                
                case "dist":
                    $gps_entry->distance = $value;
                    break;
            }
        }

        $gps_entry->save();

        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
