<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Venue;
use App\Libraries\SportMenuDataPreparation;
use Validator;
   
class FootballVenueAPIController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $venues = Venue::select('*')
                    ->leftJoin('sport_venues', 'venues.id', '=', 'sport_venues.venue_id')
                    ->where('sport_venues.sport_id', 1)
                    ->get();
    
        foreach ($venues as $venues) {
            $data[] = SportMenuDataPreparation::fetchSingle($venues);
        }

        return $this->sendResponse($data, 'Venues retrieved successfully.');
    }
}