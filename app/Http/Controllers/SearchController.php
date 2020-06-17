<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $location = $request->location;
        $propertyType = $request->propertyType;
        $contractType = $request->contractType;
        $minBed = $request->minBed;
        $maxBeds = $request->maxBeds;
        $minPrice = $request->minPrice;
        $maxPrice = $request->maxPrice;

        $result = DB::table('property_main')
            ->when($location, function ($query) use ($location) {
                $query->whereIn('property_location', $location);
            })
            ->when($propertyType, function ($query) use ($propertyType) {
                $query->whereIn('property_type', $propertyType);
            })
            ->when($contractType, function ($query) use ($contractType) {
                $query->whereIn('property_contract_type', $contractType);
            })
            ->whereBetween('property_bedrooms', [$minBed, $maxBeds])
            ->whereBetween('property_price', [$minPrice, $maxPrice])
            ->get();


        foreach ($result as $row) {

            $serial = $row->property_serial;

            $resultIconDes = DB::table('property_ico_and_description')
                ->leftJoin('icon_gallery', 'icon_gallery.icon_gallery_id', '=', 'property_ico_and_description.icon_gallery_id')
                ->where('property_ico_and_description.property_serial', $serial)
                ->get();

            $row->resultIconDes = $resultIconDes;
        }

        return response()->json(['result' => $result]);
    }

    public function loadPropertyDetails(Request $request)
    {
        $property_serial = $request->property_serial;

        $result = DB::table('property_main')
            ->where('property_serial', $property_serial)
            ->get();

        foreach ($result as $row) {

            $serial = $row->property_serial;
            $province = $row->property_province;
            $district = $row->property_district;

            $resultIconDes = DB::table('property_ico_and_description')
                ->leftJoin('icon_gallery', 'icon_gallery.icon_gallery_id', '=', 'property_ico_and_description.icon_gallery_id')
                ->where('property_ico_and_description.property_serial', $serial)
                ->get();

            $row->resultIconDes = $resultIconDes;

            $resultQuickSum = DB::table('property_quick_summary')
                ->where('property_serial', $serial)
                ->get();

            $row->resultQuickSum = $resultQuickSum;

            $resultFeature = DB::table('property_features')
                ->where('property_serial', $serial)
                ->get();

            $row->resultFeature = $resultFeature;

            $resultFeaturedItem = DB::table('property_main')
                ->skip(0)
                ->take(3)
                ->inRandomOrder()
                ->get();

            $row->resultFeaturedItem = $resultFeaturedItem;

            $resultLatest = DB::table('property_main')
                ->skip(0)
                ->take(3)
                ->orderBy('created_date', 'desc')
                ->get();

            $row->resultLatest = $resultLatest;

            $resultImageSlider = DB::table('property_images')
                ->where('property_serial', $serial)
                ->get();

            $row->resultImageSlider = $resultImageSlider;

            $resultSimilarProperties = DB::table('property_main')
                ->where('property_province', $province)
                ->when($district, function ($query) use ($district) {
                    $query->where('property_district', $district);
                })
                ->get();

            $row->resultSimilarProperties = $resultSimilarProperties;

            foreach ($resultSimilarProperties as $rowSP) {

                $serialSP = $rowSP->property_serial;

                $resultIconDesSP = DB::table('property_ico_and_description')
                    ->leftJoin('icon_gallery', 'icon_gallery.icon_gallery_id', '=', 'property_ico_and_description.icon_gallery_id')
                    ->where('property_ico_and_description.property_serial', $serialSP)
                    ->get();

                $rowSP->resultIconDesSP = $resultIconDesSP;
            }


        }

        return response()->json(['result' => $result]);
    }

    public function loadIndexPagePropertyDetails(Request $request)
    {
        $result = DB::table('property_main')
            ->where('featured_properties', true)
            ->skip(0)
            ->take(6)
            ->orderBy('created_date', 'desc')
            ->get();

        foreach ($result as $row) {

            $serial = $row->property_serial;

            $resultIconDesx = DB::table('property_ico_and_description')
                ->leftJoin('icon_gallery', 'icon_gallery.icon_gallery_id', '=', 'property_ico_and_description.icon_gallery_id')
                ->where('property_ico_and_description.property_serial', $serial)
                ->get();

            $row->resultIconDes = $resultIconDesx;
        }


        $resultx = DB::table('property_main')
            ->where('featured_properties', true)
            ->orderBy('created_date', 'desc')
            ->orWhere('best_deal', '=', true)
            ->get();

        foreach ($resultx as $row) {

            $serial = $row->property_serial;

            $resultIconDes = DB::table('property_ico_and_description')
                ->leftJoin('icon_gallery', 'icon_gallery.icon_gallery_id', '=', 'property_ico_and_description.icon_gallery_id')
                ->where('property_ico_and_description.property_serial', $serial)
                ->get();

            $row->resultIconDes = $resultIconDes;
        }

        return response()->json(['result' => $result, 'resultx' => $resultx]);

    }

    public function loadFavoriteProperties(Request $request)
    {
        $property_serials = $request->property_serials;

        $result = DB::table('property_main')
            ->whereIn('property_serial', $property_serials)
            ->get();

        foreach ($result as $row) {

            $serial = $row->property_serial;

            $resultIconDes = DB::table('property_ico_and_description')
                ->leftJoin('icon_gallery', 'icon_gallery.icon_gallery_id', '=', 'property_ico_and_description.icon_gallery_id')
                ->where('property_ico_and_description.property_serial', $serial)
                ->get();

            $row->resultIconDes = $resultIconDes;
        }

        return response()->json(['result' => $result]);
    }

    public function subscribeMail(Request $request)
    {
        $email = $request->email;
        $datetime = date('Y-m-d H:i:s');

        DB::table('subscrptions')->insert(
            ['emails' => $email, 'createddate' => $datetime, 'stat' => "New"]
        );

        return response()->json(['result' => true]);
    }

    public function contactUsSendMessage(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $messageText = $request->message;
        $datetime = date('Y-m-d H:i:s');

        $data = ['name' => $name, "email" => $email, "messageText" => $messageText, "datetime" => $datetime];

        $emails = ['ceylonpropertyagents@gmail.com', 'thanushkajayasinghe@gmail.com'];

        Mail::send('emails.contact_us_email', $data, function ($message) use ($emails) {
            $message->to($emails)->subject('Customer Message');
            $message->from('mailsendcpa@gmail.com', 'ceylonpropertyagents.com');
        });

        return response()->json('Success');
    }
}
