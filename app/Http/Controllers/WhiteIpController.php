<?php

namespace App\Http\Controllers;
use App\Http\Requests\WhiteIpRequest;
use App\Models\WhiteIp;
use Illuminate\Http\Request;

class WhiteIpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ips = WhiteIp::all();
        return view('whiteips.index', compact('ips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('whiteips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WhiteIpRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(WhiteIpRequest $request)
    {
        if(WhiteIp::where('ip',ip2long($request->ip))->get()->count() > 0)
            return redirect()->back()->with('error', 'Данный IP адрес уже добавлен.');
        $ip = new WhiteIp();
        $ip->ip = ip2long($request->ip);
        $ip->active = $request->active == 1 ? 1 : 0;
        $ip->save();
        return redirect('whiteips')->with('success', 'IP адрес добавлен успешно.');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ip = WhiteIp::find($id);
        return view('whiteips.edit', compact('ip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WhiteIpRequest|Request $request
     * @param  int                   $id
     * @return \Illuminate\Http\Response
     */
    public function update(WhiteIpRequest $request, $id)
    {
        if(WhiteIp::where('ip',ip2long($request->ip))->where('id', "!=", $id)->get()->count() > 0)
            return redirect()->back()->with('error', 'Данный IP адрес уже добавлен.');
        $ip = WhiteIp::find($id);
        $ip->ip = ip2long($request->ip);
        $ip->active = $request->active == 1 ? 1 : 0;
        $ip->update();
        return redirect('whiteips')->with('success', 'IP адрес устпешно обновленю');
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
