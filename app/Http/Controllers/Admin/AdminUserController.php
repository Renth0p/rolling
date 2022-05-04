<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AdminFormRequest;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = AdminUser::orderBy("created_at", "DESC")->paginate(3);

        return view("admin.adminUsers.main", [
            "users" => $users,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.adminUsers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AdminFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminFormRequest $request)
    {
        $data = $request->validated();
        AdminUser::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        return redirect("/admin/adminUsers/");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = AdminUser::findOrFail($id);

        return view("admin.adminUsers.create", [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AdminFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(AdminFormRequest $request, $id)
    {
        $user = AdminUser::findOrFail($id);
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect("/admin/adminUsers/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdminUser::destroy($id);

        return redirect("/admin/adminUsers/");
    }
}
