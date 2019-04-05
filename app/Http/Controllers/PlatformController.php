<?php

namespace App\Http\Controllers;

use App\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function index()
    {
        $resources = Platform::all();
        return view("platform.index", compact("resources"));
    }

    public function create()
    {
        return view("platform.create");
    }

    public function store(Request $request)
    {
        $payload = $request->except(["_token"]);
        $payload["slug"] = str_slug($payload["name"]);

        Platform::create($payload);

        return redirect(route("platforms"));
    }

    public function edit($id)
    {
       $resource = Platform::findOrFail($id);
       return view("platform.edit", compact("resource"));
    }

    public function update($id, Request $request)
    {
        $payload = $request->except(["_token", "_method"]);
        $payload["slug"] = str_slug($payload["name"]);

        Platform::where("id", $id)->update($payload);

        return redirect(route("platforms"));
    }

    public function destroy($id)
    {
        Platform::where("id", $id)->delete();
        return redirect(route("platforms"));
    }
}
