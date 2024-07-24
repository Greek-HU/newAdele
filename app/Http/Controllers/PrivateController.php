<?php

namespace App\Http\Controllers;

use App\Models\NailGroupment;
use App\Models\NailSize;
use App\Models\NailType;
use App\Models\Price;
use App\Models\SizePrice;
use App\Models\User;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function editService()
    {
        $user = User::find(1);
        $nailTypes = NailType::with('size', 'price')->get();
        $nailSizes = NailSize::with('type', 'prices')->get();
        $nailPrices = Price::all();
        $Naildatas = [];
        foreach ($nailTypes as $nailType){
            $Size = $nailType->size;
            $Price = $nailType->price;
        }
        foreach ($nailSizes as $nailSize){
            $SizePrice = $nailSize->type;
        }
        $Naildatas[] = [
            'Size' => $Size,
            'Price' => $Price,
            'SizePrice' => $SizePrice,
        ];

        return view(
            'private.editService',
            [
                'Naildatas' => $Naildatas,
                'nailTypes' => $nailTypes,
                'nailSizes' => $nailSizes,
                'nailPrices' => $nailPrices,
            ]
        );
    }
    public function updateType(Request $request, $type_id)
    {
        $nailTypes = NailType::find($type_id);
        $nailTypes->type = $request->input('editnailtype');
        $nailTypes->update();

        return redirect()->route('editService')->with('status', 'A típus sikeresen elmentve!');
        
    }
    public function editNail(NailSize $id)
    {
        $nailTypes = NailType::all();
        $nailSizes = NailSize::all();
        $oldSizes = NailSize::find($id);
        $oldPrices = NailSize::with('prices')->get();
        $newid = $id->id;
        return view(
            'private.editSize',
            [
                'nailTypes' => $nailTypes,
                'nailSizes' => $nailSizes,
                'oldSizes' => $oldSizes,
                'oldPrices' => $oldPrices,
                'newid' => $newid
            ],
            compact('oldSizes')
        );
    }
    public function updateNail(Request $request, $newid)
    {
        $nailSizes = NailSize::find($newid);
        $nailSizes->size_name = $request->input('newSize');
        $nailSizes->price = $request->input('newPrice');

        $nailSizes->update();

        return redirect()->route('editService')->with('status', 'A Méret és/vagy Ár sikeresen mentve!');
    }

    public function storeImage(Request $request)
    {
    }
    public function editContact()
    {
        $user = User::find(1);
        return view('private.editContact');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function updateCont(Request $request)
    {
        $user = User::find(1);
        $user->email = $request->input('newEmail');
        $user->phoneNum = $request->input('newPhoneNum');

        $user->address = $request->input('newAddress');

        $user->update();

        return redirect()->route('editContForm')->with('status', 'Student Updated Successfully');
    }
    public function addBox(Request $request)
    {
        $nailType = NailType::all();
        $nailSizes = NailSize::all();
        $nailsGroupments = NailGroupment::all();


        return response()->json([
            'status' => 200,
            'nailType' => $nailType,
            'nailSizes' => $nailSizes,
            'nailsGroupments' => $nailsGroupments


        ]);
    }
    public function createBox(Request $request)
    {
        $nailType = NailType::all();

        $data = $request->all();
        
        $data = NailType::create([
            'type' => $data['newNailType'],
            'size_title' => $data['newNailSize'],
            'price_title' => $data['newNailPrice'],
        ]);

        return redirect()->route('editService')->with('succes', 'Az új elem létrehozva!');

    }
    public function addElement(Request $request)
    {
        $nailTypes = NailType::all();
        $nailSize = NailSize::all();
        $nailSizes = NailSize::with('prices')->get();
        $Prices = Price::all();
        $SizePrice = SizePrice::all();
        $nailsGroupments = NailGroupment::all();
        return response()->json([
            'status' => 200,
            'nailTypes' => $nailTypes,
            'nailSize' => $nailSize,
            'nailSizes' => $nailSizes,
            'sizeprice' => $SizePrice,
            'nailPrices' => $Prices,
            'nailsGroupments' => $nailsGroupments

        ]);
    }
    public function createElement(Request $request)
    {
        $nailSize = NailSize::all();
        $Price = Price::all();

        $data = $request->all();
        //dd($data);
        NailGroupment::create([
            'type_id' => $data['newType'],
            'size_id' => $data['newNailSize'],
            'price_id' => $data['newAmount'],
        ]);/*
        Price::create([
            'price_id' => $data['newAmount'],
        ]);
/*
        $data = $request->all();
        
       $data = NailSize::create([
            'size_name' => $data['newNailSize'],
        ]);

        $data = Price::create([
            'amount' => $data['newAmount'],
        ]);*/
        

        return redirect()->route('editService')->with('succes', 'Az új elem létrehozva!');

    }
    public function destroy($id)
    {
        $nailType = NailType::find($id);
        $nailType->delete();
        return redirect()->route('editService');
    }
}
