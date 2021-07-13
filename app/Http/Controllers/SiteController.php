<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteRequest;
use App\Models\Site;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('sites.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('sites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SiteRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SiteRequest $request)
    {
        try {
            $sites = new Site();

            $sites->Email = $request->email;
            $sites->Password = Hash::make($request->password);
            $sites->Subdomain = $request->subdomain;
            $sites->Domain = $request->domain;
            $sites->save();

            return redirect()->route('sites.index')->with('success', 'Sites Add Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\View\View
     */
    public function show(Site $site)
    {
        return view('sites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Site $site)
    {
        return redirect()->route('sites.index')->with('success', 'Sites deleted Successfully');
    }
}
